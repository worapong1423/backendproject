<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_logs', function (Blueprint $table) {
            $table->bigIncrements('Log_id');
            $table->bigInteger('Employee_id')->unsigned();
            $table->foreign('Employee_id')->references('Employee_id')->on('employees')->onDelete('cascade');
            $table->bigInteger('Bill_id')->unsigned();
            $table->foreign('Bill_id')->references('Bill_id')->on('bills')->onDelete('cascade');
            $table->dateTime('Update_date');
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
        Schema::dropIfExists('bill_logs');
    }
}
