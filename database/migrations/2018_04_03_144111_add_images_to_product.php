<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('product', function (Blueprint $table) {
            $table->text('image_id2')->nullable()->after('image_id');
            $table->text('image_id3')->nullable()->after('image_id');
            $table->text('image_id4')->nullable()->after('image_id');
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
