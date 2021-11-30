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
                'image' => '0',
                'name' => 'Staff Picks',
                'order_num' => 0,
                'visible' => '1',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '0',
                'name' => 'Official Games',
                'order_num' => 0,
                'visible' => '1',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '0',
                'name' => 'Official Fansites',
                'order_num' => 0,
                'visible' => '1',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '0',
                'name' => 'BAW: Builders at Work',
                'order_num' => 0,
                'visible' => '1',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '0',
                'name' => 'Room Bundles',
                'order_num' => 0,
                'visible' => '1',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => '0',
                'name' => 'Safety',
                'order_num' => 0,
                'visible' => '1',
            ),
        ));
        
        
    }
}