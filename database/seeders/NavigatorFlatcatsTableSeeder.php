<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavigatorFlatcatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('navigator_flatcats')->delete();
        
        \DB::table('navigator_flatcats')->insert(array (
            0 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.BC}',
                'caption_save' => 'caption_save',
                'id' => 1,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
            1 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.BUILDING}',
                'caption_save' => 'caption_save_building',
                'id' => 2,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
            2 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.CHAT}',
                'caption_save' => 'caption_save_chat',
                'id' => 3,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
            3 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.FANSITE}',
                'caption_save' => 'caption_save_fansite',
                'id' => 4,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
            4 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.GAMES}',
                'caption_save' => 'caption_save_games',
                'id' => 5,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
            5 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.HELP}',
                'caption_save' => 'caption_save_help',
                'id' => 6,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
            6 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.LIFE}',
                'caption_save' => 'caption_save_life',
                'id' => 7,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
            7 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.OFFICIAL}',
                'caption_save' => 'caption_save_official',
                'id' => 8,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 7,
                'order_num' => 0,
                'public' => '1',
            ),
            8 => 
            array (
                'can_trade' => '0',
                'caption' => '${navigator.flatcategory.global.PARTY}',
                'caption_save' => 'caption_save_party',
                'id' => 9,
                'list_type' => 0,
                'max_user_count' => 100,
                'min_rank' => 1,
                'order_num' => 0,
                'public' => '0',
            ),
        ));
        
        
    }
}