<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class torneoModel extends Model
{
    protected $table = 'torneos';
    protected $fillable = [
        'nombrej', 
        'creador', 
        'fecha_inicio', 
        'fecha_fin', 
        'exp', 
        'torneo_juego_id', 
        'evento_tipo_id', 
        'moderador_id', 
        'administrador_id',
        'created_at', 
        'updated_at', 
    ];

    public function juego()
    {
        return $this->belongsTo(torneoJuegosModel::class, 'torneo_juego_id');
    }

    public function eventoTipo()
    {
        return $this->belongsTo(eventosTipoModel::class, 'evento_tipo_id');
    }

    public function moderador()
    {
        return $this->belongsTo(ModerModel::class, 'moderador_id');
    }

    public function administrador()
    {
        return $this->belongsTo(AdminModel::class, 'administrador_id');
    }
}
