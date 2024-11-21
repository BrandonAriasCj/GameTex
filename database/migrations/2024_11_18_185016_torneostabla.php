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
        Schema::create('torneos', function (Blueprint $table) {
            $table->id();
            $table->string('nombrej');
            $table->string('creador');
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->string('exp');
            $table->foreignId('torneo_juego_id')->constrained('torneos_juegos')->onDelete('cascade');
            $table->foreignId('evento_tipo_id')->constrained('eventos_tipo')->onDelete('cascade');
            $table->foreignId('moderador_id')->constrained('moderadores')->onDelete('cascade');
            $table->foreignId('administrador_id')->constrained('administradores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
