<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bots', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->default(0);
            $table->integer('room_id')->default(0);
            $table->string('name', 25)->default('');
            $table->string('motto', 100)->default('');
            $table->string('figure', 500)->default('');
            $table->enum('gender', ['M', 'F'])->default('M');
            $table->integer('x')->default(0);
            $table->integer('y')->default(0);
            $table->double('z', 11, 1)->default(0.0);
            $table->integer('rot')->default(0);
            $table->string('chat_lines', 5112)->default('');
            $table->enum('chat_auto', ['0', '1'])->default('1');
            $table->enum('chat_random', ['0', '1'])->default('1');
            $table->integer('chat_delay')->default(5);
            $table->integer('dance')->default(0);
            $table->enum('freeroam', ['0', '1'])->default('0');
            $table->enum('type', ['generic', 'visitor_log', 'bartender', 'weapons_dealer'])->default('generic');
            $table->integer('effect')->default(0);
            $table->integer('bubble_id')->nullable()->default(31);
            $table->index(['id', 'user_id', 'room_id', 'name', 'motto', 'gender'], 'general_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bots');
    }
}
