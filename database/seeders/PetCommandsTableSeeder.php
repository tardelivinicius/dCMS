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
                'pet_id' => 12,
                'command_id' => 0,
            ),
            1 => 
            array (
                'pet_id' => 12,
                'command_id' => 35,
            ),
            2 => 
            array (
                'pet_id' => 12,
                'command_id' => 5,
            ),
            3 => 
            array (
                'pet_id' => 12,
                'command_id' => 3,
            ),
            4 => 
            array (
                'pet_id' => 12,
                'command_id' => 36,
            ),
            5 => 
            array (
                'pet_id' => 12,
                'command_id' => 37,
            ),
            6 => 
            array (
                'pet_id' => 12,
                'command_id' => 38,
            ),
            7 => 
            array (
                'pet_id' => 12,
                'command_id' => 2,
            ),
            8 => 
            array (
                'pet_id' => 12,
                'command_id' => 6,
            ),
            9 => 
            array (
                'pet_id' => 12,
                'command_id' => 7,
            ),
            10 => 
            array (
                'pet_id' => 12,
                'command_id' => 22,
            ),
            11 => 
            array (
                'pet_id' => 12,
                'command_id' => 8,
            ),
            12 => 
            array (
                'pet_id' => 12,
                'command_id' => 9,
            ),
            13 => 
            array (
                'pet_id' => 12,
                'command_id' => 41,
            ),
            14 => 
            array (
                'pet_id' => 12,
                'command_id' => 10,
            ),
            15 => 
            array (
                'pet_id' => 12,
                'command_id' => 11,
            ),
            16 => 
            array (
                'pet_id' => 12,
                'command_id' => 12,
            ),
            17 => 
            array (
                'pet_id' => 12,
                'command_id' => 13,
            ),
            18 => 
            array (
                'pet_id' => 12,
                'command_id' => 14,
            ),
            19 => 
            array (
                'pet_id' => 12,
                'command_id' => 15,
            ),
            20 => 
            array (
                'pet_id' => 12,
                'command_id' => 16,
            ),
            21 => 
            array (
                'pet_id' => 12,
                'command_id' => 42,
            ),
        ));
        
        
    }
}