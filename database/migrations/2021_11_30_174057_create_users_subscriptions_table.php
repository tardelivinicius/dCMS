<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->index('user_id');
            $table->string('subscription_type')->nullable()->index('subscription_type');
            $table->unsignedInteger('timestamp_start')->nullable()->index('timestamp_start');
            $table->unsignedInteger('duration')->nullable();
            $table->boolean('active')->nullable()->default(true)->index('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_subscriptions');
    }
}
