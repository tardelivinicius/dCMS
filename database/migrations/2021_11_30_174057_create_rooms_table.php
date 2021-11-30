<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('owner_id')->default(0)->index('owner_id');
            $table->string('owner_name', 25)->default('')->index('owner_name');
            $table->string('name', 50)->default('')->index('name');
            $table->string('description', 512)->default('')->index('description');
            $table->string('model', 20)->default('model_a');
            $table->string('password', 20)->default('');
            $table->enum('state', ['open', 'locked', 'password', 'invisible'])->default('open')->index('state');
            $table->integer('users')->default(0)->index('users');
            $table->integer('users_max')->default(25);
            $table->integer('guild_id')->default(0)->index('guild_id');
            $table->integer('category')->default(1)->index('category');
            $table->integer('score')->default(0);
            $table->string('paper_floor', 5)->default('0.0');
            $table->string('paper_wall', 5)->default('0.0');
            $table->string('paper_landscape', 5)->default('0.0');
            $table->integer('thickness_wall')->default(0);
            $table->integer('wall_height')->default(-1);
            $table->integer('thickness_floor')->default(0);
            $table->string('moodlight_data', 254)->default('2,1,1,#000000,255;2,3,1,#000000,255;2,3,1,#000000,255;');
            $table->string('tags', 500)->default('')->index('tags');
            $table->enum('is_public', ['0', '1'])->default('0');
            $table->enum('is_staff_picked', ['0', '1'])->default('0');
            $table->enum('allow_other_pets', ['0', '1'])->default('0');
            $table->enum('allow_other_pets_eat', ['0', '1'])->default('0');
            $table->enum('allow_walkthrough', ['0', '1'])->default('1');
            $table->enum('allow_hidewall', ['0', '1'])->default('0');
            $table->integer('chat_mode')->default(0);
            $table->integer('chat_weight')->default(1);
            $table->integer('chat_speed')->default(1);
            $table->integer('chat_hearing_distance')->default(50);
            $table->integer('chat_protection')->default(2);
            $table->enum('override_model', ['0', '1'])->default('0');
            $table->integer('who_can_mute')->default(0);
            $table->integer('who_can_kick')->default(0);
            $table->integer('who_can_ban')->default(0);
            $table->integer('poll_id')->default(0);
            $table->integer('roller_speed')->default(4);
            $table->enum('promoted', ['0', '1'])->default('0');
            $table->integer('trade_mode')->default(2);
            $table->enum('move_diagonally', ['0', '1'])->default('1');
            $table->enum('jukebox_active', ['0', '1'])->default('0');
            $table->enum('hidewired', ['0', '1'])->default('0');
            $table->enum('is_forsale', ['0', '1', '2'])->default('0');

            $table->index(['is_public', 'is_staff_picked'], 'public_status');
            $table->index(['name', 'owner_name', 'guild_id'], 'togehter_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
