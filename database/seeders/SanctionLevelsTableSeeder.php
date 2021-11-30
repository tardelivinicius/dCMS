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
                'hour_length' => 0,
                'level' => 1,
                'probation_days' => 30,
                'type' => 'ALERT',
            ),
            1 => 
            array (
                'hour_length' => 1,
                'level' => 2,
                'probation_days' => 30,
                'type' => 'MUTE',
            ),
            2 => 
            array (
                'hour_length' => 18,
                'level' => 3,
                'probation_days' => 30,
                'type' => 'BAN',
            ),
            3 => 
            array (
                'hour_length' => 168,
                'level' => 4,
                'probation_days' => 30,
                'type' => 'BAN',
            ),
            4 => 
            array (
                'hour_length' => 720,
                'level' => 5,
                'probation_days' => 60,
                'type' => 'BAN',
            ),
            5 => 
            array (
                'hour_length' => 720,
                'level' => 6,
                'probation_days' => 60,
                'type' => 'BAN',
            ),
            6 => 
            array (
                'hour_length' => 876581,
                'level' => 7,
                'probation_days' => 876581,
                'type' => 'BAN',
            ),
        ));
        
        
    }
}