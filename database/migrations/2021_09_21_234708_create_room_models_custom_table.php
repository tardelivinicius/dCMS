<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomModelsCustomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_models_custom', function (Blueprint $table) {
            $table->integer('id')->unique('id');
            $table->string('name', 100);
            $table->integer('door_x');
            $table->integer('door_y');
            $table->integer('door_dir');
            $table->text('heightmap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_models_custom');
    }
}
