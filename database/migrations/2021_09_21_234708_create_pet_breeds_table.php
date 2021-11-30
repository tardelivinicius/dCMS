<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_breeds', function (Blueprint $table) {
            $table->integer('race');
            $table->integer('color_one');
            $table->integer('color_two');
            $table->enum('has_color_one', ['0', '1'])->default('0');
            $table->enum('has_color_two', ['0', '1'])->default('0');
            $table->unique(['race', 'color_one', 'color_two', 'has_color_one', 'has_color_two'], 'idx_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_breeds');
    }
}
