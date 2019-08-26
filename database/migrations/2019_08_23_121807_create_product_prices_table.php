<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_prices', function (Blueprint $table) {
            $table->bigInteger('Product_id')->unsigned();
            $table->foreign('Product_id')->references('Product_id')->on('products')->onDelete('cascade');
            $table->bigInteger('Hotel_id')->unsigned();
            $table->foreign('Hotel_id')->references('Hotel_id')->on('hotels')->onDelete('cascade');
            $table->bigInteger('PricePerUnit');
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
        Schema::dropIfExists('product_prices');
    }
}
