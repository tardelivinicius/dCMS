<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WordfilterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wordfilter')->delete();
        
        \DB::table('wordfilter')->insert(array (
            0 => 
            array (
                'key' => 'com',
                'replacement' => 'bobba',
                'hide' => '0',
                'report' => '0',
                'mute' => 0,
            ),
        ));
        
        
    }
}