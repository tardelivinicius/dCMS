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
                'id' => 1,
                'min_rank' => 1,
                'caption_save' => 'caption_save',
                'caption' => '${navigator.flatcategory.global.BC}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'min_rank' => 1,
                'caption_save' => 'caption_save_building',
                'caption' => '${navigator.flatcategory.global.BUILDING}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'min_rank' => 1,
                'caption_save' => 'caption_save_chat',
                'caption' => '${navigator.flatcategory.global.CHAT}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'min_rank' => 1,
                'caption_save' => 'caption_save_fansite',
                'caption' => '${navigator.flatcategory.global.FANSITE}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'min_rank' => 1,
                'caption_save' => 'caption_save_games',
                'caption' => '${navigator.flatcategory.global.GAMES}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'min_rank' => 1,
                'caption_save' => 'caption_save_help',
                'caption' => '${navigator.flatcategory.global.HELP}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'min_rank' => 1,
                'caption_save' => 'caption_save_life',
                'caption' => '${navigator.flatcategory.global.LIFE}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'min_rank' => 7,
                'caption_save' => 'caption_save_official',
                'caption' => '${navigator.flatcategory.global.OFFICIAL}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '1',
                'list_type' => 0,
                'order_num' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'min_rank' => 1,
                'caption_save' => 'caption_save_party',
                'caption' => '${navigator.flatcategory.global.PARTY}',
                'can_trade' => '0',
                'max_user_count' => 100,
                'public' => '0',
                'list_type' => 0,
                'order_num' => 0,
            ),
        ));
        
        
    }
}