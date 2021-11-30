<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetCommandsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_commands_data', function (Blueprint $table) {
            $table->integer('command_id')->primary();
            $table->string('text', 15);
            $table->integer('required_level');
            $table->integer('reward_xp')->default(5);
            $table->integer('cost_happyness')->default(0);
            $table->integer('cost_energy')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_commands_data');
    }
}
