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
        Schema::create('sintomas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('pregunta'); // cómo se le preguntará al usuario
            $table->string('tipo')->default('boolean'); // booleano, opción múltiple, texto, etc.
            $table->integer('prioridad')->default('1'); // de 1 a 10, siendo 10 la más alta
            $table->boolean('es_signo_alarma')->default(false); // si el síntoma está activo o no
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sintomas');
    }
};
