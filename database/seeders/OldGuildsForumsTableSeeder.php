<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OldGuildsForumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('old_guilds_forums')->delete();
        
        
        
    }
}