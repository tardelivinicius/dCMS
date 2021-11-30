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
                'caption' => 'Classic Public Furni!',
                'expire_timestamp' => -1,
                'image' => 'catalogue/feature_cata/feature_cata_hort_classicbb_bundle.png',
                'page_id' => 361,
                'page_name' => 'battleball',
                'product_name' => '',
                'slot_id' => 1,
                'type' => 'page_name',
            ),
            1 => 
            array (
                'caption' => 'Enchanted Winter Forest',
                'expire_timestamp' => -1,
                'image' => 'catalogue/feature_cata/feature_cata_vert_xmas20_newfurni.png',
                'page_id' => 1224,
                'page_name' => 'winter_forest',
                'product_name' => '',
                'slot_id' => 4,
                'type' => 'page_name',
            ),
            2 => 
            array (
                'caption' => 'NEW Clothing!',
                'expire_timestamp' => -1,
                'image' => 'catalogue/feature_cata/feature_cata_hort_clothes.png',
                'page_id' => 589,
                'page_name' => 'new_additions',
                'product_name' => '',
                'slot_id' => 3,
                'type' => 'page_name',
            ),
            3 => 
            array (
                'caption' => 'Builders Club Blocks!',
                'expire_timestamp' => -1,
                'image' => 'catalogue/feature_cata/bc_feature.png',
                'page_id' => 117,
                'page_name' => 'alphabet_blocks',
                'product_name' => '',
                'slot_id' => 2,
                'type' => 'page_name',
            ),
        ));
        
        
    }
}