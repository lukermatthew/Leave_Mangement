<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsleaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestleaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type_id');
            $table->string('description');
            $table->string('message')->nullable();
            $table->boolean('status');
            $table->string('startdate');
            $table->string('enddate');
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
        Schema::dropIfExists('requestleave');
    }
}
