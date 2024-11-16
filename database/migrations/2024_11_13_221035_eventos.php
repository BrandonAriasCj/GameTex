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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('reglas');
            $table->timestamp('fecha_inicio')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('fecha_fin')->nullable(); // Esto permite que fecha_fin pueda ser nula
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
