<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class AdminModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'administradores';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function noticias() { return $this->hasMany(noticiasModel::class, 'administrador_id'); }
    public function torneo() { return $this->hasMany(noticiasModel::class, 'administrador_id'); }
}
