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
            'message' => ':)',
            'room_id' => 201,
            'timestamp' => 1618365098,
            'user_from_id' => 2,
            'user_to_id' => 0,
        ),
        1 => 
        array (
            'message' => ' ',
            'room_id' => 201,
            'timestamp' => 1618410475,
            'user_from_id' => 2,
            'user_to_id' => 0,
        ),
        2 => 
        array (
        'message' => 'HI :)',
        'room_id' => 201,
        'timestamp' => 1618411125,
        'user_from_id' => 2,
        'user_to_id' => 0,
    ),
    3 => 
    array (
    'message' => 'Online :) 100%',
    'room_id' => 201,
    'timestamp' => 1618529763,
    'user_from_id' => 2,
    'user_to_id' => 0,
),
4 => 
array (
    'message' => ':update_catalog',
    'room_id' => 202,
    'timestamp' => 1618702257,
    'user_from_id' => 3,
    'user_to_id' => 0,
),
5 => 
array (
    'message' => ':update item_catalog',
    'room_id' => 202,
    'timestamp' => 1618709204,
    'user_from_id' => 3,
    'user_to_id' => 0,
),
6 => 
array (
    'message' => 'hnn',
    'room_id' => 202,
    'timestamp' => 1618756328,
    'user_from_id' => 3,
    'user_to_id' => 0,
),
7 => 
array (
    'message' => 'hello',
    'room_id' => 202,
    'timestamp' => 1618756336,
    'user_from_id' => 3,
    'user_to_id' => 0,
),
8 => 
array (
    'message' => 'opa',
    'room_id' => 209,
    'timestamp' => 1631579981,
    'user_from_id' => 7,
    'user_to_id' => 0,
),
9 => 
array (
    'message' => 'testando',
    'room_id' => 209,
    'timestamp' => 1631579982,
    'user_from_id' => 7,
    'user_to_id' => 0,
),
10 => 
array (
    'message' => 'teste',
    'room_id' => 209,
    'timestamp' => 1631580571,
    'user_from_id' => 7,
    'user_to_id' => 0,
),
));
        
        
    }
}