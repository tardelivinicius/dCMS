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
                'achievement_ids' => '481',
                'achievement_levels' => '1',
                'id' => 1,
                'level' => 0,
                'reward_badges' => '',
                'reward_furni' => '179',
                'reward_perks' => '',
                'type' => 'citizenship',
            ),
            1 => 
            array (
                'achievement_ids' => '467,479,469',
                'achievement_levels' => '1,1,1',
                'id' => 2,
                'level' => 1,
                'reward_badges' => '',
                'reward_furni' => '179',
                'reward_perks' => '',
                'type' => 'citizenship',
            ),
            2 => 
            array (
                'achievement_ids' => '445',
                'achievement_levels' => '2,1',
                'id' => 3,
                'level' => 2,
                'reward_badges' => 'ACH_TraderPass1',
                'reward_furni' => '179',
                'reward_perks' => 'TRADE',
                'type' => 'citizenship',
            ),
            3 => 
            array (
                'achievement_ids' => '467',
                'achievement_levels' => '1',
                'id' => 4,
                'level' => 3,
                'reward_badges' => 'ACH_Citizenship1',
                'reward_furni' => '179,5003',
                'reward_perks' => 'CITIZEN',
                'type' => 'citizenship',
            ),
        ));
        
        
    }
}