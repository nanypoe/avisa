<?php

namespace Database\Seeders;

use App\Models\Enfermedad;
use Illuminate\Database\Seeder;

class EnfermedadSeeder extends Seeder
{
    public function run(): void
    {
        $enfermedades = [
            [
                'nombre' => 'Dengue',
                'descripcion' => 'Enfermedad viral transmitida por mosquitos Aedes aegypti',
                'signos_alarma' => 'Fiebre alta, dolor detrás de los ojos, erupción cutánea, sangrado',
                'es_prioritaria' => true
            ],
            [
                'nombre' => 'Malaria',
                'descripcion' => 'Enfermedad parasitaria transmitida por mosquitos Anopheles',
                'signos_alarma' => 'Fiebre, escalofríos, sudoración, dolor de cabeza, náuseas',
                'es_prioritaria' => true
            ],
            [
                'nombre' => 'Infecciones Respiratorias Agudas (IRAs)',
                'descripcion' => 'Infecciones que afectan el sistema respiratorio',
                'signos_alarma' => 'Dificultad para respirar, fiebre persistente, dolor torácico',
                'es_prioritaria' => true
            ],
            [
                'nombre' => 'Hipertensión Arterial',
                'descripcion' => 'Enfermedad crónica caracterizada por presión arterial elevada',
                'signos_alarma' => 'Dolor de cabeza intenso, visión borrosa, dolor torácico',
                'es_prioritaria' => false
            ],
            [
                'nombre' => 'Diabetes Mellitus',
                'descripcion' => 'Enfermedad metabólica caracterizada por niveles altos de glucosa',
                'signos_alarma' => 'Sed excesiva, hambre constante, visión borrosa, fatiga',
                'es_prioritaria' => false
            ],
            [
                'nombre' => 'Leptospirosis',
                'descripcion' => 'Enfermedad bacteriana transmitida por contacto con agua contaminada',
                'signos_alarma' => 'Fiebre alta, dolor muscular, ictericia, insuficiencia renal',
                'es_prioritaria' => true
            ],
            [
                'nombre' => 'Chikungunya',
                'descripcion' => 'Enfermedad viral transmitida por mosquitos',
                'signos_alarma' => 'Fiebre alta, dolor articular intenso, erupción cutánea',
                'es_prioritaria' => true
            ],
            [
                'nombre' => 'Zika',
                'descripcion' => 'Enfermedad viral transmitida por mosquitos Aedes',
                'signos_alarma' => 'Fiebre leve, erupción cutánea, conjuntivitis, dolor muscular',
                'es_prioritaria' => true
            ]
        ];

        foreach ($enfermedades as $enfermedad) {
            Enfermedad::firstOrCreate(
                ['nombre' => $enfermedad['nombre']],
                $enfermedad
            );
        }
    }
}