<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupportIssuePresetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('support_issue_presets')->delete();
        
        \DB::table('support_issue_presets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category' => 1,
                'name' => '1 hour mute',
                'message' => '1 hour mute',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 0,
                'mute_for' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'category' => 1,
                'name' => '2 hour mute',
                'message' => '2 hour mute',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 0,
                'mute_for' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'category' => 1,
                'name' => '1 hour ban',
                'message' => '1 hour ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 1,
                'mute_for' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'category' => 1,
                'name' => '2 hour ban',
                'message' => '2 hour ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 2,
                'mute_for' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'category' => 1,
                'name' => '1 day ban',
                'message' => '1 day ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 24,
                'mute_for' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'category' => 1,
                'name' => '7 days ban',
                'message' => '7 days ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 168,
                'mute_for' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'category' => 1,
                'name' => '1 month ban',
                'message' => '1 month ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 744,
                'mute_for' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'category' => 1,
                'name' => '2 months ban',
                'message' => '2 months ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 1488,
                'mute_for' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'category' => 1,
                'name' => '1 year ban',
                'message' => '1 year ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 8760,
                'mute_for' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'category' => 1,
                'name' => 'Perm ban',
                'message' => 'Perm ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 100000,
                'mute_for' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'category' => 2,
                'name' => '1 day ban',
                'message' => '1 day ban',
                'reminder' => 'Reminder, yeah.. no',
                'ban_for' => 24,
                'mute_for' => 0,
            ),
        ));
        
        
    }
}