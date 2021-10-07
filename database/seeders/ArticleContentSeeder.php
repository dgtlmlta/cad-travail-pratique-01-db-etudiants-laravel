<?php

namespace Database\Seeders;

use App\Models\ArticleContent;
use Illuminate\Database\Seeder;

class ArticleContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $contents = [
            [
                "title" => "What is Python? Powerful, intuitive programming",
                "body"  => "Dating from 1991, the Python programming language was considered a gap-filler, a way to write scripts that “automate the boring stuff” (as one popular book on learning Python put it) or to rapidly prototype applications that will be implemented in other languages.

                However, over the past few years, Python has emerged as a first-class citizen in modern software development, infrastructure management, and data analysis. It is no longer a back-room utility language, but a major force in web application creation and systems management, and a key driver of the explosion in big data analytics and machine intelligence.",
                "article_id" => 1,
                "locale_id"  => "en"
            ],
            [
                "title" => "Qu'est-ce que Python ? De la programmation puissante et intuitive",
                "body"  => "Datant de 1991, le langage de programmation Python était considéré comme un moyen de combler les lacunes, un moyen d'écrire des scripts qui 'automatisent les choses ennuyeuses' (comme le dit un livre populaire sur l'apprentissage de Python) ou de prototyper rapidement des applications qui seront implémentées dans d'autres langages..

                Cependant, au cours des dernières années, Python est devenu un citoyen de première classe dans le développement de logiciels modernes, la gestion d'infrastructure et l'analyse de données. Ce n'est plus un langage utilitaire en coulisses, mais une force majeure dans la création d'applications Web et la gestion de systèmes, et un moteur clé de l'explosion de l'analyse des mégadonnées et de l'intelligence artificielle.",
                "article_id" => 1,
                "locale_id"  => "fr"
            ],

        ];

        foreach($contents as $content) {
            ArticleContent::create($content);
        }

    }
}
