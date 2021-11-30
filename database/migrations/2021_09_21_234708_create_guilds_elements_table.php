<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds_elements', function (Blueprint $table) {
            $table->integer('id');
            $table->string('firstvalue', 300);
            $table->string('secondvalue', 300);
            $table->string('type', 50);
            $table->enum('enabled', ['0', '1'])->default('1');
            $table->unique(['id', 'type'], 'data');
            $table->unique(['id', 'type'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guilds_elements');
    }
}
