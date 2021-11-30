<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanctionLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanction_levels', function (Blueprint $table) {
            $table->integer('level')->primary();
            $table->enum('type', ['ALERT', 'BAN', 'MUTE']);
            $table->integer('hour_length');
            $table->integer('probation_days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanction_levels');
    }
}
