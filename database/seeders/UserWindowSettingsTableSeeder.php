<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserWindowSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_window_settings')->delete();
        
        \DB::table('user_window_settings')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'x' => 100,
                'y' => 100,
                'width' => 425,
                'height' => 535,
                'open_searches' => '0',
            ),
            1 => 
            array (
                'user_id' => 2,
                'x' => 100,
                'y' => 100,
                'width' => 425,
                'height' => 535,
                'open_searches' => '0',
            ),
            2 => 
            array (
                'user_id' => 3,
                'x' => 100,
                'y' => 0,
                'width' => 425,
                'height' => 535,
                'open_searches' => '0',
            ),
            3 => 
            array (
                'user_id' => 4,
                'x' => 100,
                'y' => 100,
                'width' => 425,
                'height' => 535,
                'open_searches' => '0',
            ),
            4 => 
            array (
                'user_id' => 7,
                'x' => 100,
                'y' => 100,
                'width' => 425,
                'height' => 535,
                'open_searches' => '0',
            ),
        ));
        
        
    }
}