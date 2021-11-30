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
                'id' => 1,
                'name' => 'User',
                'badgeid' => 'VIP',
                'title' => 'User',
                'tab_colour' => 'red',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Trial Moderators',
                'badgeid' => 'TMOD',
                'title' => 'Trial Moderation Staff',
                'tab_colour' => 'green',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Moderators',
                'badgeid' => 'ADM',
                'title' => 'Community Moderation Staff',
                'tab_colour' => 'settings',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Senior Moderators',
                'badgeid' => 'SMOD',
                'title' => 'Moderator Coordinators/Leaders',
                'tab_colour' => 'orange',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Administrators',
                'badgeid' => 'ADM',
                'title' => 'Administrative Staff',
                'tab_colour' => 'pixeldarkblue',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Managers',
                'badgeid' => 'MNGR',
                'title' => 'Head Administrative Staff',
                'tab_colour' => 'green',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Community Leaders',
                'badgeid' => 'ADM',
                'title' => 'Lead Administrative Staff',
                'tab_colour' => 'settings',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Developers',
                'badgeid' => 'DEV',
                'title' => '',
                'tab_colour' => 'pixellightblue',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Owners',
                'badgeid' => 'OWNR',
                'title' => 'Backend Administrators/Hotel Creators',
                'tab_colour' => 'red',
            ),
        ));
        
        
    }
}