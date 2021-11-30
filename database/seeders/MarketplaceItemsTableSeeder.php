<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarketplaceItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marketplace_items')->delete();
        
        
        
    }
}