<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds_members', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('guild_id')->default(0)->index('guild_id');
            $table->integer('user_id')->default(0)->index('user_id');
            $table->integer('level_id')->default(0)->index('level_id');
            $table->integer('member_since')->default(0)->index('member_since');
            $table->index(['user_id', 'guild_id'], 'userdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds_members');
    }
}
