<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('resort_id');
            $table->float('price');
            $table->string('address');
            $table->string('number_phone');
            $table->dateTime('check_in_date');
            $table->dateTime('check_out_date');
            $table->bigInteger('count_people');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('resort_id')->references('id')->on('resort');

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
        Schema::dropIfExists('booking');
    }
}
