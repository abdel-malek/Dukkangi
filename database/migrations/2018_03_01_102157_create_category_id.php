<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('arabic');
            $table->string('english');
            $table->string('kurdi');
            $table->string('turky');
            $table->string('german');
            $table->integer('subcategory_id');
            $table->timestamp();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category');
    }
}
