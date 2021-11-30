<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomMutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_mutes')->delete();
        
        
        
    }
}