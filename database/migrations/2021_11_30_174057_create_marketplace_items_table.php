<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketplaceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketplace_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('item_id');
            $table->integer('user_id');
            $table->integer('price')->index('price');
            $table->integer('timestamp');
            $table->integer('sold_timestamp')->default(0);
            $table->integer('state')->default(1)->index('status');

            $table->index(['item_id', 'user_id'], 'itemdata');
            $table->index(['timestamp', 'sold_timestamp'], 'time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marketplace_items');
    }
}
