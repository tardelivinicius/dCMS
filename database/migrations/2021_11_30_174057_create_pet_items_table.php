<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_items', function (Blueprint $table) {
            $table->integer('pet_id')->comment('Leave 0 to have it affect all pet types.');
            $table->integer('item_id')->comment('Item id of a item having one of the following interactions: nest, pet_food, pet_drink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_items');
    }
}
