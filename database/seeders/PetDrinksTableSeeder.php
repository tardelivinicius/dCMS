<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetDrinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_drinks')->delete();
        
        
        
    }
}