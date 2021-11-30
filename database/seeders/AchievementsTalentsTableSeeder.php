<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AchievementsTalentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('achievements_talents')->delete();
        
        \DB::table('achievements_talents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'citizenship',
                'level' => 0,
                'achievement_ids' => '481',
                'achievement_levels' => '1',
                'reward_furni' => '179',
                'reward_perks' => '',
                'reward_badges' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'citizenship',
                'level' => 1,
                'achievement_ids' => '467,479,469',
                'achievement_levels' => '1,1,1',
                'reward_furni' => '179',
                'reward_perks' => '',
                'reward_badges' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'citizenship',
                'level' => 2,
                'achievement_ids' => '445',
                'achievement_levels' => '2,1',
                'reward_furni' => '179',
                'reward_perks' => 'TRADE',
                'reward_badges' => 'ACH_TraderPass1',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'citizenship',
                'level' => 3,
                'achievement_ids' => '467',
                'achievement_levels' => '1',
                'reward_furni' => '179,5003',
                'reward_perks' => 'CITIZEN',
                'reward_badges' => 'ACH_Citizenship1',
            ),
        ));
        
        
    }
}