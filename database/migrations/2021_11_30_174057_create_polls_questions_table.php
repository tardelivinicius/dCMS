<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollsQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls_questions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('parent_id')->default(0);
            $table->integer('poll_id');
            $table->integer('order');
            $table->string('question');
            $table->integer('type')->default(2);
            $table->integer('min_selections')->default(1);
            $table->string('options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polls_questions');
    }
}
