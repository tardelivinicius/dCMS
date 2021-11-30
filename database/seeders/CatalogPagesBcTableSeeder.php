<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogPagesBcTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_pages_bc')->delete();
        
        \DB::table('catalog_pages_bc')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => -1,
                'caption' => 'Furniture',
                'page_layout' => 'default_3x3',
                'icon_color' => 1,
                'icon_image' => 1,
                'order_num' => 0,
                'visible' => '1',
                'enabled' => '1',
                'page_headline' => '',
                'page_teaser' => '',
                'page_special' => '',
                'page_text1' => NULL,
                'page_text2' => NULL,
                'page_text_details' => NULL,
                'page_text_teaser' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => -1,
                'caption' => 'Building Blocks',
                'page_layout' => 'default_3x3',
                'icon_color' => 1,
                'icon_image' => 1,
                'order_num' => 1,
                'visible' => '0',
                'enabled' => '0',
                'page_headline' => '',
                'page_teaser' => '',
                'page_special' => '',
                'page_text1' => NULL,
                'page_text2' => NULL,
                'page_text_details' => NULL,
                'page_text_teaser' => NULL,
            ),
        ));
        
        
    }
}