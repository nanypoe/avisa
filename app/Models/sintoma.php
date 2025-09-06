<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class sintoma extends Model
{
    use HasFactory;

    //Un sintoma pertenece a muchas enfermedades (a través de la tabla pivote enfermedad_sintoma)
    public function enfermedades(): BelongsToMany
    {
        return $this->belongsToMany(Enfermedad::class);
    }
}
