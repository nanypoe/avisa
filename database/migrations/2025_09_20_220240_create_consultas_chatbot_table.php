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
        Schema::create('consultas_chatbot', function (Blueprint $table) {
            $table->id();
            $table->string('session_id'); // para tracking sin requerir login
            $table->json('sintomas_seleccionados');
            $table->json('enfermedades_sugeridas');
            $table->string('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas_chatbot');
    }
};
