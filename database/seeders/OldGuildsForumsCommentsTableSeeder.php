<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OldGuildsForumsCommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('old_guilds_forums_comments')->delete();
        
        
        
    }
}