<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWindowSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_window_settings', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('x')->default(100);
            $table->integer('y')->default(100);
            $table->integer('width')->default(435);
            $table->integer('height')->default(535);
            $table->enum('open_searches', ['0', '1'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_window_settings');
    }
}
