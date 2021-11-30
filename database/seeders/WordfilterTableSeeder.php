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
                'hide' => '0',
                'key' => 'com',
                'mute' => 0,
                'replacement' => 'bobba',
                'report' => '0',
            ),
        ));
        
        
    }
}