<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosModel extends Model
{
    protected $table = 'eventos';
    protected $fillable = [
        'id','fecha_inicio','fecha_fin',
        'updated_date',
    ];
}
