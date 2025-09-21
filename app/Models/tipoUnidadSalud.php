<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tipoUnidadSalud extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'icono'];

    public function unidadesSalud(): HasMany
    {
        return $this->hasMany(UnidadSalud::class);
    }
}
