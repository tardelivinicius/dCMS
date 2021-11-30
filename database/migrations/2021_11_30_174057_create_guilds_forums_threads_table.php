<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsForumsThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds_forums_threads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guild_id')->nullable()->default(0);
            $table->integer('opener_id')->nullable()->default(0);
            $table->string('subject')->nullable()->default('');
            $table->integer('posts_count')->nullable()->default(0);
            $table->integer('created_at')->nullable()->default(0);
            $table->integer('updated_at')->nullable()->default(0);
            $table->integer('state')->nullable()->default(0);
            $table->tinyInteger('pinned')->nullable()->default(0);
            $table->tinyInteger('locked')->nullable()->default(0);
            $table->integer('admin_id')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds_forums_threads');
    }
}
