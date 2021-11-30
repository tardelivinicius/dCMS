<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelviewNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelview_news', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 100);
            $table->string('text', 500);
            $table->string('button_text', 50);
            $table->enum('button_type', ['client', 'web'])->default('web');
            $table->string('button_link', 200);
            $table->string('image', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotelview_news');
    }
}
