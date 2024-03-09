<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->name(),
            'idade'=>$this->faker->numberBetween(1,70),
            'sexo'=>$this->faker->sentence(),
            'dataDeNascimento'=>$this->faker->dateTimeBetween('this week','+6 days'),
            'estadoCivil'=>$this->faker->name(),
            'numeroDeFilhos'=>$this->faker->numberBetween(1,10),
            'telefone'=>$this->faker->numberBetween(1,150),
            'email'=>$this->faker->unique()->safeEmail(),
            'cidade'=>$this->faker->city(),
            'cep'=>$this->faker->numberBetween(1,50),
            'endereco'=>$this->faker->locale()

        ];
    }
}
