<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('review');
            $table->integer('score');

            $table->string('item');
            //$table->foreign('item')->references('name')->on('items');

            $table->string('user');
            $table->foreign('user')->references('username')->on('users');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            //$table->dropForeign('reviews_item_foreign');
            $table->dropForeign('reviews_user_foreign');
        });
        Schema::dropIfExists('reviews');
    }
}
