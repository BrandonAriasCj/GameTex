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
        Schema::table('torneo_usuario', function (Blueprint $table) {
            // Agregar columnas para las claves foráneas
            $table->foreignId('torneo_id')->after('id')->constrained('torneos')->onDelete('cascade'); // Clave foránea para torneos
            $table->foreignId('usuario_id')->after('torneo_id')->constrained('users')->onDelete('cascade'); // Clave foránea para usuarios

            // Evitar duplicados en combinaciones
            $table->unique(['torneo_id', 'usuario_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('torneo_usuario', function (Blueprint $table) {
            // Eliminar las restricciones únicas
            $table->dropUnique(['torneo_id', 'usuario_id']);

            // Eliminar las claves foráneas
            $table->dropForeign(['torneo_id']);
            $table->dropForeign(['usuario_id']);

            // Eliminar las columnas
            $table->dropColumn(['torneo_id', 'usuario_id']);
        });
    }
};
