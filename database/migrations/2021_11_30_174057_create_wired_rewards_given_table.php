<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWiredRewardsGivenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wired_rewards_given', function (Blueprint $table) {
            $table->integer('wired_item');
            $table->integer('user_id');
            $table->integer('reward_id');
            $table->integer('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wired_rewards_given');
    }
}
