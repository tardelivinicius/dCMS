<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pet_items')->delete();
        
        
        
    }
}