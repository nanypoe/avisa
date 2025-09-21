<?php

namespace Database\Seeders;

use App\Models\Sintoma;
use Illuminate\Database\Seeder;

class SintomaSeeder extends Seeder
{
    public function run(): void
    {
        $sintomas = [
            // Síntomas generales
            [
                'nombre' => 'Fiebre',
                'pregunta' => '¿Tiene fiebre?',
                'es_signo_alarma' => true,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Dolor de cabeza',
                'pregunta' => '¿Tiene dolor de cabeza?',
                'es_signo_alarma' => false,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Cansancio',
                'pregunta' => '¿Se siente cansado o fatigado?',
                'es_signo_alarma' => false,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Escalofríos',
                'pregunta' => '¿Ha tenido escalofríos?',
                'es_signo_alarma' => false,
                'categoria' => 'general'
            ],

            [
                'nombre' => 'Sed excesiva',
                'pregunta' => '¿Siente sed excesiva o constante?',
                'es_signo_alarma' => true,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Hambre constante',
                'pregunta' => '¿Siente hambre constantemente?',
                'es_signo_alarma' => false,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Visión borrosa',
                'pregunta' => '¿Tiene visión borrosa o dificultad para enfocar?',
                'es_signo_alarma' => true,
                'categoria' => 'ocular'
            ],

            [
                'nombre' => 'Dolor muscular',
                'pregunta' => '¿Tiene dolor muscular?',
                'es_signo_alarma' => false,
                'categoria' => 'general'
            ],

            // Síntomas respiratorios
            [
                'nombre' => 'Tos',
                'pregunta' => '¿Tiene tos?',
                'es_signo_alarma' => false,
                'categoria' => 'respiratorio'
            ],
            [
                'nombre' => 'Dificultad para respirar',
                'pregunta' => '¿Tiene dificultad para respirar?',
                'es_signo_alarma' => true,
                'categoria' => 'respiratorio'
            ],
            [
                'nombre' => 'Dolor de garganta',
                'pregunta' => '¿Tiene dolor de garganta?',
                'es_signo_alarma' => false,
                'categoria' => 'respiratorio'
            ],
            [
                'nombre' => 'Congestión nasal',
                'pregunta' => '¿Tiene congestión nasal?',
                'es_signo_alarma' => false,
                'categoria' => 'respiratorio'
            ],

            // Síntomas gastrointestinales
            [
                'nombre' => 'Náuseas',
                'pregunta' => '¿Tiene náuseas?',
                'es_signo_alarma' => false,
                'categoria' => 'gastrointestinal'
            ],
            [
                'nombre' => 'Vómitos',
                'pregunta' => '¿Ha vomitado?',
                'es_signo_alarma' => true,
                'categoria' => 'gastrointestinal'
            ],
            [
                'nombre' => 'Diarrea',
                'pregunta' => '¿Tiene diarrea?',
                'es_signo_alarma' => true,
                'categoria' => 'gastrointestinal'
            ],
            [
                'nombre' => 'Dolor abdominal',
                'pregunta' => '¿Tiene dolor abdominal?',
                'es_signo_alarma' => true,
                'categoria' => 'gastrointestinal'
            ],

            // Síntomas dermatológicos
            [
                'nombre' => 'Erupción cutánea',
                'pregunta' => '¿Tiene erupción en la piel?',
                'es_signo_alarma' => true,
                'categoria' => 'dermatologico'
            ],
            [
                'nombre' => 'Picazón',
                'pregunta' => '¿Tiene picazón en la piel?',
                'es_signo_alarma' => false,
                'categoria' => 'dermatologico'
            ],

            // Signos de alarma específicos
            [
                'nombre' => 'Sangrado',
                'pregunta' => '¿Ha presentado sangrado?',
                'es_signo_alarma' => true,
                'categoria' => 'alarma'
            ],
            [
                'nombre' => 'Dolor detrás de los ojos',
                'pregunta' => '¿Siente dolor detrás de los ojos?',
                'es_signo_alarma' => true,
                'categoria' => 'alarma'
            ],
            [
                'nombre' => 'Dolor articular intenso',
                'pregunta' => '¿Tiene dolor articular intenso?',
                'es_signo_alarma' => true,
                'categoria' => 'alarma'
            ],
            [
                'nombre' => 'Ictericia',
                'pregunta' => '¿Tiene coloración amarilla en piel u ojos?',
                'es_signo_alarma' => true,
                'categoria' => 'alarma'
            ],
            [
                'nombre' => 'Escalofríos',
                'pregunta' => '¿Has tenido escalofríos?',
                'tipo' => 'boolean',
                'prioridad' => 7,
                'es_signo_alarma' => true,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Sudoración',
                'pregunta' => '¿Has tenido sudoración excesiva?',
                'tipo' => 'boolean',
                'prioridad' => 6,
                'es_signo_alarma' => false,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Dolor articular',
                'pregunta' => '¿Tienes dolor en las articulaciones?',
                'tipo' => 'boolean',
                'prioridad' => 7,
                'es_signo_alarma' => true,
                'categoria' => 'general'
            ],
            [
                'nombre' => 'Conjuntivitis',
                'pregunta' => '¿Tienes los ojos rojos o irritados?',
                'tipo' => 'boolean',
                'prioridad' => 7,
                'es_signo_alarma' => true,
                'categoria' => 'ocular'
            ]
        ];

        foreach ($sintomas as $sintoma) {
            Sintoma::firstOrCreate(
                ['nombre' => $sintoma['nombre']],
                $sintoma
            );
        }
    }
}