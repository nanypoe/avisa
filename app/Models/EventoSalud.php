<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventoSalud extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'tipo_evento',
        'fecha_inicio',
        'fecha_fin',
        'latitud',
        'longitud',
        'municipio_id',
        'direccion',
        'organizador',
        'es_gratuito'
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
        'es_gratuito' => 'boolean'
    ];

    /**
     * Un evento de salud pertenece a un municipio
     */
    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class);
    }

    /**
     * Accesor para obtener el departamento a través del municipio
     */
    public function getDepartamentoAttribute()
    {
        return $this->municipio->departamento ?? null;
    }
}