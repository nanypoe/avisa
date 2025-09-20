<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enfermedad_sintoma', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enfermedad_id')->constrained('enfermedades')->onDelete('cascade');
            $table->foreignId('sintoma_id')->constrained('sintomas')->onDelete('cascade');
            $table->integer('relevancia')->default(1); // qué tan relevante es este síntoma para la enfermedad, de 1 a 10
            $table->timestamps();
            $table->unique(['enfermedad_id', 'sintoma_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enfermedad_sintoma');
    }
};
