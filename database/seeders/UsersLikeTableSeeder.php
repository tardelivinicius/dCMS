<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersLikeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_like')->delete();
        
        
        
    }
}