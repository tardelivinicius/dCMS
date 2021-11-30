<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersClothingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_clothing')->delete();
        
        
        
    }
}