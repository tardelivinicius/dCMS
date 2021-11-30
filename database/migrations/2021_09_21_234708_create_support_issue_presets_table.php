<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportIssuePresetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_issue_presets', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('category')->default(1);
            $table->string('name', 100)->default('');
            $table->string('message', 300)->default('');
            $table->string('reminder', 100);
            $table->integer('ban_for')->default(0)->comment('100000 = perm ban');
            $table->integer('mute_for')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_issue_presets');
    }
}
