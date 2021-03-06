<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttributesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('attributes');
        
        Schema::create('attributes', function(Blueprint $table) {
                    $table->increments('id');
                    $table->string('name');
                    $table->string('value');
                    $table->integer('product_id')
                            ->foreign('product_id')->references('id')->on('products');
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
        Schema::drop('attributes');
    }

}
