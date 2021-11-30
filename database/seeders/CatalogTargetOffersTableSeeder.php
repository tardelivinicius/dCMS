<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogTargetOffersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_target_offers')->delete();
        
        \DB::table('catalog_target_offers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'offer_code' => '10500',
                'title' => 'Machines Offer One!',
                'description' => '<a href="event:habbopages/7machines1tto20">Click here</a> to see a list of all items included in this deal.',
                'image' => 'targetedoffers/ufo_habbo20_mach1.png',
                'icon' => 'targetedoffers/tto_blkfri_20_small.png',
                'end_timestamp' => 1598745600,
                'credits' => 189,
                'points' => 189,
                'points_type' => 5,
                'purchase_limit' => 1,
                'catalog_item' => 20500,
                'vars' => '',
            ),
        ));
        
        
    }
}