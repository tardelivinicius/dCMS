<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOldGuildsForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('old_guilds_forums', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('guild_id');
            $table->integer('user_id');
            $table->mediumText('subject');
            $table->longText('message');
            $table->enum('state', ['OPEN', 'CLOSED', 'HIDDEN_BY_ADMIN', 'HIDDEN_BY_STAFF'])->default('OPEN');
            $table->integer('admin_id')->default(0);
            $table->enum('pinned', ['0', '1'])->default('0');
            $table->enum('locked', ['0', '1'])->default('0');
            $table->integer('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('old_guilds_forums');
    }
}
