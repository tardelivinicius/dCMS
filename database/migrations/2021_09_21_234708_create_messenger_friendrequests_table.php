<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessengerFriendrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_friendrequests', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_to_id')->default(0);
            $table->integer('user_from_id')->default(0);
            $table->index(['user_to_id', 'user_from_id'], 'users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messenger_friendrequests');
    }
}
