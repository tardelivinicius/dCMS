<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class YoutubePlaylistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('youtube_playlists')->delete();
        
        
        
    }
}