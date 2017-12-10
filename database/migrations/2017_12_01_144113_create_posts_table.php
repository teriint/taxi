<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_o');
            $table->string('slug')->unique();
            $table->string('p_p');
            $table->unsignedInteger('val');
            $table->string('stat');
            $table->string('phone');
		    $table->text('body');
		    $table->boolean('published')->default(false);
		    $table->unsignedInteger('user_id');
		    $table->unsignedInteger('voditel_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('voditel_id')->references('id')->on('voditels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
