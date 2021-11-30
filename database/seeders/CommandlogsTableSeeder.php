<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommandlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('commandlogs')->delete();
        
        
        
    }
}