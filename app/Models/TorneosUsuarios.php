<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TorneosUsuarios extends Model
{
    protected $table = 'torneo_usuario'; // Especifica el nombre de la tabla
    
    // Si no estás utilizando timestamps en esta tabla, puedes desactivarlos
    public $timestamps = false;

    // Define la relación con el modelo Torneo
    public function torneo()
    {
        return $this->belongsTo(torneoModel::class, 'torneo_id');
    }

    // Define la relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(UserModel::class, 'usuario_id');
    }
}
