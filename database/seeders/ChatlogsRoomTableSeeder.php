<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatlogsRoomTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chatlogs_room')->delete();
        
        \DB::table('chatlogs_room')->insert(array (
            0 => 
            array (
                'room_id' => 201,
                'user_from_id' => 2,
                'user_to_id' => 0,
            'message' => ':)',
            'timestamp' => 1618365098,
        ),
        1 => 
        array (
            'room_id' => 201,
            'user_from_id' => 2,
            'user_to_id' => 0,
            'message' => ' ',
            'timestamp' => 1618410475,
        ),
        2 => 
        array (
            'room_id' => 201,
            'user_from_id' => 2,
            'user_to_id' => 0,
        'message' => 'HI :)',
        'timestamp' => 1618411125,
    ),
    3 => 
    array (
        'room_id' => 201,
        'user_from_id' => 2,
        'user_to_id' => 0,
    'message' => 'Online :) 100%',
    'timestamp' => 1618529763,
),
4 => 
array (
    'room_id' => 202,
    'user_from_id' => 3,
    'user_to_id' => 0,
    'message' => ':update_catalog',
    'timestamp' => 1618702257,
),
5 => 
array (
    'room_id' => 202,
    'user_from_id' => 3,
    'user_to_id' => 0,
    'message' => ':update item_catalog',
    'timestamp' => 1618709204,
),
6 => 
array (
    'room_id' => 202,
    'user_from_id' => 3,
    'user_to_id' => 0,
    'message' => 'hnn',
    'timestamp' => 1618756328,
),
7 => 
array (
    'room_id' => 202,
    'user_from_id' => 3,
    'user_to_id' => 0,
    'message' => 'hello',
    'timestamp' => 1618756336,
),
));
        
        
    }
}