<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->default(0);
            $table->string('name', 50)->default('')->index('name');
            $table->string('description', 250)->default('')->index('description');
            $table->integer('room_id')->default(0);
            $table->integer('state')->default(0);
            $table->enum('rights', ['0', '1'])->default('0');
            $table->integer('color_one')->default(0);
            $table->integer('color_two')->default(0);
            $table->string('badge', 256)->default('');
            $table->integer('date_created');
            $table->enum('forum', ['0', '1'])->default('0');
            $table->enum('read_forum', ['EVERYONE', 'MEMBERS', 'ADMINS'])->default('EVERYONE');
            $table->enum('post_messages', ['EVERYONE', 'MEMBERS', 'ADMINS', 'OWNER'])->default('EVERYONE');
            $table->enum('post_threads', ['EVERYONE', 'MEMBERS', 'ADMINS', 'OWNER'])->default('EVERYONE');
            $table->enum('mod_forum', ['ADMINS', 'OWNER'])->default('ADMINS');

            $table->index(['room_id', 'user_id'], 'data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds');
    }
}
