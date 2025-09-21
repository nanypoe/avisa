<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnidadSalud extends Model
{
    use HasFactory;

    protected $table = "unidades_salud";
    protected $fillable = [
        'nombre', 'direccion', 'telefono', 'horario_atencion',
        'latitud', 'longitud', 'tipo_unidad_salud_id', 'municipio_id', 'servicios'
    ];

    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class);
    }

    public function tipoUnidadSalud(): BelongsTo
    {
        return $this->belongsTo(TipoUnidadSalud::class);
    }
}