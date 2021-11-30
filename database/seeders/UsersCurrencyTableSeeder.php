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
                'amount' => 5,
                'type' => 0,
                'user_id' => 1,
            ),
            1 => 
            array (
                'amount' => 90,
                'type' => 0,
                'user_id' => 2,
            ),
            2 => 
            array (
                'amount' => 145,
                'type' => 0,
                'user_id' => 3,
            ),
            3 => 
            array (
                'amount' => 10,
                'type' => 0,
                'user_id' => 4,
            ),
            4 => 
            array (
                'amount' => 25,
                'type' => 0,
                'user_id' => 7,
            ),
        ));
        
        
    }
}