<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSavedSearchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_saved_searches')->delete();
        
        \DB::table('users_saved_searches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'search_code' => 'official-root',
                'filter' => '',
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'search_code' => 'my',
                'filter' => '',
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'search_code' => 'favorites',
                'filter' => '',
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'search_code' => 'official-root',
                'filter' => '',
                'user_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'search_code' => 'my',
                'filter' => '',
                'user_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'search_code' => 'favorites',
                'filter' => '',
                'user_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'search_code' => 'official-root',
                'filter' => '',
                'user_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'search_code' => 'my',
                'filter' => '',
                'user_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'search_code' => 'favorites',
                'filter' => '',
                'user_id' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'search_code' => 'official-root',
                'filter' => '',
                'user_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'search_code' => 'my',
                'filter' => '',
                'user_id' => 4,
            ),
            11 => 
            array (
                'id' => 12,
                'search_code' => 'favorites',
                'filter' => '',
                'user_id' => 4,
            ),
            12 => 
            array (
                'id' => 13,
                'search_code' => 'official-root',
                'filter' => '',
                'user_id' => 7,
            ),
            13 => 
            array (
                'id' => 14,
                'search_code' => 'my',
                'filter' => '',
                'user_id' => 7,
            ),
            14 => 
            array (
                'id' => 15,
                'search_code' => 'favorites',
                'filter' => '',
                'user_id' => 7,
            ),
        ));
        
        
    }
}