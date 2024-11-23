<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class noticiasModel extends Model
{

    protected $table = 'noticias';

 
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
    
}