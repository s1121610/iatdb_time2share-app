<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesForeignToAlcoholTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alcohol', function (Blueprint $table) {
            $table->foreign("image")->references("image")->on("images");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alcohol', function (Blueprint $table) {
            $table->dropForeign('alcohol_image_foreign');
        });
    }
}
