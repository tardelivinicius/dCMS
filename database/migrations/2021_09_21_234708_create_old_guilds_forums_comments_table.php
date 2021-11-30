<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOldGuildsForumsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('old_guilds_forums_comments', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('thread_id');
            $table->integer('user_id');
            $table->integer('timestamp');
            $table->longText('message');
            $table->enum('state', ['OPEN', 'CLOSED', 'HIDDEN_BY_ADMIN', 'HIDDEN_BY_STAFF'])->default('OPEN');
            $table->integer('admin_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('old_guilds_forums_comments');
    }
}
