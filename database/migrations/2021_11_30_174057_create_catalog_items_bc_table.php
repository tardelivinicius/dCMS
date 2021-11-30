<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogItemsBcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_items_bc', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('item_ids', 666);
            $table->integer('page_id');
            $table->string('catalog_name', 100);
            $table->integer('order_number')->default(1);
            $table->string('extradata', 500)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_items_bc');
    }
}
