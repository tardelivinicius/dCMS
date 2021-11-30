<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessengerFriendshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messenger_friendships')->delete();
        
        
        
    }
}