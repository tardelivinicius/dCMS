<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoundtracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soundtracks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code', 32);
            $table->string('name', 100);
            $table->string('author', 50);
            $table->text('track');
            $table->integer('length')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soundtracks');
    }
}
