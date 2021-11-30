<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersIgnoredTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_ignored')->delete();
        
        
        
    }
}