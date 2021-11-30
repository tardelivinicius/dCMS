<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTargetOfferPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_target_offer_purchases', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('offer_id');
            $table->integer('state')->default(0);
            $table->integer('amount')->default(0);
            $table->integer('last_purchase')->default(0);

            $table->unique(['user_id', 'offer_id'], 'use_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_target_offer_purchases');
    }
}
