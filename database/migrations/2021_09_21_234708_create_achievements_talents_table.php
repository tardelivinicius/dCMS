<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements_talents', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('type', ['citizenship', 'helper'])->default('citizenship');
            $table->integer('level')->default(0);
            $table->string('achievement_ids', 100)->default('');
            $table->string('achievement_levels', 100)->default('');
            $table->string('reward_furni', 100)->default('');
            $table->string('reward_perks', 100)->default('');
            $table->string('reward_badges', 100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements_talents');
    }
}
