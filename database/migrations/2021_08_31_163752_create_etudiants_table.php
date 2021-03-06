<?php

use App\Models\Ville;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->foreignId("id")->constrained("users");
            $table->string("adresse");
            $table->string("telephone")->nullable();
            $table->dateTime("ddn");
            $table->foreignId("ville_id")->constrained();
            $table->timestamps();

            $table->primary("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
