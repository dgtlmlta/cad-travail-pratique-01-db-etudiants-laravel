<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_contents', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("body");
            $table->foreignId("article_id")->constrained();
            $table->foreignId("locale_id")->constrained();
            $table->timestamps();

            $table->unique(["article_id", "locale_id"], "article_locale_unique");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_contents');
    }
}
