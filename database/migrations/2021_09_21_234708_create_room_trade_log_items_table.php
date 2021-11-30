<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTradeLogItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_trade_log_items', function (Blueprint $table) {
            $table->integer('id')->index('id_2');
            $table->integer('item_id');
            $table->integer('user_id')->index('user_id');
            $table->unique(['id', 'item_id', 'user_id'], 'id');
            $table->index(['id', 'user_id'], 'id_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_trade_log_items');
    }
}
