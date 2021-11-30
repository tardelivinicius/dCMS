<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCraftingAltarsRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crafting_altars_recipes', function (Blueprint $table) {
            $table->integer('altar_id');
            $table->integer('recipe_id');

            $table->unique(['altar_id', 'recipe_id'], 'altar_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crafting_altars_recipes');
    }
}
