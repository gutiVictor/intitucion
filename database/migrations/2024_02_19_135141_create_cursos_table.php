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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            // Utilizamos un enum para asegurar que solo se permitan los valores definidos ('Matematicas', 'Algebra', 'Fisica','Español','Ingles','Biologia')
            $table->enum('curso', ['Matematicas', 'Algebra', 'Fisica','Español','Ingles','Biologia'])->comment('Opciones de Cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
