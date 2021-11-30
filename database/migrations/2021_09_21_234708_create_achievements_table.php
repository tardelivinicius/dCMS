<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("achievements", function (Blueprint $table) {
            $table->bigIncrements("id", true);
            $table->string("name", 64)->default("ACH_");
            $table->enum("category", ["identity", "explore", "music", "social", "games", "room_builder", "pets", "tools", "events"])->default("identity");
            $table->integer("level")->default(1);
            $table->integer("reward_amount")->default(100);
            $table->integer("reward_type")->default(0);
            $table->integer("points")->nullable()->default(10);
            $table->integer("progress_needed")->default(1);
        });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("achievements");
    }
}
