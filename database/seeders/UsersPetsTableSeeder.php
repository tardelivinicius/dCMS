<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersPetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_pets')->delete();
        
        \DB::table('users_pets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'room_id' => 0,
                'name' => 'rod',
                'race' => 6,
                'type' => 7,
                'color' => 'CCCCCC',
                'happyness' => 99,
                'experience' => 0,
                'energy' => 93,
                'hunger' => 100,
                'thirst' => 100,
                'respect' => 0,
                'created' => 1618762976,
                'x' => 0,
                'y' => 0,
                'z' => 0.0,
                'rot' => 0,
                'hair_style' => -1,
                'hair_color' => 0,
                'saddle' => '0',
                'ride' => '0',
                'mp_type' => 0,
                'mp_color' => 0,
                'mp_nose' => 0,
                'mp_nose_color' => 0,
                'mp_eyes' => 0,
                'mp_eyes_color' => 0,
                'mp_mouth' => 0,
                'mp_mouth_color' => 0,
                'mp_death_timestamp' => 0,
                'mp_breedable' => '0',
                'mp_allow_breed' => '0',
                'gnome_data' => '',
                'mp_is_dead' => 0,
                'saddle_item_id' => NULL,
            ),
        ));
        
        
    }
}