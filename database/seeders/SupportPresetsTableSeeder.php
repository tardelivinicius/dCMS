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
                'type' => 'user',
                'preset' => 'You\'re banned.',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'user',
                'preset' => 'Other message.',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'room',
                'preset' => 'Some message',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'room',
                'preset' => 'Configurable in support_presets table.',
            ),
        ));
        
        
    }
}