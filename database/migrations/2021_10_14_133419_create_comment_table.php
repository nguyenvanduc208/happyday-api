<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->id();
            $table->text('post');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('resort_id');
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->foreign('resort_id')->references('id')->on('resort');
        });
    }
    
 

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}