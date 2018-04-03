<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBarcodeAndIdProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('product', function (Blueprint $table) {
        $table->string('barcode')->default('')->nullable();
        $table->string('custom_id')->default('')->nullable();
        $table->string('image_path_2')->default('')->nullable();
        $table->string('image_path_3')->default('')->nullable();
        $table->string('image_path_4')->default('')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
