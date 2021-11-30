<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_models', function (Blueprint $table) {
            $table->string('name', 100)->primary();
            $table->integer('door_x');
            $table->integer('door_y');
            $table->integer('door_dir')->default(2);
            $table->text('heightmap');
            $table->text('public_items');
            $table->enum('club_only', ['0', '1'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_models');
    }
}
