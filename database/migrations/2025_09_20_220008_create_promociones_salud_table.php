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
        Schema::create('promociones_salud', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('contenido');
            $table->string('categoria'); // e.g., 'nutricion', 'ejercicio', etc.
            $table->string('imagen')->nullable(); // URL o path de la imagen asociada
            $table->boolean('es_publicado')->default(false); // Indica si la promoción está publicada
            $table->dateTime('fecha_publicacion')->nullable(); // Fecha de publicación
            $table->string('autor')->nullable(); // Autor o fuente de la promoción
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones_salud');
    }
};