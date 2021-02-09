<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Program::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_program' => $this->faker->randomElement(['Ingeniería Agrícola', 'Arquitectura', 'Enfermería', 'Ingeniería Civil']),
            'campus' => $this->faker->randomElement(['Bogota', 'Medellin', 'Cali']),
            'faculty' => $this->faker->randomElement(['Agronomía', 'Arquitectura', 'Medicina', 'Ingeniería']),
        ];
    }
}
