<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->string('ip', 50)->default('');
            $table->string('machine_id', 255)->default('');
            $table->integer('user_staff_id');
            $table->integer('timestamp');
            $table->integer('ban_expire')->default(0);
            $table->string('ban_reason', 200)->default('');
            $table->enum('type', ['account', 'ip', 'machine', 'super'])->default('account')->comment('Account is the entry in the users table banned.
IP is any client that connects with that IP.
Machine is the computer that logged in.
Super is all of the above.');
            $table->integer('cfh_topic')->default(-1);
            $table->index(['id', 'type'], 'general');
            $table->index(['user_id', 'ip', 'machine_id', 'ban_expire', 'timestamp', 'ban_reason'], 'user_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bans');
    }
}
