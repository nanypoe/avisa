<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoUnidadSalud extends Model
{
    use HasFactory;

    protected $table = "tipo_unidad_salud";
    protected $fillable = [
        'nombre',
        'icono',
        'descripcion'
    ];

    
    public function unidadesSalud(): HasMany
    {
        return $this->hasMany(UnidadSalud::class);
    }

    /**
     * Accesor para obtener el icono con ruta completa
     */
    public function getIconoUrlAttribute()
    {
        if ($this->icono) {
            return asset('storage/' . $this->icono);
        }
        
        return asset('images/default-unit-icon.png');
    }
}