<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThumbnailTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('size');
            $table->timestamps();
        });

	    Schema::create('post_thumbnail', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('post_id');
		    $table->integer('thumbnail_id');
	    });

	    Schema::create('product_thumbnail', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('product_id');
		    $table->integer('thumbnail_id');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thumbnail');
        Schema::dropIfExists('post_thumbnail');
        Schema::dropIfExists('product_thumbnail');
    }
}
