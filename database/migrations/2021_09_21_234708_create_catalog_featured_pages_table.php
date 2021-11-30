<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogFeaturedPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_featured_pages', function (Blueprint $table) {
            $table->integer('slot_id')->primary();
            $table->string('image', 70)->default('');
            $table->string('caption', 130)->default('');
            $table->enum('type', ['page_name', 'page_id', 'product_name'])->default('page_name');
            $table->integer('expire_timestamp')->default(-1);
            $table->string('page_name', 30)->default('');
            $table->integer('page_id')->default(0);
            $table->string('product_name', 40)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_featured_pages');
    }
}
