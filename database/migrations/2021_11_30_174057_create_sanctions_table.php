<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanctions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('habbo_id')->default(0);
            $table->integer('sanction_level')->default(0);
            $table->integer('probation_timestamp')->default(0);
            $table->string('reason')->default('');
            $table->integer('trade_locked_until')->default(0);
            $table->boolean('is_muted')->default(false);
            $table->integer('mute_duration')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanctions');
    }
}
