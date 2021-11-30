<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigatorFilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigator_filter', function (Blueprint $table) {
            $table->string('key', 11)->primary();
            $table->string('field', 32);
            $table->enum('compare', ['equals', 'equals_ignore_case', 'contains']);
            $table->string('database_query', 1024);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigator_filter');
    }
}
