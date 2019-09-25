<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('Product_id');
            $table->string('Product_name');
            $table->bigInteger('Product_amountin');
            $table->bigInteger('Product_amountout')->nullable();
            $table->bigInteger('Status_id')->unsigned()->nullable();
            $table->foreign('Status_id')->references('Status_id')->on('status_products')->onDelete('cascade')->onUpdate('cascade');
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

        Schema::dropIfExists('products');

    }
}
