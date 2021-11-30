<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmulatorErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emulator_errors', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('timestamp')->default(0);
            $table->string('version', 64);
            $table->string('build_hash', 64);
            $table->string('type', 32)->default('Exception');
            $table->binary('stacktrace');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emulator_errors');
    }
}
