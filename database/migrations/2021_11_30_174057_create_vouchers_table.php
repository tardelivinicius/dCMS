<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code', 10);
            $table->integer('credits')->default(0);
            $table->integer('points')->default(0);
            $table->integer('points_type')->default(0);
            $table->integer('catalog_item_id')->default(0);
            $table->integer('amount')->default(1);
            $table->integer('limit')->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
