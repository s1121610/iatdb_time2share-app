<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservedItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservedItems', function (Blueprint $table) {
            $table->id('id');
            $table->string("name");
            $table->string("category");
            $table->foreign("category")->references("category")->on("categories");
            $table->longText("description");
            $table->string("location");
            $table->string("image");
            $table->string("image2")->nullable();
            $table->string("image3")->nullable();
            $table->string("owner");
            $table->foreign("owner")->references("username")->on("users");
            $table->date("deadline");
            $table->string("borrower");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservedItems', function (Blueprint $table) {
            $table->dropForeign('reservedItems_category_foreign');
            $table->dropForeign('reservedItems_owner_foreign');
        });
        Schema::dropIfExists('reservedItems');
    }
}