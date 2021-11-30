<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandlogs', function (Blueprint $table) {
            $table->integer('user_id')->index('user_id');
            $table->integer('timestamp');
            $table->string('command', 256)->default('')->index('command');
            $table->string('params', 256)->default('');
            $table->enum('succes', ['no', 'yes'])->default('yes');
            $table->index(['user_id', 'timestamp'], 'user_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandlogs');
    }
}
