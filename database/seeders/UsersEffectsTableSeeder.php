<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersEffectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_effects')->delete();
        
        
        
    }
}