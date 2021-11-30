<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('hotel_name', 80);
            $table->string('hotel_url', 80)->nullable()->default('');
            $table->integer('hotel_maintenance')->nullable()->default(0);
            $table->integer('hotel_register_enable')->nullable()->default(1);
            $table->integer('client_allow')->nullable()->default(0);
            $table->integer('client_notify')->nullable()->default(1);
            $table->string('connection_info', 50)->nullable();
            $table->string('external_variables', 50)->nullable();
            $table->string('external_texts', 50)->nullable();
            $table->string('external_figurepartlist', 50)->nullable();
            $table->string('flash_dynamic', 50)->nullable();
            $table->string('productdata_load', 50)->nullable();
            $table->string('furnidata_load', 50)->nullable();
            $table->integer('use_sso')->nullable()->default(1);
            $table->integer('processlog_enabled')->nullable()->default(1);
            $table->string('client_starting', 50);
            $table->string('flash_client', 50);
            $table->string('ads_domain', 50);
            $table->integer('diamonds_enabled')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_settings');
    }
}
