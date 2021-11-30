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
                'image' => 'notifications/rare_daffodil_rug.png',
                'type' => 'item',
                'value' => 'rare_daffodil_rug',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'notifications/rare_moonrug.png',
                'type' => 'item',
                'value' => 'rare_moonrug',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'notifications/sandrug.png',
                'type' => 'item',
                'value' => 'sandrug',
            ),
        ));
        
        
    }
}