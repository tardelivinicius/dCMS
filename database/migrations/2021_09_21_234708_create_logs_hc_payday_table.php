<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsHcPaydayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_hc_payday', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('timestamp')->nullable()->index('timestamp');
            $table->unsignedInteger('user_id')->nullable()->index('user_id');
            $table->unsignedInteger('hc_streak')->nullable();
            $table->unsignedInteger('total_coins_spent')->nullable();
            $table->unsignedInteger('reward_coins_spent')->nullable();
            $table->unsignedInteger('reward_streak')->nullable();
            $table->unsignedInteger('total_payout')->nullable();
            $table->string('currency', 255)->nullable();
            $table->boolean('claimed')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs_hc_payday');
    }
}
