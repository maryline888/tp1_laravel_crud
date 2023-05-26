<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\villes;

class VillesFactory extends Factory
{
    protected $model = Villes::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $mesVilles = ['Beloeil', 'Deux-Montagnes', 'Mascouche', 'Terrebonne', 'Montréal', 'Laval', 'Longueuil', 'Brossard', 'Dollard-des-Ormeaux', 'Côte Saint-Luc', 'Pointe-Claire', 'Repontigny', 'St-Hyacinthe', 'St-Hilaire', 'Boucherville']; // ajoutez plus de villes si vous voulez

        return [
            'name' => $this->faker->randomElement($mesVilles),
        ];
    }
}
