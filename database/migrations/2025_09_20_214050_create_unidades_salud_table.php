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
        Schema::create('unidades_salud', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('direccion');
            $table->string('telefono')->nullable();
            $table->string('horario_atencion')->nullable();
            $table->decimal('latitud', 10, 8)->nullable();
            $table->decimal('longitud',11, 8)->nullable();
            $table->foreignId(('tipo_unidad_salud_id'))->constrained('tipo_unidad_salud');
            $table->foreignId(('municipio_id'))->constrained('municipios');
            $table->text('servicios')->nullable(); // Descripción de los servicios ofrecidos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades_salud');
    }
};
