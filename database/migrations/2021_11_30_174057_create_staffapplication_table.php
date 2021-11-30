<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffapplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffapplication', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('username')->nullable();
            $table->text('realname')->nullable();
            $table->text('skype')->nullable();
            $table->text('age')->nullable();
            $table->text('functie')->nullable();
            $table->text('onlinetime')->nullable();
            $table->text('experience')->nullable();
            $table->text('quarrel')->nullable();
            $table->text('serious')->nullable();
            $table->text('improve')->nullable();
            $table->text('microphone')->nullable();
            $table->text('ip')->nullable();
            $table->text('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffapplication');
    }
}
