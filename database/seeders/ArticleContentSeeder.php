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
            [
                "title" => "MongoDB: A Beginner’s Guide",
                "body"  => "In the worlds of JavaScript and Node.js, MongoDB has established itself as the go-to database. It is the ‘M’ in the popular MEAN and MERN stacks, and it is generally considered to be more flexible and easier-to-scale than traditional database technologies like MySQL.

                But setting a database for the first time can be tricky. When I first experimented with MongoDB, I encountered several frustrating obstacles that made the process much harder than it should have been. In writing this article, I hope you can avoid my mistakes.",
                "article_id" => 2,
                "locale_id"  => "en"
            ],
            [
                "title" => "MongoDB pour les débutants",
                "body"  => "Dans les mondes de JavaScript et Node.js, MongoDB s'est imposé comme la base de données incontournable. C'est le « M » dans les piles MEAN et MERN populaires, et il est généralement considéré comme plus flexible et plus facile à mettre à l'échelle que les technologies de base de données traditionnelles comme MySQL.

                Mais définir une base de données pour la première fois peut être délicat. Lorsque j'ai expérimenté MongoDB pour la première fois, j'ai rencontré plusieurs obstacles frustrants qui ont rendu le processus beaucoup plus difficile qu'il n'aurait dû l'être. En écrivant cet article, j'espère que vous pourrez éviter mes erreurs.",
                "article_id" => 2,
                "locale_id"  => "fr"
            ],

        ];

        foreach($contents as $content) {
            ArticleContent::create($content);
        }

    }
}
