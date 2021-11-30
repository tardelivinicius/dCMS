<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_currency', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('type');
            $table->integer('amount')->default(0)->index('amount');

            $table->primary(['user_id', 'type']);
            $table->unique(['user_id', 'type'], 'userdata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_currency');
    }
}
