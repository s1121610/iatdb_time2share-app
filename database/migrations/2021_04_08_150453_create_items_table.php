<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign('items_category_foreign');
            $table->dropForeign('items_owner_foreign');
        });
        Schema::dropIfExists('items');
    }
}
