<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        return view("articles.index", [
            "pageTitle" => __("articles/index.pageTitle")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view("articles.create", [
            "pageTitle" => __("articles/create.pageTitle")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $validation = $request->validate([
            "title" => [
                "required"
            ],
            "body" => [
                "required"
            ],
            "locale_id" => [
                "required",
                "exists:locales,abbreviation"
            ]
        ]);

        $article = new Article();

        $article->etudiant_id = Auth::user()->id;

        if(!$article->save()) {
            return redirect("/");
        };

        $articleContent = new ArticleContent();

        $articleContent->article_id = $article->id;
        $articleContent->title      = $request->title;
        $articleContent->body       = $request->body;
        $articleContent->locale_id  = $request->locale_id;


        if(!$articleContent->save()) {
            return redirect("/");
        }

        return redirect("/articles/{$article->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article) {
        //
        return view("articles.show", [
            "article" => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) {
        //
    }
}
