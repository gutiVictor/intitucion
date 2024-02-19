<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           /*  'nombre' => $this->faker->name(), */
            //

            'curso' => $this->faker->randomElement(['Matematicas', 'Algebra', 'Fisica','Español','Ingles','Biologia']),
        ];
    }
}
