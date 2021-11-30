<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_actions')->delete();
        
        \DB::table('pet_actions')->insert(array (
            0 => 
            array (
                'pet_type' => 39,
                'pet_name' => 'Dog',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            1 => 
            array (
                'pet_type' => 1,
                'pet_name' => 'Cat',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            2 => 
            array (
                'pet_type' => 2,
                'pet_name' => 'Crocodile',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            3 => 
            array (
                'pet_type' => 3,
                'pet_name' => 'Terrier',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            4 => 
            array (
                'pet_type' => 4,
                'pet_name' => 'Bear',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            5 => 
            array (
                'pet_type' => 5,
                'pet_name' => 'Pig',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            6 => 
            array (
                'pet_type' => 6,
                'pet_name' => 'Lion',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            7 => 
            array (
                'pet_type' => 7,
                'pet_name' => 'Rhino',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            8 => 
            array (
                'pet_type' => 8,
                'pet_name' => 'Spider',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            9 => 
            array (
                'pet_type' => 9,
                'pet_name' => 'Turtle',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            10 => 
            array (
                'pet_type' => 10,
                'pet_name' => 'Chicken',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            11 => 
            array (
                'pet_type' => 11,
                'pet_name' => 'Frog',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            12 => 
            array (
                'pet_type' => 12,
                'pet_name' => 'Dragon',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            13 => 
            array (
                'pet_type' => 13,
                'pet_name' => '',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            14 => 
            array (
                'pet_type' => 14,
                'pet_name' => 'Monkey',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            15 => 
            array (
                'pet_type' => 15,
                'pet_name' => 'Horse',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            16 => 
            array (
                'pet_type' => 16,
                'pet_name' => 'Monsterplant',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            17 => 
            array (
                'pet_type' => 17,
                'pet_name' => 'Bunny',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            18 => 
            array (
                'pet_type' => 18,
                'pet_name' => 'Evil Bunny',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            19 => 
            array (
                'pet_type' => 19,
                'pet_name' => 'Bored Bunny',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            20 => 
            array (
                'pet_type' => 20,
                'pet_name' => 'Love Bunny',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            21 => 
            array (
                'pet_type' => 21,
                'pet_name' => 'Wise Pidgeon',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            22 => 
            array (
                'pet_type' => 22,
                'pet_name' => 'Cunning Pidgeon',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            23 => 
            array (
                'pet_type' => 23,
                'pet_name' => 'Evil Monkey',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            24 => 
            array (
                'pet_type' => 24,
                'pet_name' => 'Baby Bear',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            25 => 
            array (
                'pet_type' => 25,
                'pet_name' => 'Baby Terrier',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            26 => 
            array (
                'pet_type' => 26,
                'pet_name' => 'Gnome',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            27 => 
            array (
                'pet_type' => 27,
                'pet_name' => 'Leprechaun',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            28 => 
            array (
                'pet_type' => 28,
                'pet_name' => 'Baby Cat',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            29 => 
            array (
                'pet_type' => 29,
                'pet_name' => 'Baby Dog',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            30 => 
            array (
                'pet_type' => 30,
                'pet_name' => 'Baby Pig',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            31 => 
            array (
                'pet_type' => 31,
                'pet_name' => 'Haloompa',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            32 => 
            array (
                'pet_type' => 32,
                'pet_name' => 'Fools',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '1',
            ),
            33 => 
            array (
                'pet_type' => 33,
                'pet_name' => 'Pterodactyl',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            34 => 
            array (
                'pet_type' => 34,
                'pet_name' => 'Velociraptor',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            35 => 
            array (
                'pet_type' => 35,
                'pet_name' => 'Cow',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            36 => 
            array (
                'pet_type' => 36,
                'pet_name' => '',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
            37 => 
            array (
                'pet_type' => 37,
                'pet_name' => '',
                'offspring_type' => -1,
                'happy_actions' => '',
                'tired_actions' => '',
                'random_actions' => '',
                'can_swim' => '0',
            ),
        ));
        
        
    }
}