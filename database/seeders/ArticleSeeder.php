<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $articles = [
            [
                "etudiant_id" => Etudiant::all()->random()->id
            ],
            [
                "etudiant_id" => Etudiant::all()->random()->id
            ]
        ];

        foreach($articles as $article) {
            Article::create($article);
        }
    }
}
