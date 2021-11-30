<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogItemsLimitedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_items_limited')->delete();
        
        
        
    }
}