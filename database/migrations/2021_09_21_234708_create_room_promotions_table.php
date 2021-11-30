<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_promotions', function (Blueprint $table) {
            $table->integer('room_id')->unique('room_id');
            $table->string('title', 127);
            $table->string('description', 1024);
            $table->integer('end_timestamp')->default(0);
            $table->integer('start_timestamp')->default(-1);
            $table->integer('category')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_promotions');
    }
}
