<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\villes;

class VillesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Villes::factory()->count(15)->create();
    }
}
