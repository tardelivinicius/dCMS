<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessengerOfflineTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messenger_offline')->delete();
        
        
        
    }
}