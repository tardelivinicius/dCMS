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
                'bubble_id' => 31,
                'chat_auto' => '1',
                'chat_delay' => 5,
                'chat_lines' => '',
                'chat_random' => '1',
                'dance' => 0,
                'effect' => 0,
                'figure' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'freeroam' => '1',
                'gender' => 'M',
                'id' => 1,
                'motto' => 'Visitor Counter',
                'name' => 'Bitch',
                'room_id' => 0,
                'rot' => 0,
                'type' => 'visitor_log',
                'user_id' => 2,
                'x' => 0,
                'y' => 0,
                'z' => 0.0,
            ),
        ));
        
        
    }
}