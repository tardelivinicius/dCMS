<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavigatorPubliccatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('navigator_publiccats')->delete();
        
        \DB::table('navigator_publiccats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Staff Picks',
                'image' => '0',
                'visible' => '1',
                'order_num' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Official Games',
                'image' => '0',
                'visible' => '1',
                'order_num' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Official Fansites',
                'image' => '0',
                'visible' => '1',
                'order_num' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BAW: Builders at Work',
                'image' => '0',
                'visible' => '1',
                'order_num' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Room Bundles',
                'image' => '0',
                'visible' => '1',
                'order_num' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Safety',
                'image' => '0',
                'visible' => '1',
                'order_num' => 0,
            ),
        ));
        
        
    }
}