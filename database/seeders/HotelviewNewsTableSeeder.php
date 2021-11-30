<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HotelviewNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hotelview_news')->delete();
        
        \DB::table('hotelview_news')->insert(array (
            0 => 
            array (
                'button_link' => 'openView/calendar',
                'button_text' => 'Open it!',
                'button_type' => 'client',
                'id' => 1,
                'image' => 'web_promo_small/spromo_h20_calrew.png',
                'text' => 'Between the 1st and 31st od July, every day you will recive a free gift from your Summer Calendar. Open yours Now!',
                'title' => 'Open Your Summer Calendar!',
            ),
        ));
        
        
    }
}