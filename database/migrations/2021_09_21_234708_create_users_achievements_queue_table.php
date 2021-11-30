<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAchievementsQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_achievements_queue', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('achievement_id');
            $table->integer('amount');
            $table->unique(['user_id', 'achievement_id'], 'data');
            $table->unique(['user_id', 'achievement_id'], 'unique_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_achievements_queue');
    }
}
