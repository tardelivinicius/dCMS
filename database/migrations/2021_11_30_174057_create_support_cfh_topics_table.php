<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportCfhTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_cfh_topics', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category_id')->nullable();
            $table->string('name_internal')->nullable();
            $table->string('name_external')->nullable();
            $table->enum('action', ['mods', 'auto_ignore', 'auto_reply'])->nullable()->default('mods');
            $table->enum('ignore_target', ['0', '1'])->default('0');
            $table->text('auto_reply')->nullable();
            $table->integer('default_sanction')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_cfh_topics');
    }
}
