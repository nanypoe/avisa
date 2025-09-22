<?php

namespace Database\Seeders;

use App\Models\PromocionSalud;
use Illuminate\Database\Seeder;

class PromocionSaludSeeder extends Seeder
{
    public function run(): void
    {
        $promociones = [
            [
                'titulo' => 'Prevención del Dengue: Elimina los Criaderos de Mosquitos',
                'contenido' => 'El dengue es una enfermedad transmitida por el mosquito Aedes aegypti. Para prevenirla:
- Elimina recipientes con agua estancada
- Limpia pilas y barriles semanalmente
- Usa mosquiteros en ventanas y puertas
- Aplica repelente contra mosquitos
- Usa manga larga y pantalón en horas de mayor riesgo

Si presentas fiebre alta, dolor detrás de los ojos o erupción cutánea, acude inmediatamente a tu unidad de salud más cercana.',
                'categoria' => 'prevencion',
                'imagen' => 'prevencion-dengue.jpg',
                'es_publicado' => true,
                'fecha_publicacion' => now()->subDays(5),
                'autor' => 'MINSA Nicaragua'
            ],
            [
                'titulo' => 'Alimentación Saludable para Prevenir Diabetes',
                'contenido' => 'Una alimentación balanceada es clave para prevenir la diabetes:
- Consume frutas y verduras de temporada
- Prefiere alimentos integrales
- Reduce el consumo de azúcares y grasas
- Toma al menos 8 vasos de agua al día
- Realiza 30 minutos de actividad física diaria

Recuerda que la detección temprana salva vidas. Realízate chequeos médicos anuales.',
                'categoria' => 'nutricion',
                'imagen' => 'alimentacion-diabetes.jpg',
                'es_publicado' => true,
                'fecha_publicacion' => now()->subDays(12),
                'autor' => 'Programa Nacional de Diabetes'
            ],
            [
                'titulo' => 'Lavado de Manos: Tu Mejor Defensa contra las IRAs',
                'contenido' => 'Las Infecciones Respiratorias Agudas (IRAs) se pueden prevenir con una simple acción:
- Lávate las manos con agua y jabón por 20 segundos
- Usa alcohol gel cuando no tengas agua disponible
- Cúbrete la boca al toser o estornudar
- Evita tocarte la cara con las manos sucias
- Mantén una distancia segura de personas enfermas

El lavado de manos correcto puede reducir hasta en 50% las enfermedades respiratorias.',
                'categoria' => 'higiene',
                'imagen' => 'lavado-manos.jpg',
                'es_publicado' => true,
                'fecha_publicacion' => now()->subDays(8),
                'autor' => 'MINSA Nicaragua'
            ],
            [
                'titulo' => 'Control de la Hipertensión Arterial',
                'contenido' => 'La hipertensión es una enfermedad silenciosa que puede controlarse:
- Mide tu presión arterial regularmente
- Reduce el consumo de sal en tus comidas
- Mantén un peso saludable
- Realiza ejercicio físico regular
- Evita el consumo de tabaco y alcohol
- Sigue las indicaciones médicas

La presión arterial normal es menor a 120/80 mmHg. Si tus niveles son más altos, consulta a tu médico.',
                'categoria' => 'cronicas',
                'imagen' => 'control-hipertension.jpg',
                'es_publicado' => true,
                'fecha_publicacion' => now()->subDays(3),
                'autor' => 'Clínica de Hipertensión'
            ],
            [
                'titulo' => 'Vacunación: Protección para toda la Familia',
                'contenido' => 'Las vacunas salvan vidas y previenen enfermedades:
- Mantén al día tu esquema de vacunación
- Lleva a tus hijos a vacunar según el calendario
- Las embarazadas deben vacunarse contra influenza y tétanos
- Los adultos mayores necesitan refuerzos
- Las vacunas son seguras y efectivas

Acude a tu centro de salud más cercano para verificar tu cartilla de vacunación.',
                'categoria' => 'vacunacion',
                'imagen' => 'vacunacion-familia.jpg',
                'es_publicado' => true,
                'fecha_publicacion' => now()->subDay(),
                'autor' => 'Programa Ampliado de Inmunizaciones'
            ],
            [
                'titulo' => 'Prevención de la Malaria en Zonas Endémicas',
                'contenido' => 'La malaria es prevenible con estas medidas:
- Usa mosquiteros impregnados con insecticida
- Aplica repelente en horas de mayor actividad de mosquitos
- Elimina charcos y agua estancada alrededor de tu vivienda
- Participa en las fumigaciones programadas por el MINSA
- Acude al médico si presentas fiebre, escalofríos o sudoración

La malaria es curable si se detecta a tiempo. No te automediques.',
                'categoria' => 'prevencion',
                'imagen' => 'prevencion-malaria.jpg',
                'es_publicado' => true,
                'fecha_publicacion' => now()->subDays(15),
                'autor' => 'Programa Nacional de Malaria'
            ],
            [
                'titulo' => 'Salud Mental: Cuidando tu Bienestar Emocional',
                'contenido' => 'La salud mental es tan importante como la física:
- Practica técnicas de relajación y meditación
- Mantén una red de apoyo social y familiar
- Realiza actividades que te generen placer
- Duerme al menos 7-8 horas diarias
- Busca ayuda profesional si sientes ansiedad o tristeza persistente

En Nicaragua, la Línea 132 ofrece apoyo en crisis las 24 horas.',
                'categoria' => 'salud-mental',
                'imagen' => 'salud-mental.jpg',
                'es_publicado' => true,
                'fecha_publicacion' => now()->subDays(7),
                'autor' => 'Programa de Salud Mental'
            ]
        ];

        foreach ($promociones as $promocion) {
            PromocionSalud::firstOrCreate(
                ['titulo' => $promocion['titulo']],
                $promocion
            );
        }
    }
}