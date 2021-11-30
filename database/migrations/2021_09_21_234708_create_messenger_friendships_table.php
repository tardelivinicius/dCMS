<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessengerFriendshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_friendships', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_one_id')->default(0)->index('user_one_id');
            $table->integer('user_two_id')->default(0)->index('user_two_id');
            $table->integer('relation')->default(0);
            $table->integer('friends_since')->default(0);
            $table->index(['user_one_id', 'user_two_id'], 'userdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messenger_friendships');
    }
}
