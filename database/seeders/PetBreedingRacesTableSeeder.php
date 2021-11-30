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
                'pet_type' => 28,
                'rarity_level' => 1,
                'breed' => 1,
            ),
            1 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 1,
                'breed' => 2,
            ),
            2 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 1,
                'breed' => 3,
            ),
            3 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 1,
                'breed' => 4,
            ),
            4 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 1,
                'breed' => 5,
            ),
            5 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 1,
                'breed' => 6,
            ),
            6 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 1,
                'breed' => 7,
            ),
            7 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 2,
                'breed' => 8,
            ),
            8 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 2,
                'breed' => 9,
            ),
            9 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 2,
                'breed' => 10,
            ),
            10 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 2,
                'breed' => 11,
            ),
            11 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 2,
                'breed' => 12,
            ),
            12 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 2,
                'breed' => 13,
            ),
            13 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 3,
                'breed' => 14,
            ),
            14 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 3,
                'breed' => 15,
            ),
            15 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 3,
                'breed' => 16,
            ),
            16 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 3,
                'breed' => 17,
            ),
            17 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 4,
                'breed' => 18,
            ),
            18 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 4,
                'breed' => 19,
            ),
            19 => 
            array (
                'pet_type' => 28,
                'rarity_level' => 4,
                'breed' => 20,
            ),
        ));
        
        
    }
}