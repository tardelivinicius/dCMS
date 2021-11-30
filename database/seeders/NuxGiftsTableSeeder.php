<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NuxGiftsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nux_gifts')->delete();
        
        \DB::table('nux_gifts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'item',
                'value' => 'rare_daffodil_rug',
                'image' => 'notifications/rare_daffodil_rug.png',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'item',
                'value' => 'rare_moonrug',
                'image' => 'notifications/rare_moonrug.png',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'item',
                'value' => 'sandrug',
                'image' => 'notifications/sandrug.png',
            ),
        ));
        
        
    }
}