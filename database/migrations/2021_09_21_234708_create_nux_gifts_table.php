<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNuxGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nux_gifts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('type', ['item', 'room'])->default('item');
            $table->string('value', 32)->comment('If type item then items.item_name. If type room then room id to copy.');
            $table->string('image', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nux_gifts');
    }
}
