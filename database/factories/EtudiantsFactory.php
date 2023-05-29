<?php

namespace Database\Factories;

use App\Models\Etudiants;
use Illuminate\Database\Eloquent\Factories\Factory;


class EtudiantsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Etudiants::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->streetAddress,
            'date_naissance' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'ville_id' => \App\Models\Villes::inRandomOrder()->first()->id,
        ];
    }
}
