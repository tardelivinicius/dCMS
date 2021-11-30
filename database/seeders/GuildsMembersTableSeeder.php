<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuildsMembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('guilds_members')->delete();
        
        
        
    }
}