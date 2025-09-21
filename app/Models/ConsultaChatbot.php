<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultaChatbot extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'sintomas_seleccionados',
        'enfermedades_sugeridas',
        'recomendaciones',
        'edad_usuario',
        'genero_usuario',
        'ubicacion_municipio_id'
    ];

    protected $casts = [
        'sintomas_seleccionados' => 'array',
        'enfermedades_sugeridas' => 'array',
        'created_at' => 'datetime'
    ];

    /**
     * Una consulta puede pertenecer a un municipio (ubicación del usuario)
     */
    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'ubicacion_municipio_id');
    }

    /**
     * Accesor para obtener síntomas como colección
     */
    public function getSintomasAttribute()
    {
        return Sintoma::whereIn('id', $this->sintomas_seleccionados ?? [])->get();
    }

    /**
     * Accesor para obtener enfermedades sugeridas como colección
     */
    public function getEnfermedadesAttribute()
    {
        return Enfermedad::whereIn('id', $this->enfermedades_sugeridas ?? [])->get();
    }
}