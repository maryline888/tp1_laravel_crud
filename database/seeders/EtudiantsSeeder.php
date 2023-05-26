<?php

namespace Database\Seeders;

use Database\Factories\EtudiantsFactory;
use Illuminate\Database\Seeder;
use App\Models\etudiants;


class EtudiantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etudiants::factory()->count(100)->create();
    }
}
