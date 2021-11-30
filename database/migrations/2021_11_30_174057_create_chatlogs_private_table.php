<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatlogsPrivateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatlogs_private', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_from_id')->index('user_from_id');
            $table->integer('user_to_id')->index('user_to_id');
            $table->string('message')->index('message');
            $table->integer('timestamp')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatlogs_private');
    }
}
