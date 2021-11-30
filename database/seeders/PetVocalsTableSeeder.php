<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetVocalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_vocals')->delete();
        
        \DB::table('pet_vocals')->insert(array (
            0 => 
            array (
                'message' => 'Yay, lets play!',
                'pet_id' => 0,
                'type' => 'GENERIC_HAPPY',
            ),
            1 => 
            array (
                'message' => '*Whistles*',
                'pet_id' => 0,
                'type' => 'GENERIC_HAPPY',
            ),
            2 => 
            array (
                'message' => 'Nope, ain\'t gonna do that for you.',
                'pet_id' => 0,
                'type' => 'DISOBEY',
            ),
            3 => 
            array (
                'message' => 'Who do you think I am?',
                'pet_id' => 0,
                'type' => 'DISOBEY',
            ),
            4 => 
            array (
                'message' => 'That ain\'t gonna happen mate.',
                'pet_id' => 0,
                'type' => 'DISOBEY',
            ),
        ));
        
        
    }
}