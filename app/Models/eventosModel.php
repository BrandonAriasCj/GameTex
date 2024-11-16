<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosModel extends Model
{
    protected $table = 'eventos';
    protected $fillable = [
        'nombre', 'descripcion', 'reglas','fecha_inicio','fecha_fin',
        'updated_date',
    ];
}
