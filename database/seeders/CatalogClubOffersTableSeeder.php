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
                'id' => 1,
                'enabled' => '1',
                'name' => 'HABBO_CLUB_1_MONTH',
                'days' => 31,
                'credits' => 50,
                'points' => 50,
                'points_type' => 5,
                'type' => 'VIP',
                'deal' => '0',
                'giftable' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'enabled' => '1',
                'name' => 'HABBO_CLUB_3_MONTHS',
                'days' => 93,
                'credits' => 120,
                'points' => 120,
                'points_type' => 5,
                'type' => 'VIP',
                'deal' => '0',
                'giftable' => '0',
            ),
        ));
        
        
    }
}