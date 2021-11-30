<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigatorFlatcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigator_flatcats', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('min_rank')->default(0);
            $table->string('caption_save', 32)->default('caption_save');
            $table->string('caption', 100);
            $table->enum('can_trade', ['0', '1'])->default('1');
            $table->integer('max_user_count')->default(100);
            $table->enum('public', ['0', '1'])->default('0');
            $table->integer('list_type')->default(0)->comment('Display mode in the navigator. 0 for list, 1 for thumbnails.');
            $table->integer('order_num')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigator_flatcats');
    }
}
