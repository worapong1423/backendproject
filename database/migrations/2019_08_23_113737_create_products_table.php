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
            $table->string('Product_Name');
            $table->bigInteger('Product_AmountIn');
            $table->bigInteger('Product_AmountOut')->nullable();
            $table->bigInteger('Status_id')->unsigned();
            $table->foreign('Status_id')->references('Status_id')->on('status_products')->onDelete('cascade');
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
