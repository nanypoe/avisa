<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;

    // Un Municipio pertenece a un Departamento
    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }


// Un municipio puede tener muchas Unidades de Salud
    public function unidadesSalud(): HasMany
    {
        return $this->hasMany(UnidadSalud::class);
    }

// Un municipio puede tener muchos Eventos de Salud
    public function eventosSalud(): HasMany
    {
        return $this->hasMany(EventoSalud::class);
    }

}  
