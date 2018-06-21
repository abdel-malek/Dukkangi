<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSection23FromProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product' , function(Blueprint $table){
            $table->text('section2_english')->nullable()->change();
            $table->text('section2_arabic')->nullable()->change();
            $table->text('section2_turky')->nullable()->change();
            $table->text('section2_kurdi')->nullable()->change();
            $table->text('section2_german')->nullable()->change();
            $table->text('section3_english')->nullable()->change();
            $table->text('section3_arabic')->nullable()->change();
            $table->text('section3_turky')->nullable()->change();
            $table->text('section3_kurdi')->nullable()->change();
            $table->text('section3_german')->nullable()->change();
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
