<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class noticiasTematicaModel extends Model
{
    protected $table = 'noticias';

    // Define los campos que se pueden llenar de manera masiva
    protected $fillable = [
        'id',
        'nombre',

    ];
}
