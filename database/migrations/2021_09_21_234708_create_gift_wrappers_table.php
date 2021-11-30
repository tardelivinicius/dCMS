<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftWrappersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_wrappers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sprite_id');
            $table->integer('item_id');
            $table->enum('type', ['gift', 'wrapper'])->default('wrapper');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gift_wrappers');
    }
}
