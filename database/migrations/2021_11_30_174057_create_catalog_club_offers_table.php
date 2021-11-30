<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogClubOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_club_offers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->enum('enabled', ['0', '1'])->default('1');
            $table->string('name', 35);
            $table->integer('days');
            $table->integer('credits')->default(10);
            $table->integer('points')->default(0);
            $table->integer('points_type')->default(0);
            $table->enum('type', ['HC', 'VIP'])->default('HC');
            $table->enum('deal', ['0', '1'])->default('0');
            $table->enum('giftable', ['1', '0'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_club_offers');
    }
}
