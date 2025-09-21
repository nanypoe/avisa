<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Enfermedad extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'signos_alarma', 'es_prioritaria'];

    //Una enfermedad pertenece a muchos sintomas
    public function sintomas(): BelongsToMany
    {
        return $this->belongsToMany(Sintoma::class, 'enfermedad_sintoma')->withPivot('relevancia'); // Tabla pivote con campo adicional 'relevancia'
}
}