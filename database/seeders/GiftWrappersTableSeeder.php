<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GiftWrappersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gift_wrappers')->delete();
        
        \DB::table('gift_wrappers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sprite_id' => 187,
                'item_id' => 187,
                'type' => 'gift',
            ),
            1 => 
            array (
                'id' => 2,
                'sprite_id' => 188,
                'item_id' => 188,
                'type' => 'gift',
            ),
            2 => 
            array (
                'id' => 3,
                'sprite_id' => 189,
                'item_id' => 189,
                'type' => 'gift',
            ),
            3 => 
            array (
                'id' => 4,
                'sprite_id' => 190,
                'item_id' => 190,
                'type' => 'gift',
            ),
            4 => 
            array (
                'id' => 5,
                'sprite_id' => 191,
                'item_id' => 191,
                'type' => 'gift',
            ),
            5 => 
            array (
                'id' => 6,
                'sprite_id' => 192,
                'item_id' => 192,
                'type' => 'gift',
            ),
            6 => 
            array (
                'id' => 7,
                'sprite_id' => 193,
                'item_id' => 193,
                'type' => 'gift',
            ),
            7 => 
            array (
                'id' => 8,
                'sprite_id' => 3372,
                'item_id' => 3372,
                'type' => 'wrapper',
            ),
            8 => 
            array (
                'id' => 9,
                'sprite_id' => 3373,
                'item_id' => 3373,
                'type' => 'wrapper',
            ),
            9 => 
            array (
                'id' => 10,
                'sprite_id' => 3374,
                'item_id' => 3374,
                'type' => 'wrapper',
            ),
            10 => 
            array (
                'id' => 11,
                'sprite_id' => 3375,
                'item_id' => 3375,
                'type' => 'wrapper',
            ),
            11 => 
            array (
                'id' => 12,
                'sprite_id' => 3376,
                'item_id' => 3376,
                'type' => 'wrapper',
            ),
            12 => 
            array (
                'id' => 13,
                'sprite_id' => 3377,
                'item_id' => 3377,
                'type' => 'wrapper',
            ),
            13 => 
            array (
                'id' => 14,
                'sprite_id' => 3378,
                'item_id' => 3378,
                'type' => 'wrapper',
            ),
            14 => 
            array (
                'id' => 15,
                'sprite_id' => 3379,
                'item_id' => 3379,
                'type' => 'wrapper',
            ),
            15 => 
            array (
                'id' => 16,
                'sprite_id' => 3380,
                'item_id' => 3380,
                'type' => 'wrapper',
            ),
            16 => 
            array (
                'id' => 17,
                'sprite_id' => 3381,
                'item_id' => 3381,
                'type' => 'wrapper',
            ),
        ));
        
        
    }
}