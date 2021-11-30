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
                'pet_id' => 0,
                'type' => 'GENERIC_HAPPY',
                'message' => 'Yay, lets play!',
            ),
            1 => 
            array (
                'pet_id' => 0,
                'type' => 'GENERIC_HAPPY',
                'message' => '*Whistles*',
            ),
            2 => 
            array (
                'pet_id' => 0,
                'type' => 'DISOBEY',
                'message' => 'Nope, ain\'t gonna do that for you.',
            ),
            3 => 
            array (
                'pet_id' => 0,
                'type' => 'DISOBEY',
                'message' => 'Who do you think I am?',
            ),
            4 => 
            array (
                'pet_id' => 0,
                'type' => 'DISOBEY',
                'message' => 'That ain\'t gonna happen mate.',
            ),
        ));
        
        
    }
}