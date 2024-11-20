<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosTipoModel extends Model
{
    protected $table = 'eventos_tipo';
    protected $fillable = [
        'id','fecha_inicio','fecha_fin',
        'updated_date',
    ];
}
