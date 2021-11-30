<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_items', function (Blueprint $table) {
            $table->enum('type', ['base', 'symbol', 'color', 'color2', 'color3'])->index('type');
            $table->integer('id')->index('id');
            $table->string('firstvalue');
            $table->string('secondvalue', 2000);
            $table->enum('enabled', ['0', '1'])->default('1');

            $table->primary(['id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_items');
    }
}
