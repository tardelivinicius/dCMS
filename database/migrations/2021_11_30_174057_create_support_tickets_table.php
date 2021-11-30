<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('state')->default(0)->index('state');
            $table->integer('type')->default(1)->index('type');
            $table->integer('timestamp')->default(0)->index('timestamp');
            $table->integer('score')->default(0);
            $table->integer('sender_id')->default(0);
            $table->integer('reported_id')->default(0);
            $table->integer('room_id')->default(0)->index('room_id');
            $table->integer('mod_id')->default(0);
            $table->string('issue', 500)->default('')->index('issue');
            $table->integer('category')->default(0);
            $table->integer('group_id');
            $table->integer('thread_id');
            $table->integer('comment_id');
            $table->integer('photo_item_id')->default(-1);

            $table->index(['sender_id', 'reported_id'], 'user_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_tickets');
    }
}
