<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogTargetOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_target_offers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('offer_code', 32);
            $table->string('title', 128)->default('');
            $table->string('description', 2048)->default('');
            $table->string('image', 128);
            $table->string('icon', 128);
            $table->integer('end_timestamp');
            $table->integer('credits')->default(10);
            $table->integer('points')->default(10);
            $table->integer('points_type')->default(5);
            $table->integer('purchase_limit')->default(5);
            $table->integer('catalog_item');
            $table->string('vars', 1024)->default('')->comment('List of strings seperated by a ;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_target_offers');
    }
}
