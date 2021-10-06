<?php

namespace Database\Seeders;

use App\Models\Locale;
use Illuminate\Database\Seeder;

class LocaleSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Créer les locales de départ
        $locales = [
            [
                "abbreviation" => "fr",
                "label"        => "français",
            ],
            [
                "abbreviation" => "en",
                "label"        => "english",
            ]
        ];

        foreach($locales as $locale) {
            Locale::create($locale);
        }
    }
}
