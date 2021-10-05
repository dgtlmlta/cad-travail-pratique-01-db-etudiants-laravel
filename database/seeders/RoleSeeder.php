<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder {
    // protected array $guarded = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $roles = [
            [
                "id"           => 10,
                "label"        => "utilisateur",
                "abbreviation" => "uti",
            ],
            [
                "id"           => 20,
                "label"        => "étudiant",
                "abbreviation" => "etu",
            ],
            [
                "id"           => 60,
                "label"        => "administrateur",
                "abbreviation" => "adm",
            ]
        ];

        foreach($roles as $role) {
            Role::create($role);
        }
    }
}
