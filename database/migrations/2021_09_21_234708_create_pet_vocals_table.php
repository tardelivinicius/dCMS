<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetVocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_vocals', function (Blueprint $table) {
            $table->integer('pet_id')->default(0)->comment('Leave 0 to have it apply to all pet types.');
            $table->enum('type', ['DISOBEY', 'DRINKING', 'EATING', 'GENERIC_HAPPY', 'GENERIC_NEUTRAL', 'GENERIC_SAD', 'GREET_OWNER', 'HUNGRY', 'LEVEL_UP', 'MUTED', 'PLAYFUL', 'SLEEPING', 'THIRSTY', 'TIRED', 'UNKNOWN_COMMAND'])->default('GENERIC_HAPPY');
            $table->string('message', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_vocals');
    }
}
