<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id_alumno' => function () {
                return \App\Models\Alumno::factory()->create()->id;
            },
            'id_curso' => function () {
                return \App\Models\Curso::factory()->create()->id;
            },
            //
        ];
    }
}
