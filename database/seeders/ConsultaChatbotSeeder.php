<?php

namespace Database\Seeders;

use App\Models\ConsultaChatbot;
use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConsultaChatbotSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener algunos municipios para las ubicaciones
        $managua = Municipio::where('nombre', 'Managua')->first();
        $leon = Municipio::where('nombre', 'León')->first();
        $masaya = Municipio::where('nombre', 'Masaya')->first();

        $consultas = [
            [
                'session_id' => 'session_001',
                'sintomas_seleccionados' => json_encode([1, 2, 3]), // Fiebre, Dolor de cabeza, Cansancio
                'enfermedades_sugeridas' => json_encode([1, 3]), // Dengue, IRAs
                'recomendaciones' => 'Descansar, tomar abundantes líquidos y acudir a centro de salud si la fiebre persiste por más de 48 horas.',
                'edad_usuario' => 28,
                'genero_usuario' => 'femenino',
                'ubicacion_municipio_id' => $managua->id,
                'ip_address' => '192.168.1.100',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'created_at' => Carbon::now()->subDays(2)
            ],
            [
                'session_id' => 'session_002',
                'sintomas_seleccionados' => json_encode([1, 9, 14]), // Fiebre, Tos, Dificultad para respirar
                'enfermedades_sugeridas' => json_encode([3]), // IRAs
                'recomendaciones' => 'Buscar atención médica inmediata por la dificultad respiratoria. Usar mascarilla y aislarse.',
                'edad_usuario' => 45,
                'genero_usuario' => 'masculino',
                'ubicacion_municipio_id' => $leon->id,
                'ip_address' => '192.168.1.101',
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/605.1.15',
                'created_at' => Carbon::now()->subDays(1)
            ],
            [
                'session_id' => 'session_003',
                'sintomas_seleccionados' => json_encode([5, 16, 17]), // Sed excesiva, Hambre constante, Visión borrosa
                'enfermedades_sugeridas' => json_encode([5]), // Diabetes
                'recomendaciones' => 'Realizar examen de glucosa en sangre. Consultar con médico para evaluación de diabetes.',
                'edad_usuario' => 52,
                'genero_usuario' => 'masculino',
                'ubicacion_municipio_id' => $masaya->id,
                'ip_address' => '192.168.1.102',
                'user_agent' => 'Mozilla/5.0 (Android 10; Mobile; rv:91.0) Gecko/91.0 Firefox/91.0',
                'created_at' => Carbon::now()->subHours(6)
            ],
            [
                'session_id' => 'session_004',
                'sintomas_seleccionados' => json_encode([1, 4, 19, 20]), // Fiebre, Escalofríos, Erupción cutánea, Dolor detrás de los ojos
                'enfermedades_sugeridas' => json_encode([1, 7]), // Dengue, Chikungunya
                'recomendaciones' => 'Acudir inmediatamente a unidad de salud. Evitar automedicarse. Usar repelente y mosquitero.',
                'edad_usuario' => 31,
                'genero_usuario' => 'femenino',
                'ubicacion_municipio_id' => $managua->id,
                'ip_address' => '192.168.1.103',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'created_at' => Carbon::now()->subHours(3)
            ],
            [
                'session_id' => 'session_005',
                'sintomas_seleccionados' => json_encode([13, 14, 15]), // Náuseas, Vómitos, Diarrea
                'enfermedades_sugeridas' => json_encode([6]), // Leptospirosis
                'recomendaciones' => 'Mantener hidratación. Consultar médico por posible infección gastrointestinal o leptospirosis.',
                'edad_usuario' => 19,
                'genero_usuario' => 'femenino',
                'ubicacion_municipio_id' => $leon->id,
                'ip_address' => '192.168.1.104',
                'user_agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/605.1.15',
                'created_at' => Carbon::now()->subHours(1)
            ]
        ];

        foreach ($consultas as $consulta) {
            ConsultaChatbot::firstOrCreate(
                [
                    'session_id' => $consulta['session_id'],
                    'created_at' => $consulta['created_at']
                ],
                $consulta
            );
        }
    }
}