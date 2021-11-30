<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTradeLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_trade_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_one_id')->index('user_one_id');
            $table->integer('user_two_id')->index('user_two_id');
            $table->string('user_one_ip', 45);
            $table->string('user_two_ip', 45);
            $table->integer('timestamp');
            $table->integer('user_one_item_count');
            $table->integer('user_two_item_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_trade_log');
    }
}
