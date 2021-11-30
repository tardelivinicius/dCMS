<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->default(0)->index('user_id');
            $table->integer('room_id')->default(0);
            $table->integer('item_id')->nullable()->default(0);
            $table->string('wall_pos', 20)->default('');
            $table->integer('x')->default(0);
            $table->integer('y')->default(0);
            $table->double('z', 10, 6)->default(0.000000);
            $table->integer('rot')->default(0);
            $table->string('extra_data', 500)->default('')->index('extra_data');
            $table->string('wired_data', 500)->default('')->index('wired_data');
            $table->string('limited_data', 10)->default('0:0');
            $table->integer('guild_id')->default(0);

            $table->index(['room_id', 'item_id'], 'itemsdata');
            $table->index(['user_id', 'room_id'], 'room_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
