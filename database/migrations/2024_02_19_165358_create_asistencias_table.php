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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
          
            $table->foreignId('id_alumno')->constrained('alumnos');
            $table->foreignId('id_curso')->constrained('cursos');
            // Utilizamos un enum para asegurar que solo se permitan los valores definidos (A, T, F)
            $table->enum('tipoasistencia', ['A', 'T', 'F'])->comment('Opciones de asistencia: Asistió temprano (A), Asistió tarde (T), Faltó (F)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
