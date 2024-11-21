<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eventosModel extends Model
{
    protected $table = 'eventos';
    protected $fillable = [
        'id',
        'fecha_inicio',
        'fecha_fin',
        'created_at',
        'updated_date',
        'evento_tipo_id', 
        'moderador_id',
    ];
    public function eventosTipo() 
    { 
        return $this->belongsTo(eventosTipoModel::class, 'evento_tipo_id'); 
    } 
    public function moderador() 
    { 
        return $this->belongsTo(ModerModel::class, 'moderador_id');
    }
}
