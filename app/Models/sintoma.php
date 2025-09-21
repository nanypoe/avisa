<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sintoma extends Model
{
    use HasFactory;

    protected $table = "sintomas";
    protected $fillable = [
        'nombre',
        'pregunta',
        'es_signo_alarma',
        'tipo',
        'prioridad',
        'categoria'
    ];

    protected $casts = [
        'es_signo_alarma' => 'boolean'
    ];

    /**
     * Un síntoma pertenece a muchas enfermedades
     */
    public function enfermedades(): BelongsToMany
    {
        return $this->belongsToMany(Enfermedad::class, 'enfermedad_sintoma')
                    ->withPivot('relevancia')
                    ->withTimestamps();
    }

    /**
     * Scope para obtener solo signos de alarma
     */
    public function scopeSignosAlarma($query)
    {
        return $query->where('es_signo_alarma', true);
    }

    /**
     * Scope para obtener síntomas por categoría
     */
    public function scopePorCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }
}