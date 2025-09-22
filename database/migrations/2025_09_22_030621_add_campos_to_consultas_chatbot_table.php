<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('consultas_chatbot', function (Blueprint $table) {
            $table->text('recomendaciones')->nullable()->after('enfermedades_sugeridas');
            $table->integer('edad_usuario')->nullable()->after('recomendaciones');
            $table->string('genero_usuario', 20)->nullable()->after('edad_usuario');
            $table->foreignId('ubicacion_municipio_id')->nullable()->after('genero_usuario')
                ->constrained('municipios')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('consultas_chatbot', function (Blueprint $table) {
            $table->dropColumn(['recomendaciones', 'edad_usuario', 'genero_usuario', 'ubicacion_municipio_id']);
        });
    }
};
