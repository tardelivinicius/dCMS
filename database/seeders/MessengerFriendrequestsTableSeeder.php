<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessengerFriendrequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messenger_friendrequests')->delete();
        
        
        
    }
}