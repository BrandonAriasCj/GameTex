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
    public static function search($search, $searchType)
    {
        $query = self::with(['juego', 'eventoTipo', 'moderador', 'administrador']);

        if (!empty($search) && !empty($searchType)) {
            if ($searchType == 'nombre') {
                $query->where('nombrej', 'like', "%{$search}%");
            } elseif ($searchType == 'nombrej') {
                $query->whereHas('juego', function($q) use ($search) {
                    $q->where('nombre', 'like', "%{$search}%");
                });
            } elseif ($searchType == 'moderador') {
                $query->whereHas('moderador', function($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
            }
        }

        return $query;
    }
    public static function store(array $data, $administrador)
    {
        $juegoDiccionario = JuegosDModel::find($data['juego_id']);

        $juego = torneoJuegosModel::firstOrCreate(
            ['nombre' => $juegoDiccionario->nombre]
        );

        return self::create([
            'nombrej' => $data['nombrej'],
            'creador' => $administrador->name,
            'fecha_inicio' => $data['fecha_inicio'],
            'fecha_fin' => $data['fecha_fin'],
            'exp' => $data['exp'],
            'torneo_juego_id' => $juego->id,
            'evento_tipo_id' => $data['evento_tipo_id'],
            'moderador_id' => $data['moderador_id'],
            'administrador_id' => $administrador->id,
        ]);
    }

}
