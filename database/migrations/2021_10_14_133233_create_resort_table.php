<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resort', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->float('price');
            $table->integer('limit');
            $table->float('size');
            $table->string('view');
            $table->integer('bed');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('image_id');
            $table->text('desc');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('image_id')->references('id')->on('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resort');
    }
}
