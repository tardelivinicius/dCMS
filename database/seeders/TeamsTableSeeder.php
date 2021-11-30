<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Spam Team',
                'badgeid' => 'SPAM',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Bouw Team',
                'badgeid' => 'BOUW',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Event Team',
                'badgeid' => 'EVENT',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Pixelaar',
                'badgeid' => 'PIXEL',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Gok Team',
                'badgeid' => 'GOK',
            ),
        ));
        
        
    }
}