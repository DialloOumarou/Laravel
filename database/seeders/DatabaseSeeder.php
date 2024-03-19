<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bureau;
use App\Models\Candidat;
use App\Models\Centre;
use App\Models\Commune;
use App\Models\Departement;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Resultat;
use Illuminate\Validation\Rules\Unique;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Region::factory(10)->create();
        // Departement::factory(5)->create();
        Region::factory(5)
        ->has(Departement::factory(1)
        ->has(Commune::factory(1)
        ->has(Centre::factory(1)
        ->has(Bureau::factory(2)
        ->has(Resultat::factory(5))))))->create();
       
    }
}

