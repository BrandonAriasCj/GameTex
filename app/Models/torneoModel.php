<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class torneoModel extends Model
{
    protected $table = 'torneos';

    // Asegúrate de incluir 'imagen' en la lista de fillable
    protected $fillable = [
        'nombrej', 
        'creador', 
        'fecha_inicio', 
        'fecha_fin', 
        'exp', 
        'torneo_juego_id', 
        'evento_tipo_id', 
        'moderador_id', 
        'administrador_id',
        'imagen', // Nueva columna para la ruta o URL de la imagen
        'created_at', 
        'updated_at', 
    ];

    public function juego()
    {
        return $this->belongsTo(torneoJuegosModel::class, 'torneo_juego_id');
    }

    public function eventoTipo()
    {
        return $this->belongsTo(eventosTipoModel::class, 'evento_tipo_id');
    }

    public function moderador()
    {
        return $this->belongsTo(ModerModel::class, 'moderador_id');
    }

    public function administrador()
    {
        return $this->belongsTo(AdminModel::class, 'administrador_id');
    }

    /**
     * Método para obtener la URL completa de la imagen del torneo
     */
    public function getImagenUrlAttribute()
    {
        // Verifica si el campo contiene una ruta local o una URL completa
        if (filter_var($this->imagen, FILTER_VALIDATE_URL)) {
            return $this->imagen;
        }

        // Si es una ruta local, prepende la URL base del servidor
        return asset('storage/' . $this->imagen);
    }
}
