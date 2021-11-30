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
                'badgeid' => 'SPAM',
                'id' => 1,
                'name' => 'Spam Team',
            ),
            1 => 
            array (
                'badgeid' => 'BOUW',
                'id' => 3,
                'name' => 'Bouw Team',
            ),
            2 => 
            array (
                'badgeid' => 'EVENT',
                'id' => 4,
                'name' => 'Event Team',
            ),
            3 => 
            array (
                'badgeid' => 'PIXEL',
                'id' => 5,
                'name' => 'Pixelaar',
            ),
            4 => 
            array (
                'badgeid' => 'GOK',
                'id' => 6,
                'name' => 'Gok Team',
            ),
        ));
        
        
    }
}