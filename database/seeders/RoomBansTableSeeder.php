<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomBansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_bans')->delete();
        
        
        
    }
}