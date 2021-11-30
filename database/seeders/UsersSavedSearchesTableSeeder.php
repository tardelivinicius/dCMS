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
                'filter' => '',
                'id' => 1,
                'search_code' => 'official-root',
                'user_id' => 1,
            ),
            1 => 
            array (
                'filter' => '',
                'id' => 2,
                'search_code' => 'my',
                'user_id' => 1,
            ),
            2 => 
            array (
                'filter' => '',
                'id' => 3,
                'search_code' => 'favorites',
                'user_id' => 1,
            ),
            3 => 
            array (
                'filter' => '',
                'id' => 4,
                'search_code' => 'official-root',
                'user_id' => 2,
            ),
            4 => 
            array (
                'filter' => '',
                'id' => 5,
                'search_code' => 'my',
                'user_id' => 2,
            ),
            5 => 
            array (
                'filter' => '',
                'id' => 6,
                'search_code' => 'favorites',
                'user_id' => 2,
            ),
            6 => 
            array (
                'filter' => '',
                'id' => 7,
                'search_code' => 'official-root',
                'user_id' => 3,
            ),
            7 => 
            array (
                'filter' => '',
                'id' => 8,
                'search_code' => 'my',
                'user_id' => 3,
            ),
            8 => 
            array (
                'filter' => '',
                'id' => 9,
                'search_code' => 'favorites',
                'user_id' => 3,
            ),
            9 => 
            array (
                'filter' => '',
                'id' => 10,
                'search_code' => 'official-root',
                'user_id' => 4,
            ),
            10 => 
            array (
                'filter' => '',
                'id' => 11,
                'search_code' => 'my',
                'user_id' => 4,
            ),
            11 => 
            array (
                'filter' => '',
                'id' => 12,
                'search_code' => 'favorites',
                'user_id' => 4,
            ),
            12 => 
            array (
                'filter' => '',
                'id' => 13,
                'search_code' => 'official-root',
                'user_id' => 7,
            ),
            13 => 
            array (
                'filter' => '',
                'id' => 14,
                'search_code' => 'my',
                'user_id' => 7,
            ),
            14 => 
            array (
                'filter' => '',
                'id' => 15,
                'search_code' => 'favorites',
                'user_id' => 7,
            ),
        ));
        
        
    }
}