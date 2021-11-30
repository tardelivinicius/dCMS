<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetBreedingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_breeding')->delete();
        
        
        
    }
}