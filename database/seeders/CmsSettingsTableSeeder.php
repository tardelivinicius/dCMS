<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_settings')->delete();
        
        \DB::table('cms_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hotel_name' => 'Habbo',
                'hotel_url' => '',
                'hotel_maintenance' => 0,
                'hotel_register_enable' => 1,
                'client_allow' => 0,
                'client_notify' => 1,
                'connection_info' => NULL,
                'external_variables' => NULL,
                'external_texts' => NULL,
                'external_figurepartlist' => NULL,
                'flash_dynamic' => NULL,
                'productdata_load' => NULL,
                'furnidata_load' => NULL,
                'use_sso' => 1,
                'processlog_enabled' => 1,
                'client_starting' => '1',
                'flash_client' => '1',
                'ads_domain' => '1',
                'diamonds_enabled' => 1,
            ),
        ));
        
        
    }
}