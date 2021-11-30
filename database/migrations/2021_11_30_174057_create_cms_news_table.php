<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_news', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 100);
            $table->string('image', 100)->default('0');
            $table->text('shortstory');
            $table->text('longstory');
            $table->string('author', 100)->default('Tom');
            $table->integer('date')->default(0);
            $table->string('type', 100)->default('1');
            $table->string('roomid', 100)->default('1');
            $table->enum('updated', ['0', '1'])->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_news');
    }
}
