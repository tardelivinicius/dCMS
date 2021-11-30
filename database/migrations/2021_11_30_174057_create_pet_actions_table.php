<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_actions', function (Blueprint $table) {
            $table->integer('pet_type', true);
            $table->string('pet_name', 32);
            $table->integer('offspring_type')->default(-1);
            $table->string('happy_actions', 100)->default('');
            $table->string('tired_actions', 100)->default('');
            $table->string('random_actions', 100)->default('');
            $table->enum('can_swim', ['1', '0'])->nullable()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_actions');
    }
}
