<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosModel extends Model
{
    protected $table = 'eventos';
    protected $fillable = [
        'id',
        'fecha_inicio',
        'fecha_fin',
        'created_at',
        'updated_date',
        'evento_tipo_id', 
        'moderador_id',
    ];
    public function eventosTipo() 
    { 
        return $this->belongsTo(eventosTipoModel::class, 'evento_tipo_id'); 
    } 
    public function moderador() 
    { 
        return $this->belongsTo(ModerModel::class, 'moderador_id');
    }

    public static function search($search, $searchType)
    {
        $query = self::with(['eventosTipo', 'moderador']);

        if (!empty($search) && !empty($searchType)) {
            if ($searchType == 'nombre') {
                $query->whereHas('eventosTipo', function($q) use ($search) {
                    $q->where('nombre', 'like', "%{$search}%");
                });
            } elseif ($searchType == 'moderador') {
                $query->whereHas('moderador', function($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
            }
        }

        return $query;
    }

    public static function store(array $data)
    {
        $eventoTipo = eventosTipoModel::create([
            'nombre' => $data['evento_tipo_nombre'],
            'descripcion' => $data['descripcion'],
            'categoria' => $data['categoria'],
            'reglas' => $data['reglas'],
        ]);
        return self::create([
            'nombre' => $data['nombre'],
            'fecha_inicio' => $data['fecha_inicio'],
            'fecha_fin' => $data['fecha_fin'],
            'evento_tipo_id' => $eventoTipo->id,
            'moderador_id' => $data['moderador_id'],
        ]);
    }
    public static function updateEvent($id, array $data)
    {
        // Encontrar el evento existente
        $evento = self::findOrFail($id);

        // Actualizar el tipo de evento relacionado
        $evento->eventosTipo->update([
            'nombre' => $data['evento_tipo_nombre'],
            'descripcion' => $data['descripcion_tipo'],
            'categoria' => $data['categoria_tipo'],
            'reglas' => $data['reglas_tipo'],
        ]);

        // Actualizar el evento
        $evento->update([
            'fecha_inicio' => $data['fecha_inicio'],
            'fecha_fin' => $data['fecha_fin'],
            'moderador_id' => $data['moderador_id'],
        ]);

        return $evento;
    }
}