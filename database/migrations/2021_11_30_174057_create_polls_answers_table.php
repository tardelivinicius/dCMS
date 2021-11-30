<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePollsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls_answers', function (Blueprint $table) {
            $table->integer('poll_id');
            $table->integer('user_id');
            $table->integer('question_id');
            $table->string('answer');

            $table->unique(['poll_id', 'user_id', 'question_id'], 'unique_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polls_answers');
    }
}
