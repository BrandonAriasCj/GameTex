<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class torneoJuegosModel extends Model
{
    protected $table = 'torneos_juegos';
    protected $fillable = [
        'nombre', 
        'created_at', 
        'updated_at', 
    ];
    public function torneos() { 
        return $this->hasMany(torneoModel::class, 'torneo_juego_id');
    }
}
