<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BotsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bots')->delete();
        
        \DB::table('bots')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'room_id' => 0,
                'name' => 'Bitch',
                'motto' => 'Visitor Counter',
                'figure' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'gender' => 'M',
                'x' => 0,
                'y' => 0,
                'z' => 0.0,
                'rot' => 0,
                'chat_lines' => '',
                'chat_auto' => '1',
                'chat_random' => '1',
                'chat_delay' => 5,
                'dance' => 0,
                'freeroam' => '1',
                'type' => 'visitor_log',
                'effect' => 0,
                'bubble_id' => 31,
            ),
        ));
        
        
    }
}