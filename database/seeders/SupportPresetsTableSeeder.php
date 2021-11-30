<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupportPresetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('support_presets')->delete();
        
        \DB::table('support_presets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'preset' => 'You\'re banned.',
                'type' => 'user',
            ),
            1 => 
            array (
                'id' => 2,
                'preset' => 'Other message.',
                'type' => 'user',
            ),
            2 => 
            array (
                'id' => 3,
                'preset' => 'Some message',
                'type' => 'room',
            ),
            3 => 
            array (
                'id' => 4,
                'preset' => 'Configurable in support_presets table.',
                'type' => 'room',
            ),
        ));
        
        
    }
}