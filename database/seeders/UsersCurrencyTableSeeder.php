<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersCurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_currency')->delete();
        
        \DB::table('users_currency')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'type' => 0,
                'amount' => 5,
            ),
            1 => 
            array (
                'user_id' => 2,
                'type' => 0,
                'amount' => 90,
            ),
            2 => 
            array (
                'user_id' => 3,
                'type' => 0,
                'amount' => 145,
            ),
            3 => 
            array (
                'user_id' => 4,
                'type' => 0,
                'amount' => 10,
            ),
            4 => 
            array (
                'user_id' => 7,
                'type' => 0,
                'amount' => 5,
            ),
        ));
        
        
    }
}