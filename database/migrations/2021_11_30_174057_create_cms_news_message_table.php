<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsNewsMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_news_message', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('date')->default(0);
            $table->integer('newsid')->nullable();
            $table->integer('userid')->nullable();
            $table->string('message', 250)->nullable();
            $table->string('hash')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_news_message');
    }
}
