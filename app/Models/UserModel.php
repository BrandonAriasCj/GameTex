<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relación muchos a muchos con la tabla `torneos` usando la tabla intermedia `torneo_usuario`
    public function torneos()
    {
        return $this->belongsToMany(TorneoModel::class, 'torneo_usuario', 'usuario_id', 'torneo_id')
                    ->withTimestamps(); // Incluye timestamps de la tabla intermedia
    }
}
