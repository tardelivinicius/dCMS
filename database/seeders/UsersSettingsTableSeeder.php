<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_settings')->delete();
        
        
        
    }
}