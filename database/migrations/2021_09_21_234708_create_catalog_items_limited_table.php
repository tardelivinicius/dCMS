<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogItemsLimitedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_items_limited', function (Blueprint $table) {
            $table->integer('catalog_item_id');
            $table->integer('number');
            $table->integer('user_id')->default(0);
            $table->integer('timestamp')->default(0);
            $table->integer('item_id')->default(0);
            $table->unique(['catalog_item_id', 'number'], 'catalog_item_id');
            $table->index(['user_id', 'timestamp'], 'user_timestamp_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_items_limited');
    }
}
