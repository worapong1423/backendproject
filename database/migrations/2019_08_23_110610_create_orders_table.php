<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hotel_id');
            $table->bigInteger('receiver_id')->nullable();
            $table->text('receive_sign')->nullable();
            $table->string('customer_receive_name')->nullable();
            $table->bigInteger('sender_id')->nullable();
            $table->text('send_sign')->nullable();
            $table->string('customer_send_name')->nullable();
            $table->bigInteger('status_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
