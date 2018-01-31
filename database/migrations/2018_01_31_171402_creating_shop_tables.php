<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingShopTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('orders', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('user_name');
		    $table->string('email');
		    $table->string('phone');
		    $table->timestamps();
	    });

	    Schema::create('products', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('slug');
		    $table->string('title');
		    $table->float('price');
		    $table->text('description');
		    $table->timestamps();
	    });

	    Schema::create('order_product', function (Blueprint $table) {
		    $table->increments('id');
		    $table->integer('order_id');
	    	$table->integer('product_id');
	    	$table->integer('amount');
		    $table->timestamps();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('order_product');
    }
}
