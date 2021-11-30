<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtube_playlists', function (Blueprint $table) {
            $table->integer('item_id');
            $table->string('playlist_id')->comment('YouTube playlist ID');
            $table->integer('order');

            $table->unique(['item_id', 'playlist_id', 'order'], 'item_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('youtube_playlists');
    }
}
