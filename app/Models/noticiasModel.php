<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    ];

    // Relación con el modelo Administrador
    public function administrador()
    {
        return $this->belongsTo(AdminModel::class, 'administrador_id');
    }
    public function tematica() { 
        return $this->belongsTo(noticiasTematicaModel::class, 'noticias_tematica_id');
    }
    
}