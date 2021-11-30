<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogFeaturedPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_featured_pages')->delete();
        
        \DB::table('catalog_featured_pages')->insert(array (
            0 => 
            array (
                'slot_id' => 1,
                'image' => 'catalogue/feature_cata/feature_cata_hort_classicbb_bundle.png',
                'caption' => 'Classic Public Furni!',
                'type' => 'page_name',
                'expire_timestamp' => -1,
                'page_name' => 'battleball',
                'page_id' => 361,
                'product_name' => '',
            ),
            1 => 
            array (
                'slot_id' => 4,
                'image' => 'catalogue/feature_cata/feature_cata_vert_xmas20_newfurni.png',
                'caption' => 'Enchanted Winter Forest',
                'type' => 'page_name',
                'expire_timestamp' => -1,
                'page_name' => 'winter_forest',
                'page_id' => 1224,
                'product_name' => '',
            ),
            2 => 
            array (
                'slot_id' => 3,
                'image' => 'catalogue/feature_cata/feature_cata_hort_clothes.png',
                'caption' => 'NEW Clothing!',
                'type' => 'page_name',
                'expire_timestamp' => -1,
                'page_name' => 'new_additions',
                'page_id' => 589,
                'product_name' => '',
            ),
            3 => 
            array (
                'slot_id' => 2,
                'image' => 'catalogue/feature_cata/bc_feature.png',
                'caption' => 'Builders Club Blocks!',
                'type' => 'page_name',
                'expire_timestamp' => -1,
                'page_name' => 'alphabet_blocks',
                'page_id' => 117,
                'product_name' => '',
            ),
        ));
        
        
    }
}