<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class noticiasModel extends Model
{

    protected $table = 'noticias';

    // Define los campos que se pueden llenar de manera masiva
    protected $fillable = [
        'titulo',
        'contenido',
        'portada',
        'imagen1',
        'imagen2',
        'fecha_publicacion',
        'administrador_id',
        'noticias_tematica_id',
    ];

    // Relación con el modelo Administrador
    public function administrador()
    {
        return $this->belongsTo(AdminModel::class, 'administrador_id');
    }
    public function tematica() { 
        return $this->belongsTo(noticiasTematicaModel::class, 'noticias_tematica_id');
    }
    
    public static function search($search = null, $searchType = null)
    {
        $query = self::with(['administrador', 'tematica']);

        if ($search && $searchType) {
            if ($searchType == 'titulo') {
                $query->where('titulo', 'like', "%{$search}%");
            } elseif ($searchType == 'tematica') {
                $query->whereHas('tematica', function($q) use ($search) {
                    $q->where('nombre', 'like', "%{$search}%");
                });
            }
        }

        return $query->paginate(4);
    }
    
    public static function storeNoticia(array $data, $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string',
            'contenido' => 'required|string',
            'portada' => 'required|image',
            'imagen1' => 'image|nullable',
            'imagen2' => 'image|nullable',
            'noticias_tematica_id' => 'required|exists:noticias_tematica,id',
        ]);
        $administrador = Auth::guard('admin')->user();

        if (!$administrador) {
            throw new \Exception('No hay ningún administrador autenticado.');
        }

        $data = [
            'titulo' => $validatedData['titulo'],
            'contenido' => $validatedData['contenido'],
            'portada' => $request->file('portada')->store('public/noticias'),
            'imagen1' => $request->file('imagen1') ? $request->file('imagen1')->store('public/noticias') : null,
            'imagen2' => $request->file('imagen2') ? $request->file('imagen2')->store('public/noticias') : null,
            'fecha_publicacion' => now(),
            'administrador_id' => $administrador->id,
            'noticias_tematica_id' => $validatedData['noticias_tematica_id'],
        ];

        return self::create($data);
    }

    public static function updateNoticia($id, array $data)
    {
        $noticia = self::findOrFail($id);
        $noticia->update($data);

        return $noticia;
    }
}