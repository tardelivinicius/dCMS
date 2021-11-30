<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsForumsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds_forums_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->text('message');
            $table->integer('created_at')->default(0);
            $table->integer('state')->default(0);
            $table->integer('admin_id')->default(0);
            $table->index(['thread_id', 'user_id', 'created_at', 'state'], 'thread_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds_forums_comments');
    }
}
