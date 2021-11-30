<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersNavigatorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_navigator_settings', function (Blueprint $table) {
            $table->integer('user_id')->unique('userid');
            $table->string('caption', 128);
            $table->enum('list_type', ['list', 'thumbnails'])->default('list')->index('list_type');
            $table->enum('display', ['visible', 'collapsed'])->default('visible')->index('display');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_navigator_settings');
    }
}
