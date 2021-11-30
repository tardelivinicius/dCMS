<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomGameScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_game_scores', function (Blueprint $table) {
            $table->integer('room_id');
            $table->integer('game_start_timestamp');
            $table->string('game_name', 64)->default('');
            $table->integer('user_id');
            $table->integer('team_id');
            $table->integer('score');
            $table->integer('team_score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_game_scores');
    }
}
