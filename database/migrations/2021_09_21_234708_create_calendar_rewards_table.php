<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_rewards', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('custom_image', 128)->default('');
            $table->integer('credits')->default(0);
            $table->integer('points')->default(0);
            $table->integer('points_type')->default(0);
            $table->string('badge', 25)->default('');
            $table->integer('item_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_rewards');
    }
}
