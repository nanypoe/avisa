<?php

namespace Database\Seeders;

use App\Models\Enfermedad;
use App\Models\Sintoma;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnfermedadSintomaSeeder extends Seeder
{
    public function run(): void
    {
        // Obtener todas las enfermedades y síntomas
        $dengue = Enfermedad::where('nombre', 'Dengue')->first();
        if (!$dengue) {
            $this->command->error('Enfermedad Dengue no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }
        $malaria = Enfermedad::where('nombre', 'Malaria')->first();
        if (!$malaria) {
            $this->command->error('Enfermedad Malaria no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }
        $iras = Enfermedad::where('nombre', 'Infecciones Respiratorias Agudas (IRAs)')->first();
        if (!$iras) {
            $this->command->error('Enfermedad IRAs no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }
        $hipertension = Enfermedad::where('nombre', 'Hipertensión Arterial')->first();
        if (!$hipertension) {
            $this->command->error('Enfermedad Hipertensión no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }
        $diabetes = Enfermedad::where('nombre', 'Diabetes Mellitus')->first();
        if (!$diabetes) {
            $this->command->error('Enfermedad Diabetes no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }
        $leptospirosis = Enfermedad::where('nombre', 'Leptospirosis')->first();
        if (!$leptospirosis) {
            $this->command->error('Enfermedad Leptospirosis no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }
        $chikungunya = Enfermedad::where('nombre', 'Chikungunya')->first();
        if (!$chikungunya) {
            $this->command->error('Enfermedad Chikungunya no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }
        $zika = Enfermedad::where('nombre', 'Zika')->first();
        if (!$zika) {
            $this->command->error('Enfermedad Zika no encontrada'); // Si la enfermedad no existe, no continuar
            return;
        }

        // Obtener todos los síntomas
        $fiebre = Sintoma::where('nombre', 'Fiebre')->first();
        $dolorCabeza = Sintoma::where('nombre', 'Dolor de cabeza')->first();
        $dolorMuscular = Sintoma::where('nombre', 'Dolor muscular')->first();
        $cansancio = Sintoma::where('nombre', 'Cansancio')->first();
        $tos = Sintoma::where('nombre', 'Tos')->first();
        $dificultadRespirar = Sintoma::where('nombre', 'Dificultad para respirar')->first();
        $dolorGarganta = Sintoma::where('nombre', 'Dolor de garganta')->first();
        $congestionNasal = Sintoma::where('nombre', 'Congestión nasal')->first();
        $nauseas = Sintoma::where('nombre', 'Náuseas')->first();
        $vomitos = Sintoma::where('nombre', 'Vómitos')->first();
        $diarrea = Sintoma::where('nombre', 'Diarrea')->first();
        $dolorAbdominal = Sintoma::where('nombre', 'Dolor abdominal')->first();
        $sangradoEncias = Sintoma::where('nombre', 'Sangrado')->first();
        $erupcionCutanea = Sintoma::where('nombre', 'Erupción cutánea')->first();
        $dolorOjos = Sintoma::where('nombre', 'Dolor detrás de los ojos')->first();
        $sedExcesiva = Sintoma::where('nombre', 'Sed excesiva')->first();
        $visionBorrosa = Sintoma::where('nombre', 'Visión borrosa')->first();
        $hambreConstante = Sintoma::where('nombre', 'Hambre constante')->first();
        $dolorArticular = Sintoma::where('nombre', 'Dolor articular')->first();
        $escalofrios = Sintoma::where('nombre', 'Escalofríos')->first();
        $sudoracion = Sintoma::where('nombre', 'Sudoración')->first();
        $conjuntivitis = Sintoma::where('nombre', 'Conjuntivitis')->first();

        // Relaciones enfermedad-síntoma con relevancia
        $relaciones = [
            // Dengue
            [$dengue->id, $fiebre->id, 10],
            [$dengue->id, $dolorCabeza->id, 9],
            [$dengue->id, $dolorMuscular->id, 8],
            [$dengue->id, $dolorOjos->id, 9],
            [$dengue->id, $erupcionCutanea->id, 7],
            [$dengue->id, $sangradoEncias->id, 8],
            [$dengue->id, $vomitos->id, 6],
            [$dengue->id, $dolorAbdominal->id, 7],

            // Malaria
            [$malaria->id, $fiebre->id, 10],
            [$malaria->id, $escalofrios->id, 9],
            [$malaria->id, $sudoracion->id, 8],
            [$malaria->id, $dolorCabeza->id, 7],
            [$malaria->id, $nauseas->id, 6],
            [$malaria->id, $vomitos->id, 6],
            [$malaria->id, $dolorMuscular->id, 5],

            // IRAs
            [$iras->id, $tos->id, 9],
            [$iras->id, $fiebre->id, 7],
            [$iras->id, $dificultadRespirar->id, 8],
            [$iras->id, $dolorGarganta->id, 6],
            [$iras->id, $congestionNasal->id, 5],
            [$iras->id, $dolorCabeza->id, 4],
            [$iras->id, $dolorMuscular->id, 4],

            // Hipertensión
            [$hipertension->id, $dolorCabeza->id, 7],
            [$hipertension->id, $visionBorrosa->id, 8],
            [$hipertension->id, $dificultadRespirar->id, 6],

            // Diabetes
            [$diabetes->id, $sedExcesiva->id, 9],
            [$diabetes->id, $hambreConstante->id, 8],
            [$diabetes->id, $visionBorrosa->id, 7],
            [$diabetes->id, $cansancio->id, 6],

            // Leptospirosis
            [$leptospirosis->id, $fiebre->id, 9],
            [$leptospirosis->id, $dolorMuscular->id, 8],
            [$leptospirosis->id, $dolorCabeza->id, 7],
            [$leptospirosis->id, $vomitos->id, 6],
            [$leptospirosis->id, $diarrea->id, 6],
            [$leptospirosis->id, $dolorAbdominal->id, 5],

            // Chikungunya
            [$chikungunya->id, $fiebre->id, 9],
            [$chikungunya->id, $dolorArticular->id, 10],
            [$chikungunya->id, $dolorMuscular->id, 8],
            [$chikungunya->id, $dolorCabeza->id, 6],
            [$chikungunya->id, $erupcionCutanea->id, 7],
            [$chikungunya->id, $cansancio->id, 5],

            // Zika
            [$zika->id, $fiebre->id, 7],
            [$zika->id, $erupcionCutanea->id, 8],
            [$zika->id, $dolorArticular->id, 6],
            [$zika->id, $dolorMuscular->id, 5],
            [$zika->id, $dolorCabeza->id, 5],
            [$zika->id, $conjuntivitis->id, 7]
        ];

        // Insertar las relaciones
        foreach ($relaciones as $relacion) {
            DB::table('enfermedad_sintoma')->updateOrInsert(
                [
                    'enfermedad_id' => $relacion[0],
                    'sintoma_id' => $relacion[1]
                ],
                ['relevancia' => $relacion[2]]
            );
        }
    }
}