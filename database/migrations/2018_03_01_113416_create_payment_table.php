<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_method_id');
            $table->text('request');
            $table->text('response');
            $table->integer('user_id');
            $table->integer('order_id');
        } );
    }

    public function down()
    {
        Schema::drop('payment');
    }
}
