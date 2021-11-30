<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_items', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->string('item_ids', 666);
            $table->integer('page_id')->index('page_id');
            $table->integer('offer_id')->default(-1);
            $table->unsignedInteger('song_id')->default(0);
            $table->integer('order_number')->default(1);
            $table->string('catalog_name', 100)->index('catalog_name');
            $table->integer('cost_credits')->default(3);
            $table->integer('cost_points')->default(0);
            $table->integer('points_type')->default(0)->comment('0 for duckets; 5 for diamonds; and any seasonal/GOTW currencies you have in your emu_settings table.');
            $table->integer('amount')->default(1);
            $table->integer('limited_sells')->default(0)->comment('This automatically logs from the emu; do not change it.');
            $table->integer('limited_stack')->default(0)->comment('Change this number to make the item limited.');
            $table->string('extradata', 500)->default('');
            $table->enum('have_offer', ['0', '1'])->default('1');
            $table->enum('club_only', ['0', '1'])->default('0');
            $table->enum('rate', ['up', 'down', 'none'])->nullable()->default('none');
            $table->index(['cost_credits', 'cost_points', 'points_type'], 'costs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_items');
    }
}
