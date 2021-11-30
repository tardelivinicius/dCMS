<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomVotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_votes')->delete();
        
        
        
    }
}