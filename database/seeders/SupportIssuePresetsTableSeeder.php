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
                'ban_for' => 0,
                'category' => 1,
                'id' => 1,
                'message' => '1 hour mute',
                'mute_for' => 1,
                'name' => '1 hour mute',
                'reminder' => 'Reminder, yeah.. no',
            ),
            1 => 
            array (
                'ban_for' => 0,
                'category' => 1,
                'id' => 2,
                'message' => '2 hour mute',
                'mute_for' => 2,
                'name' => '2 hour mute',
                'reminder' => 'Reminder, yeah.. no',
            ),
            2 => 
            array (
                'ban_for' => 1,
                'category' => 1,
                'id' => 3,
                'message' => '1 hour ban',
                'mute_for' => 0,
                'name' => '1 hour ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            3 => 
            array (
                'ban_for' => 2,
                'category' => 1,
                'id' => 4,
                'message' => '2 hour ban',
                'mute_for' => 0,
                'name' => '2 hour ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            4 => 
            array (
                'ban_for' => 24,
                'category' => 1,
                'id' => 5,
                'message' => '1 day ban',
                'mute_for' => 0,
                'name' => '1 day ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            5 => 
            array (
                'ban_for' => 168,
                'category' => 1,
                'id' => 6,
                'message' => '7 days ban',
                'mute_for' => 0,
                'name' => '7 days ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            6 => 
            array (
                'ban_for' => 744,
                'category' => 1,
                'id' => 7,
                'message' => '1 month ban',
                'mute_for' => 0,
                'name' => '1 month ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            7 => 
            array (
                'ban_for' => 1488,
                'category' => 1,
                'id' => 8,
                'message' => '2 months ban',
                'mute_for' => 0,
                'name' => '2 months ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            8 => 
            array (
                'ban_for' => 8760,
                'category' => 1,
                'id' => 9,
                'message' => '1 year ban',
                'mute_for' => 0,
                'name' => '1 year ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            9 => 
            array (
                'ban_for' => 100000,
                'category' => 1,
                'id' => 10,
                'message' => 'Perm ban',
                'mute_for' => 0,
                'name' => 'Perm ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
            10 => 
            array (
                'ban_for' => 24,
                'category' => 2,
                'id' => 11,
                'message' => '1 day ban',
                'mute_for' => 0,
                'name' => '1 day ban',
                'reminder' => 'Reminder, yeah.. no',
            ),
        ));
        
        
    }
}