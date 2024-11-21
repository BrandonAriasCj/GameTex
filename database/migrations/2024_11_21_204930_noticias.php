<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->string('titulo');
            $table->string('contenido');
            $table->String('portada');
            $table->string('imagen1');
            $table->string('imagen2');
            $table->timestamp('fecha_publicacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreignId('administrador_id')->constrained('administradores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
