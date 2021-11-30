<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsShopPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_shop_purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('timestamp')->nullable()->index('timestamp');
            $table->unsignedInteger('user_id')->nullable()->index('user_id');
            $table->unsignedInteger('catalog_item_id')->nullable();
            $table->text('item_ids')->nullable();
            $table->string('catalog_name')->nullable();
            $table->integer('cost_credits')->nullable();
            $table->integer('cost_points')->nullable();
            $table->integer('points_type')->nullable();
            $table->integer('amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs_shop_purchases');
    }
}
