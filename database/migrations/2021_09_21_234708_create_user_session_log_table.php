<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSessionLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_session_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('userid', 255)->nullable();
            $table->string('ip', 255)->nullable();
            $table->string('date', 255)->nullable();
            $table->string('browser', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_session_log');
    }
}
