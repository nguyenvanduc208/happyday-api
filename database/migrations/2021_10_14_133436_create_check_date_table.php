<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_date', function (Blueprint $table) {
            $table->id();
            $table->dateTime('arrival_date');
            $table->dateTime('out_date');
            $table->unsignedBigInteger('resort_id');

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
        Schema::dropIfExists('check_date');
    }
}
