<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsCrackableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_crackable', function (Blueprint $table) {
            $table->integer('item_id')->primary();
            $table->string('item_name')->comment('Item name for identification');
            $table->integer('count');
            $table->string('prizes')->default('179:1')->comment('Used in the format of item_id:chance;item_id_2:chance. item_id must be id in the items_base table. Default value for chance is 100.');
            $table->string('achievement_tick', 64);
            $table->string('achievement_cracked', 64);
            $table->integer('required_effect')->default(0);
            $table->integer('subscription_duration')->nullable();
            $table->string('subscription_type')->nullable()->comment('hc for Habbo Club, bc for Builders Club');

            $table->index(['count', 'prizes', 'achievement_tick', 'achievement_cracked'], 'data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_crackable');
    }
}
