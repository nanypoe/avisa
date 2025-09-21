<?php

namespace Database\Seeders;

use App\Models\UnidadSalud;
use App\Models\Municipio;
use App\Models\TipoUnidadSalud;
use Illuminate\Database\Seeder;

class UnidadSaludSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener tipos de unidades
        $hospital = TipoUnidadSalud::where('nombre', 'Hospital')->first();
        $centroSalud = TipoUnidadSalud::where('nombre', 'Centro de Salud')->first();
        $puestoSalud = TipoUnidadSalud::where('nombre', 'Puesto de Salud')->first();
        $clinica = TipoUnidadSalud::where('nombre', 'Clínica')->first();

        // Obtener municipios (usaremos Managua, León, Masaya, Granada, Estelí como ejemplos)
        $managua = Municipio::where('nombre', 'Managua')->first();
        $leon = Municipio::where('nombre', 'León')->first();
        $managua = Municipio::where('nombre', 'Masaya')->first();
        $granada = Municipio::where('nombre', 'Granada')->first();
        $esteli = Municipio::where('nombre', 'Estelí')->first();
        $chinandega = Municipio::where('nombre', 'Chinandega')->first();
        $juigalpa = Municipio::where('nombre', 'Juigalpa')->first();
        $matagalpa = Municipio::where('nombre', 'Matagalpa')->first();

        $unidades = [
            // Hospitales
            [
                'nombre' => 'Hospital Bautista',
                'direccion' => 'Costado sur del Recinto Universitario Carlos Fonseca Amador(RUCFA, Managua',
                'telefono' => '+505 2248 2248',
                'horario_atencion' => '24/7',
                'latitud' => 12.142572060028161,
                'longitud' => -86.26254372838906,
                'tipo_unidad_salud_id' => $hospital->id,
                'municipio_id' => $managua->id,
                'servicios' => 'Emergencias, Consulta Externa, Hospitalización, Cirugía'
            ],
            [
                'nombre' => 'Hospital Juan Antonio Brenes Palacio',
                'direccion' => 'Madriz, Nicaragua',
                'telefono' => '+505 2722 2247',
                'horario_atencion' => '24/7',
                'latitud' => 13.482263267925529,
                'longitud' => -86.58658527456234,
                'tipo_unidad_salud_id' => $hospital->id,
                'municipio_id' => $leon->id,
                'servicios' => 'Emergencias, Maternidad, Pediatría, Cirugía'
            ],

            // Centros de Salud
            [
                'nombre' => 'Centro de Salud Dra. Erlinda López',
                'direccion' => 'Managua, Nicaragua',
                'telefono' => '',
                'horario_atencion' => 'Lunes a Viernes 7:00 AM - 5:00 PM',
                'latitud' => 12.15056932070887,
                'longitud' => -86.27655858419548,
                'tipo_unidad_salud_id' => $centroSalud->id,
                'municipio_id' => $managua->id,
                'servicios' => 'Consulta General, Vacunación, Planificación Familiar'
            ],
            [
                'nombre' => 'Centro de Salud Roberto Herrera Ríos',
                'direccion' => '4PPM+J3H, Managua 11131, Nicaragua',
                'telefono' => '',
                'horario_atencion' => 'Lunes a Viernes 7:00 AM - 5:00 PM',
                'latitud' => 12.138181704100397,
                'longitud' => -86.26710533965051,
                'tipo_unidad_salud_id' => $centroSalud->id,
                'municipio_id' => $managua->id,
                'servicios' => 'Consulta General, Vacunación, Planificación Familiar'
            ],
            [
                'nombre' => 'Centro de Salud Jairo Bismark Moncada',
                'direccion' => 'Costado Norte Parque Central, Somoto, Nicaragua',
                'telefono' => '+505 2552 7890',
                'horario_atencion' => 'Lunes a Viernes 7:00 AM - 5:00 PM',
                'latitud' => 13.483122223275275,
                'longitud' => -86.58300407993235,
                'tipo_unidad_salud_id' => $centroSalud->id,
                'municipio_id' => $granada->id,
                'servicios' => 'Consulta General, Laboratorio Básico, Farmacia'
            ],

            // Puestos de Salud
            [
                'nombre' => 'Puesto de Salud San Sebastian',
                'direccion' => '5P49+8XW, 4 Calle Noroeste, Managua 12001',
                'telefono' => '',
                'horario_atencion' => 'Lunes a Viernes 8:00 AM - 4:00 PM',
                'latitud' => 12.156424028981535,
                'longitud' => -86.28013884973133,
                'tipo_unidad_salud_id' => $puestoSalud->id,
                'municipio_id' => $managua->id,
                'servicios' => 'Atención Primaria, Vacunación, Control de Niño Sano'
            ],
            [
                'nombre' => 'Puesto de Salud Santo Domingo',
                'direccion' => 'S5P3M+3M2, Managua',
                'telefono' => '',
                'horario_atencion' => 'Lunes a Viernes 8:00 AM - 4:00 PM',
                'latitud' => 12.154991625522156,
                'longitud' => -86.26589849109872,
                'tipo_unidad_salud_id' => $puestoSalud->id,
                'municipio_id' => $managua->id,
                'servicios' => 'Atención Primaria, Vacunación, Control de Niño Sano'
            ],
            [
                'nombre' => 'José del Carmen Ruíz',
                'direccion' => 'MD, Estatua de Montoya. 1c oeste, 1 1/2c sur',
                'telefono' => '',
                'horario_atencion' => 'Lunes a Viernes 8:00 AM - 4:00 PM',
                'latitud' => 12.146195160459111,
                'longitud' => -86.28906398593153,
                'tipo_unidad_salud_id' => $puestoSalud->id,
                'municipio_id' => $managua->id,
                'servicios' => 'Atención Primaria, Vacunación, Control de Niño Sano'
            ],
            [
                'nombre' => 'Puesto de Salud Pancasán',
                'direccion' => 'FCGC+Q6G, Somoto, Nicaragua',
                'telefono' => '',
                'horario_atencion' => 'Lunes a Viernes 8:00 AM - 4:00 PM',
                'latitud' => 13.47785179159379,
                'longitud' => -86.57933583532214,
                'tipo_unidad_salud_id' => $puestoSalud->id,
                'municipio_id' => $matagalpa->id,
                'servicios' => 'Atención Primaria, Primeros Auxilios, Educación en Salud'
            ]
        ];

        foreach ($unidades as $unidad) {
            UnidadSalud::firstOrCreate(
                ['nombre' => $unidad['nombre']],
                $unidad
            );
        }
    }
}