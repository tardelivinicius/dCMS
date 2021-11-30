<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCraftingRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crafting_recipes', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('product_name', 64)->index('name')->comment('WARNING! This field must match a entry in your productdata or crafting WILL NOT WORK!');
            $table->integer('reward');
            $table->enum('enabled', ['0', '1'])->default('1');
            $table->string('achievement', 255)->default('');
            $table->enum('secret', ['0', '1'])->default('0');
            $table->enum('limited', ['0', '1'])->default('0');
            $table->integer('remaining')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crafting_recipes');
    }
}
