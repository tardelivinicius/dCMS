<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogClubOffersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_club_offers')->delete();
        
        \DB::table('catalog_club_offers')->insert(array (
            0 => 
            array (
                'credits' => 50,
                'days' => 31,
                'deal' => '0',
                'enabled' => '1',
                'giftable' => '0',
                'id' => 1,
                'name' => 'HABBO_CLUB_1_MONTH',
                'points' => 50,
                'points_type' => 5,
                'type' => 'VIP',
            ),
            1 => 
            array (
                'credits' => 120,
                'days' => 93,
                'deal' => '0',
                'enabled' => '1',
                'giftable' => '0',
                'id' => 2,
                'name' => 'HABBO_CLUB_3_MONTHS',
                'points' => 120,
                'points_type' => 5,
                'type' => 'VIP',
            ),
        ));
        
        
    }
}