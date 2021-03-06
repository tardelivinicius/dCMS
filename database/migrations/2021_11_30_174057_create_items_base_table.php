<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_base', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sprite_id')->default(0);
            $table->string('item_name', 70);
            $table->string('public_name', 56)->default('');
            $table->integer('width')->default(1);
            $table->integer('length')->default(1);
            $table->double('stack_height', 4, 2)->default(0);
            $table->boolean('allow_stack')->default(true);
            $table->boolean('allow_sit')->default(false);
            $table->boolean('allow_lay')->default(false);
            $table->boolean('allow_walk')->default(false);
            $table->boolean('allow_gift')->default(true);
            $table->boolean('allow_trade')->default(true);
            $table->boolean('allow_recycle')->default(false);
            $table->boolean('allow_marketplace_sell')->default(false);
            $table->boolean('allow_inventory_stack')->default(true);
            $table->string('type', 3)->default('s');
            $table->string('interaction_type', 500)->default('default');
            $table->integer('interaction_modes_count')->default(1);
            $table->string('vending_ids')->default('0');
            $table->string('multiheight', 50)->default('0');
            $table->string('customparams', 256)->default('');
            $table->integer('effect_id_male')->default(0);
            $table->integer('effect_id_female')->default(0);
            $table->string('clothing_on_walk')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_base');
    }
}
