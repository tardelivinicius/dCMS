<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetCommandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_commands')->delete();
        
        \DB::table('pet_commands')->insert(array (
            0 => 
            array (
                'command_id' => 0,
                'pet_id' => 12,
            ),
            1 => 
            array (
                'command_id' => 35,
                'pet_id' => 12,
            ),
            2 => 
            array (
                'command_id' => 5,
                'pet_id' => 12,
            ),
            3 => 
            array (
                'command_id' => 3,
                'pet_id' => 12,
            ),
            4 => 
            array (
                'command_id' => 36,
                'pet_id' => 12,
            ),
            5 => 
            array (
                'command_id' => 37,
                'pet_id' => 12,
            ),
            6 => 
            array (
                'command_id' => 38,
                'pet_id' => 12,
            ),
            7 => 
            array (
                'command_id' => 2,
                'pet_id' => 12,
            ),
            8 => 
            array (
                'command_id' => 6,
                'pet_id' => 12,
            ),
            9 => 
            array (
                'command_id' => 7,
                'pet_id' => 12,
            ),
            10 => 
            array (
                'command_id' => 22,
                'pet_id' => 12,
            ),
            11 => 
            array (
                'command_id' => 8,
                'pet_id' => 12,
            ),
            12 => 
            array (
                'command_id' => 9,
                'pet_id' => 12,
            ),
            13 => 
            array (
                'command_id' => 41,
                'pet_id' => 12,
            ),
            14 => 
            array (
                'command_id' => 10,
                'pet_id' => 12,
            ),
            15 => 
            array (
                'command_id' => 11,
                'pet_id' => 12,
            ),
            16 => 
            array (
                'command_id' => 12,
                'pet_id' => 12,
            ),
            17 => 
            array (
                'command_id' => 13,
                'pet_id' => 12,
            ),
            18 => 
            array (
                'command_id' => 14,
                'pet_id' => 12,
            ),
            19 => 
            array (
                'command_id' => 15,
                'pet_id' => 12,
            ),
            20 => 
            array (
                'command_id' => 16,
                'pet_id' => 12,
            ),
            21 => 
            array (
                'command_id' => 42,
                'pet_id' => 12,
            ),
        ));
        
        
    }
}