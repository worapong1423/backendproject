<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Hotel_name');
            $table->string ('Hotel_tel');
            $table->string('Hotel_taxid');
            $table->string('Hotel_address');
            $table->string('Hotel_district');
            $table->string('Hotel_province');
            $table->string('Hotel_email');
            $table->string('Hotel_zipcode');
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


        Schema::dropIfExists('hotels');
    }
}
