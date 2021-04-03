<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlcoholTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alcohol', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("kind");
            $table->foreign("kind")->references("kind")->on("kind_of_alcohol");
            $table->string("image")->default("./img/Alcohol/WineDef.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alcohol');
    }
}
