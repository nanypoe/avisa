<?php

namespace Database\Seeders;

use App\Models\EventoSalud;
use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventoSaludSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener municipios
        $managua = Municipio::where('nombre', 'Managua')->first();
        $leon = Municipio::where('nombre', 'León')->first();
        $masaya = Municipio::where('nombre', 'Masaya')->first();
        $granada = Municipio::where('nombre', 'Granada')->first();
        $esteli = Municipio::where('nombre', 'Estelí')->first();
        $chinandega = Municipio::where('nombre', 'Chinandega')->first();
        $matagalpa = Municipio::where('nombre', 'Matagalpa')->first();
        $juigalpa = Municipio::where('nombre', 'Juigalpa')->first();

        $eventos = [
            [
                'titulo' => 'Feria de Salud Integral Managua',
                'descripcion' => 'Jornada gratuita de atención médica, vacunación, toma de presión arterial y glucosa, consejería nutricional y actividades recreativas para toda la familia.',
                'tipo' => 'feria',
                'fecha_inicio' => Carbon::now()->addDays(5)->setTime(8, 0),
                'fecha_fin' => Carbon::now()->addDays(5)->setTime(16, 0),
                'latitud' => 12.1364,
                'longitud' => -86.2694,
                'municipio_id' => $managua->id,
                'lugar' => 'Parque Central de Managua',
                'organizador' => 'MINSA y Alcaldía de Managua',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Jornada de Vacunación Nacional León',
                'descripcion' => 'Jornada especial de vacunación para completar esquemas de niños, niñas, embarazadas y adultos mayores. Traer cartilla de vacunación.',
                'tipo' => 'jornada',
                'fecha_inicio' => Carbon::now()->addDays(3)->setTime(7, 30),
                'fecha_fin' => Carbon::now()->addDays(3)->setTime(15, 30),
                'latitud' => 12.4343,
                'longitud' => -86.8775,
                'municipio_id' => $leon->id,
                'lugar' => 'Centro de Salud Sócrates Flores',
                'organizador' => 'MINSA León',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Campamento de Detección de Diabetes Masaya',
                'descripcion' => 'Detección gratuita de diabetes, consejería nutricional, charlas educativas y entrega de material informativo sobre manejo de diabetes.',
                'tipo' => 'campamento',
                'fecha_inicio' => Carbon::now()->addDays(10)->setTime(9, 0),
                'fecha_fin' => Carbon::now()->addDays(10)->setTime(14, 0),
                'latitud' => 11.9744,
                'longitud' => -86.0958,
                'municipio_id' => $masaya->id,
                'lugar' => 'Polideportivo de Masaya',
                'organizador' => 'Asociación Nicaragüense de Diabetes',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Charla sobre Prevención de Dengue Granada',
                'descripcion' => 'Charla educativa sobre prevención del dengue, identificación de criaderos, demostración de limpieza y entrega de material preventivo.',
                'tipo' => 'charla',
                'fecha_inicio' => Carbon::now()->addDays(7)->setTime(10, 0),
                'fecha_fin' => Carbon::now()->addDays(7)->setTime(12, 0),
                'latitud' => 11.9344,
                'longitud' => -85.9561,
                'municipio_id' => $granada->id,
                'lugar' => 'Casa de la Cultura de Granada',
                'organizador' => 'MINSA Granada',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Feria de Salud Mental Estelí',
                'descripcion' => 'Jornada de atención en salud mental, consejería psicológica, técnicas de manejo de estrés y actividades de relajación para la comunidad.',
                'tipo' => 'feria',
                'fecha_inicio' => Carbon::now()->addDays(14)->setTime(8, 30),
                'fecha_fin' => Carbon::now()->addDays(14)->setTime(15, 0),
                'latitud' => 13.0915,
                'longitud' => -86.3533,
                'municipio_id' => $esteli->id,
                'lugar' => 'Parque Central de Estelí',
                'organizador' => 'MINSA y Universidad Nacional Autónoma de Nicaragua',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Jornada de Hipertensión Arterial Chinandega',
                'descripcion' => 'Toma gratuita de presión arterial, consejería sobre hábitos saludables y entrega de recetas para control de hipertensión.',
                'tipo' => 'jornada',
                'fecha_inicio' => Carbon::now()->addDays(6)->setTime(8, 0),
                'fecha_fin' => Carbon::now()->addDays(6)->setTime(13, 0),
                'latitud' => 12.6294,
                'longitud' => -87.1311,
                'municipio_id' => $chinandega->id,
                'lugar' => 'Mercado Municipal de Chinandega',
                'organizador' => 'MINSA Chinandega',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Campamento de Salud Rural Matagalpa',
                'descripcion' => 'Atención médica general, entrega de medicamentos básicos, vacunación y charlas educativas para comunidades rurales.',
                'tipo' => 'campamento',
                'fecha_inicio' => Carbon::now()->addDays(12)->setTime(7, 0),
                'fecha_fin' => Carbon::now()->addDays(12)->setTime(16, 0),
                'latitud' => 12.9254,
                'longitud' => -85.9174,
                'municipio_id' => $matagalpa->id,
                'lugar' => 'Comunidad El Chile, Matagalpa',
                'organizador' => 'MINSA y Médicos Sin Fronteras',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Charla sobre Lactancia Materna Juigalpa',
                'descripcion' => 'Charla educativa sobre beneficios de la lactancia materna, técnicas adecuadas y resolución de dudas para madres y familias.',
                'tipo' => 'charla',
                'fecha_inicio' => Carbon::now()->addDays(8)->setTime(9, 30),
                'fecha_fin' => Carbon::now()->addDays(8)->setTime(11, 30),
                'latitud' => 12.0833,
                'longitud' => -85.4000,
                'municipio_id' => $juigalpa->id,
                'lugar' => 'Centro de Salud de Juigalpa',
                'organizador' => 'MINSA y UNICEF',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Feria de Salud del Adulto Mayor Managua',
                'descripcion' => 'Atención especializada para adultos mayores: toma de presión, glucosa, consejería nutricional, actividad física adaptada y entrega de suplementos.',
                'tipo' => 'feria',
                'fecha_inicio' => Carbon::now()->addDays(15)->setTime(8, 0),
                'fecha_fin' => Carbon::now()->addDays(15)->setTime(14, 0),
                'latitud' => 12.1364,
                'longitud' => -86.2694,
                'municipio_id' => $managua->id,
                'lugar' => 'Parque Luis Alfonso Velásquez',
                'organizador' => 'MINSA y INSS',
                'es_gratuito' => true
            ],
            [
                'titulo' => 'Jornada de Desparasitación Masaya',
                'descripcion' => 'Jornada de desparasitación masiva para niños y niñas de 2 a 12 años, con charlas educativas sobre higiene y prevención de parásitos.',
                'tipo' => 'jornada',
                'fecha_inicio' => Carbon::now()->addDays(4)->setTime(8, 0),
                'fecha_fin' => Carbon::now()->addDays(4)->setTime(16, 0),
                'latitud' => 11.9744,
                'longitud' => -86.0958,
                'municipio_id' => $masaya->id,
                'lugar' => 'Todos los centros de salud de Masaya',
                'organizador' => 'MINSA Masaya',
                'es_gratuito' => true
            ]
        ];

        foreach ($eventos as $evento) {
            EventoSalud::firstOrCreate(
                [
                    'titulo' => $evento['titulo'],
                    'fecha_inicio' => $evento['fecha_inicio']
                ],
                $evento
            );
        }
    }
}