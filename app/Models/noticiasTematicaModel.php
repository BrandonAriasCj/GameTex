<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class noticiasTematicaModel extends Model
{
    protected $table = 'noticias_tematica';

    // Define los campos que se pueden llenar de manera masiva
    protected $fillable = [
        'id',
        'nombre',

    ];
    public function noticias() { return $this->hasMany(noticiasModel::class, 'noticias_tematica_id'); }
}
