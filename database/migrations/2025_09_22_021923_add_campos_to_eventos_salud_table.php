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
        Schema::table('eventos_salud', function (Blueprint $table) {
            $table->string('organizador')->nullable()->after('lugar');
            $table->boolean('es_gratuito')->default(true)->after('organizador');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eventos_salud', function (Blueprint $table) {
            //
        });
    }
};
