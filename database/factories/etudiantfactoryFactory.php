<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class etudiantfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastname,
            'prenom' => $this->faker->firstname,
            'date_de_naissance' => $this->faker->date,
            'numero_de_tel' => $this->faker->interger,
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
