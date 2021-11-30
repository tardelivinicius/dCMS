<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_pets', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('room_id');
            $table->string('name', 15)->default('User Pet');
            $table->integer('race');
            $table->integer('type');
            $table->string('color', 6);
            $table->integer('happyness')->default(100);
            $table->integer('experience')->default(0);
            $table->integer('energy')->default(100);
            $table->integer('hunger')->default(0);
            $table->integer('thirst')->default(0);
            $table->integer('respect')->default(0);
            $table->integer('created');
            $table->integer('x')->default(0);
            $table->integer('y')->default(0);
            $table->double('z')->default(0);
            $table->integer('rot')->default(0);
            $table->integer('hair_style')->default(-1);
            $table->integer('hair_color')->default(0);
            $table->enum('saddle', ['0', '1'])->default('0');
            $table->enum('ride', ['0', '1'])->default('0');
            $table->integer('mp_type')->default(0);
            $table->integer('mp_color')->default(0);
            $table->integer('mp_nose')->default(0);
            $table->tinyInteger('mp_nose_color')->default(0);
            $table->integer('mp_eyes')->default(0);
            $table->tinyInteger('mp_eyes_color')->default(0);
            $table->integer('mp_mouth')->default(0);
            $table->tinyInteger('mp_mouth_color')->default(0);
            $table->integer('mp_death_timestamp')->default(0);
            $table->enum('mp_breedable', ['0', '1'])->default('0');
            $table->enum('mp_allow_breed', ['0', '1'])->default('0');
            $table->string('gnome_data', 80)->default('');
            $table->boolean('mp_is_dead')->default(0);
            $table->integer('saddle_item_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_pets');
    }
}
