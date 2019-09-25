<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_logs', function (Blueprint $table) {
            $table->bigIncrements('Log_id');
            $table->bigInteger('Employee_id')->unsigned();
            $table->foreign('Employee_id')->references('Employee_id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('Order_id')->unsigned();
            $table->foreign('Order_id')->references('Order_id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('Update_daate');
            $table->string('Update_subject');
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
        Schema::dropIfExists('order_logs');
    }
}
