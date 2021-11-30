<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersEffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_effects', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('effect');
            $table->integer('duration')->default(86400);
            $table->integer('activation_timestamp')->default(-1);
            $table->integer('total')->default(1);

            $table->unique(['user_id', 'effect'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_effects');
    }
}
