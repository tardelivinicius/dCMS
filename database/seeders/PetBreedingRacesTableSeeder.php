<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetBreedingRacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_breeding_races')->delete();
        
        \DB::table('pet_breeding_races')->insert(array (
            0 => 
            array (
                'breed' => 1,
                'pet_type' => 28,
                'rarity_level' => 1,
            ),
            1 => 
            array (
                'breed' => 2,
                'pet_type' => 28,
                'rarity_level' => 1,
            ),
            2 => 
            array (
                'breed' => 3,
                'pet_type' => 28,
                'rarity_level' => 1,
            ),
            3 => 
            array (
                'breed' => 4,
                'pet_type' => 28,
                'rarity_level' => 1,
            ),
            4 => 
            array (
                'breed' => 5,
                'pet_type' => 28,
                'rarity_level' => 1,
            ),
            5 => 
            array (
                'breed' => 6,
                'pet_type' => 28,
                'rarity_level' => 1,
            ),
            6 => 
            array (
                'breed' => 7,
                'pet_type' => 28,
                'rarity_level' => 1,
            ),
            7 => 
            array (
                'breed' => 8,
                'pet_type' => 28,
                'rarity_level' => 2,
            ),
            8 => 
            array (
                'breed' => 9,
                'pet_type' => 28,
                'rarity_level' => 2,
            ),
            9 => 
            array (
                'breed' => 10,
                'pet_type' => 28,
                'rarity_level' => 2,
            ),
            10 => 
            array (
                'breed' => 11,
                'pet_type' => 28,
                'rarity_level' => 2,
            ),
            11 => 
            array (
                'breed' => 12,
                'pet_type' => 28,
                'rarity_level' => 2,
            ),
            12 => 
            array (
                'breed' => 13,
                'pet_type' => 28,
                'rarity_level' => 2,
            ),
            13 => 
            array (
                'breed' => 14,
                'pet_type' => 28,
                'rarity_level' => 3,
            ),
            14 => 
            array (
                'breed' => 15,
                'pet_type' => 28,
                'rarity_level' => 3,
            ),
            15 => 
            array (
                'breed' => 16,
                'pet_type' => 28,
                'rarity_level' => 3,
            ),
            16 => 
            array (
                'breed' => 17,
                'pet_type' => 28,
                'rarity_level' => 3,
            ),
            17 => 
            array (
                'breed' => 18,
                'pet_type' => 28,
                'rarity_level' => 4,
            ),
            18 => 
            array (
                'breed' => 19,
                'pet_type' => 28,
                'rarity_level' => 4,
            ),
            19 => 
            array (
                'breed' => 20,
                'pet_type' => 28,
                'rarity_level' => 4,
            ),
        ));
        
        
    }
}