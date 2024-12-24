<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Discord\Discord;
use App\Services\DiscordService;
use Exception;


class TorneosModel extends Model
{
    use HasFactory;

    protected $table = 'torneos';

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'entrada',
        'descripcion',
        'reglas',
        'imagen',
        'capacidad_maxima',
        'inscritos_actuales',
        'torneo_juego_id',
        'recompensas_id',
        'moderador_id',
        'administrador_id',
    ];



    public function torneoJuego()
    {
        return $this->belongsTo(TorneosJuegoModel::class, 'torneo_juego_id');
    }

    public function recompensa()
    {
        return $this->hasMany(RecompensasTipoModel::class, 'recompensas_id');
    }
    public function recompensas(){
        return $this->belongsTo(RecompensasModel::class,'torneo_id');
    }

    public function moderador()
    {
        return $this->belongsTo(ModerModel::class, 'moderador_id');
    }

    public function administrador()
    {
        return $this->belongsTo(AdminModel::class, 'administrador_id');
    }

    // Relación con los equipos (grupos) del torneo
    public function equipos()
    {
        return $this->hasMany(EquiposModel::class, 'torneo_id');
    }

    // Relación con los usuarios del torneo
    public function usuarios()
    {
        return $this->belongsToMany(
            UserModel::class,
            'torneos_has_usuarios',  // Tabla intermedia
            'torneo_id',             // Llave foránea a torneos
            'usuario_id'             // Llave foránea a usuarios
        );
    }

    // Método para verificar si el torneo está lleno
    public function estaLleno()
    {
        return $this->usuarios()->count() >= $this->capacidad_maxima;
    }
    

    public function fases()
    {
        return $this->belongsToMany(FasesModel::class, 'equipo_torneo_fase_partida_models', 'torneo_id', 'fase_id')
                    ->withTimestamps();
    }
    public function partidas()
    {
        return $this->belongsToMany(PartidasModel::class, 'equipo_torneo_fase_partida_models', 'torneo_id', 'partida_id')
                    ->withTimestamps();
    }
    

    public function crearCanalDiscord()
    {
        $discordService = new DiscordService();
        dump($discordService);

        return $discordService->crearCanal('1314002945628704800', 'Prueba_2');
    }
}