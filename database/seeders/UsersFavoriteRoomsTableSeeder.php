<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersFavoriteRoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_favorite_rooms')->delete();
        
        
        
    }
}