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
                'height' => 535,
                'open_searches' => '0',
                'user_id' => 1,
                'width' => 425,
                'x' => 100,
                'y' => 100,
            ),
            1 => 
            array (
                'height' => 535,
                'open_searches' => '0',
                'user_id' => 2,
                'width' => 425,
                'x' => 100,
                'y' => 100,
            ),
            2 => 
            array (
                'height' => 535,
                'open_searches' => '0',
                'user_id' => 3,
                'width' => 425,
                'x' => 100,
                'y' => 0,
            ),
            3 => 
            array (
                'height' => 535,
                'open_searches' => '0',
                'user_id' => 4,
                'width' => 425,
                'x' => 100,
                'y' => 100,
            ),
            4 => 
            array (
                'height' => 535,
                'open_searches' => '0',
                'user_id' => 7,
                'width' => 425,
                'x' => 100,
                'y' => 100,
            ),
        ));
        
        
    }
}