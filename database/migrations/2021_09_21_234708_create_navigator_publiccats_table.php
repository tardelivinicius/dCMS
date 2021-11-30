<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigatorPubliccatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigator_publiccats', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 32)->default('Staff Picks');
            $table->enum('image', ['0', '1'])->default('0');
            $table->enum('visible', ['0', '1'])->default('1');
            $table->integer('order_num')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navigator_publiccats');
    }
}
