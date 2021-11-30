<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SanctionLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sanction_levels')->delete();
        
        \DB::table('sanction_levels')->insert(array (
            0 => 
            array (
                'level' => 1,
                'type' => 'ALERT',
                'hour_length' => 0,
                'probation_days' => 30,
            ),
            1 => 
            array (
                'level' => 2,
                'type' => 'MUTE',
                'hour_length' => 1,
                'probation_days' => 30,
            ),
            2 => 
            array (
                'level' => 3,
                'type' => 'BAN',
                'hour_length' => 18,
                'probation_days' => 30,
            ),
            3 => 
            array (
                'level' => 4,
                'type' => 'BAN',
                'hour_length' => 168,
                'probation_days' => 30,
            ),
            4 => 
            array (
                'level' => 5,
                'type' => 'BAN',
                'hour_length' => 720,
                'probation_days' => 60,
            ),
            5 => 
            array (
                'level' => 6,
                'type' => 'BAN',
                'hour_length' => 720,
                'probation_days' => 60,
            ),
            6 => 
            array (
                'level' => 7,
                'type' => 'BAN',
                'hour_length' => 876581,
                'probation_days' => 876581,
            ),
        ));
        
        
    }
}