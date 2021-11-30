<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferrerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrer', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('userid', 10, 0)->nullable();
            $table->decimal('refid', 10, 0)->nullable();
            $table->decimal('diamonds', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referrer');
    }
}
