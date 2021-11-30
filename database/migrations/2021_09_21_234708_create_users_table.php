<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 25)->unique('username');
            $table->string('real_name', 25)->default('KREWS DEV');
            $table->string('password', 64);
            $table->string('mail', 500)->nullable();
            $table->enum('mail_verified', ['0', '1'])->default('0');
            $table->integer('account_created')->index('account_created');
            $table->integer('account_day_of_birth')->default(0);
            $table->integer('last_login')->default(0)->index('last_login');
            $table->integer('last_online')->default(0)->index('last_online');
            $table->string('motto', 127)->default('');
            $table->string('look', 256)->default('hr-115-42.hd-195-19.ch-3030-82.lg-275-1408.fa-1201.ca-1804-64');
            $table->enum('gender', ['M', 'F'])->default('M');
            $table->integer('rank')->default(1);
            $table->integer('credits')->default(2500);
            $table->integer('pixels')->default(500);
            $table->integer('points')->default(10);
            $table->enum('online', ['0', '1', '2'])->default('0');
            $table->string('auth_ticket', 256)->default('')->index('auth_ticket');
            $table->string('ip_register', 45);
            $table->string('ip_current', 45)->comment('Have your CMS update this IP. If you do not do this IP banning won\'t work!');
            $table->string('machine_id', 64)->default('');
            $table->integer('home_room')->default(0);
            $table->string('secret_key', 40)->nullable();
            $table->string('pincode', 11)->nullable();
            $table->integer('extra_rank')->nullable();
            $table->integer('user_likes')->nullable()->default(0);
            $table->string('pin', 4)->nullable();
            $table->integer('teamrank')->nullable()->default(0);
            $table->string('fbid', 255)->nullable();
            $table->enum('fbenable', ['0', '1', '2'])->nullable()->default('1');
            $table->index(['motto', 'look', 'gender'], 'figure');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
