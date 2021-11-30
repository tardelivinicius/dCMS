<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UotwTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('uotw')->delete();
        
        \DB::table('uotw')->insert(array (
            0 => 
            array (
                'userid' => '1',
                'text' => 'I love Brain',
            ),
        ));
        
        
    }
}