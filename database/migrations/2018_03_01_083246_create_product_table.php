<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('english');
            $table->string('arabic');
            $table->string('german');
            $table->string('kurdi');
            $table->string('turky');
            
            $table->text('desc_arabic');
            $table->text('desc_english');
            $table->text('desc_german');
            $table->text('desc_kurdi');
            $table->text('desc_turky');

            $table->boolean('option1');
            $table->boolean('option2');
            $table->boolean('option3');
            $table->boolean('option4');
            
            $table->double('qty',4,2);
            
            $table->integer('category_id');
            
            $table->integer('subcategory_id');

            $table->string('image_id');
            
            $table->double('price',6,2);
            
            $table->integer('point');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }
}
