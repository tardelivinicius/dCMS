<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetFoodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_foods')->delete();
        
        
        
    }
}