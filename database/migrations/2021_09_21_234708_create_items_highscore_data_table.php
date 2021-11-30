<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsHighscoreDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_highscore_data', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('item_id');
            $table->string('user_ids', 500);
            $table->integer('score');
            $table->boolean('is_win')->nullable()->default(0);
            $table->integer('timestamp');
            $table->index(['item_id', 'user_ids'], 'data');
            $table->index(['is_win', 'score', 'timestamp'], 'status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_highscore_data');
    }
}
