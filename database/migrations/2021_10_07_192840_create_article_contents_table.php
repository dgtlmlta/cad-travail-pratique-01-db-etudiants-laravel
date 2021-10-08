<?php

use App\Models\Locale;
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
            $table->foreignId("article_id")->constrained();
            $table->foreignIdFor(Locale::class, "locale_id");
            $table->string("title");
            $table->text("body");
            $table->timestamps();

            $table->primary(["article_id", "locale_id"], "article_locale_pk");
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
