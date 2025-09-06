<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    use HasFactory;
// Un Departamente tiene muchos Municipios
    public function municipios(): HasMany
    {
        return $this->hasMany(Municipio::class);
    }
}
