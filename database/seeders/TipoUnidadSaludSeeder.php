<?php

namespace Database\Seeders;

use App\Models\TipoUnidadSalud;
use Illuminate\Database\Seeder;

class TipoUnidadSaludSeeder extends Seeder
{
    
    public function run(): void
    {
        $tipos = [
            [
                'nombre' => 'Hospital',
                'icono' => 'hospital-icon.png',
                'descripcion' => 'Establecimiento de salud de tercer nivel con capacidad de hospitalización'
            ],
            [
                'nombre' => 'Centro de Salud',
                'icono' => 'health-center-icon.png', 
                'descripcion' => 'Establecimiento de salud de primer y segundo nivel para atención básica'
            ],
            [
                'nombre' => 'Puesto de Salud',
                'icono' => 'health-post-icon.png',
                'descripcion' => 'Unidad básica de salud para atención primaria en comunidades'
            ],
            [
                'nombre' => 'Clínica',
                'icono' => 'clinic-icon.png',
                'descripcion' => 'Establecimiento médico privado o especializado'
            ],
            [
                'nombre' => 'Puesto Médico',
                'icono' => 'medical-post-icon.png',
                'descripcion' => 'Punto de atención médica básica en zonas rurales'
            ]
        ];

        foreach ($tipos as $tipo) {
            TipoUnidadSalud::firstOrCreate(
                ['nombre' => $tipo['nombre']],
                $tipo
            );
        }
    }
}