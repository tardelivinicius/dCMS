<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ranks')->delete();
        
        \DB::table('ranks')->insert(array (
            0 => 
            array (
                'badgeid' => 'VIP',
                'id' => 1,
                'name' => 'User',
                'tab_colour' => 'red',
                'title' => 'User',
            ),
            1 => 
            array (
                'badgeid' => 'TMOD',
                'id' => 2,
                'name' => 'Trial Moderators',
                'tab_colour' => 'green',
                'title' => 'Trial Moderation Staff',
            ),
            2 => 
            array (
                'badgeid' => 'ADM',
                'id' => 3,
                'name' => 'Moderators',
                'tab_colour' => 'settings',
                'title' => 'Community Moderation Staff',
            ),
            3 => 
            array (
                'badgeid' => 'SMOD',
                'id' => 4,
                'name' => 'Senior Moderators',
                'tab_colour' => 'orange',
                'title' => 'Moderator Coordinators/Leaders',
            ),
            4 => 
            array (
                'badgeid' => 'ADM',
                'id' => 5,
                'name' => 'Administrators',
                'tab_colour' => 'pixeldarkblue',
                'title' => 'Administrative Staff',
            ),
            5 => 
            array (
                'badgeid' => 'MNGR',
                'id' => 6,
                'name' => 'Managers',
                'tab_colour' => 'green',
                'title' => 'Head Administrative Staff',
            ),
            6 => 
            array (
                'badgeid' => 'ADM',
                'id' => 7,
                'name' => 'Community Leaders',
                'tab_colour' => 'settings',
                'title' => 'Lead Administrative Staff',
            ),
            7 => 
            array (
                'badgeid' => 'DEV',
                'id' => 8,
                'name' => 'Developers',
                'tab_colour' => 'pixellightblue',
                'title' => '',
            ),
            8 => 
            array (
                'badgeid' => 'OWNR',
                'id' => 9,
                'name' => 'Owners',
                'tab_colour' => 'red',
                'title' => 'Backend Administrators/Hotel Creators',
            ),
        ));
        
        
    }
}