<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordfilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wordfilter', function (Blueprint $table) {
            $table->string('key', 256)->unique('key')->comment('The word to filter.');
            $table->string('replacement', 16)->comment('What the word should be replaced with.');
            $table->enum('hide', ['0', '1'])->default('0')->comment('Wether the whole message that contains this word should be hidden from being displayed.');
            $table->enum('report', ['0', '1'])->default('0')->comment('Wether the message should be reported as auto-report to the moderators.');
            $table->integer('mute')->default(0)->comment('Time user gets muted for mentioning this word.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wordfilter');
    }
}
