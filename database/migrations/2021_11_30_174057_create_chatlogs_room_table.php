<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatlogsRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatlogs_room', function (Blueprint $table) {
            $table->integer('room_id')->default(0)->index('room_id');
            $table->integer('user_from_id')->index('user_from_id');
            $table->integer('user_to_id')->default(0)->index('user_to_id');
            $table->string('message')->index('message');
            $table->integer('timestamp')->index('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatlogs_room');
    }
}
