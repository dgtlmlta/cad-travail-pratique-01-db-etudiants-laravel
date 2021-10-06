<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Appeler les seeders respectifs des modèles
        $this->call([
            LocaleSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            VilleSeeder::class,
            EtudiantSeeder::class,
        ]);
    }
}
