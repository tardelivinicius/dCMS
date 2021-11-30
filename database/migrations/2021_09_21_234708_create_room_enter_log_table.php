<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomEnterLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_enter_log', function (Blueprint $table) {
            $table->integer('room_id')->index('room_id');
            $table->integer('user_id')->index('user_id');
            $table->integer('timestamp');
            $table->integer('exit_timestamp')->default(0)->index('exit_timestamp');
            $table->index(['user_id', 'timestamp'], 'room_enter_log_user_entry');
            $table->index(['timestamp', 'exit_timestamp'], 'timestamps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_enter_log');
    }
}
