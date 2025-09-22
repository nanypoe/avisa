<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionSalud extends Model
{
    use HasFactory;

    protected $table = "promociones_salud";
    protected $fillable = [
        'titulo',
        'contenido',
        'categoria',
        'imagen_url',
        'fecha_publicacion',
        'es_activa',
        'autor'
    ];

    protected $casts = [
        'fecha_publicacion' => 'datetime',
        'es_activa' => 'boolean'
    ];

    /**
     * Scope para obtener solo promociones activas
     */
    public function scopeActivas($query)
    {
        return $query->where('es_activa', true);
    }

    /**
     * Scope para buscar por categoría
     */
    public function scopePorCategoria($query, $categoria)
    {
        return $query->where('categoria', $categoria);
    }
}