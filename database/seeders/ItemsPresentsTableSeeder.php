<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsPresentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items_presents')->delete();
        
        
        
    }
}