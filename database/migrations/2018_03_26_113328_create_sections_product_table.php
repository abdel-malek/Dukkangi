<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('product', function (Blueprint $table) {
          $table->text('section1_english');
          $table->text('section1_arabic');
          $table->text('section1_turky');
          $table->text('section1_kurdi');
          $table->text('section1_german');
          $table->text('section2_english');
          $table->text('section2_arabic');
          $table->text('section2_turky');
          $table->text('section2_kurdi');
          $table->text('section2_german');
          $table->text('section3_english');
          $table->text('section3_arabic');
          $table->text('section3_turky');
          $table->text('section3_kurdi');
          $table->text('section3_german');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections_product');
    }
}
