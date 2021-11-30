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
                'item_id' => 187,
                'sprite_id' => 187,
                'type' => 'gift',
            ),
            1 => 
            array (
                'id' => 2,
                'item_id' => 188,
                'sprite_id' => 188,
                'type' => 'gift',
            ),
            2 => 
            array (
                'id' => 3,
                'item_id' => 189,
                'sprite_id' => 189,
                'type' => 'gift',
            ),
            3 => 
            array (
                'id' => 4,
                'item_id' => 190,
                'sprite_id' => 190,
                'type' => 'gift',
            ),
            4 => 
            array (
                'id' => 5,
                'item_id' => 191,
                'sprite_id' => 191,
                'type' => 'gift',
            ),
            5 => 
            array (
                'id' => 6,
                'item_id' => 192,
                'sprite_id' => 192,
                'type' => 'gift',
            ),
            6 => 
            array (
                'id' => 7,
                'item_id' => 193,
                'sprite_id' => 193,
                'type' => 'gift',
            ),
            7 => 
            array (
                'id' => 8,
                'item_id' => 3372,
                'sprite_id' => 3372,
                'type' => 'wrapper',
            ),
            8 => 
            array (
                'id' => 9,
                'item_id' => 3373,
                'sprite_id' => 3373,
                'type' => 'wrapper',
            ),
            9 => 
            array (
                'id' => 10,
                'item_id' => 3374,
                'sprite_id' => 3374,
                'type' => 'wrapper',
            ),
            10 => 
            array (
                'id' => 11,
                'item_id' => 3375,
                'sprite_id' => 3375,
                'type' => 'wrapper',
            ),
            11 => 
            array (
                'id' => 12,
                'item_id' => 3376,
                'sprite_id' => 3376,
                'type' => 'wrapper',
            ),
            12 => 
            array (
                'id' => 13,
                'item_id' => 3377,
                'sprite_id' => 3377,
                'type' => 'wrapper',
            ),
            13 => 
            array (
                'id' => 14,
                'item_id' => 3378,
                'sprite_id' => 3378,
                'type' => 'wrapper',
            ),
            14 => 
            array (
                'id' => 15,
                'item_id' => 3379,
                'sprite_id' => 3379,
                'type' => 'wrapper',
            ),
            15 => 
            array (
                'id' => 16,
                'item_id' => 3380,
                'sprite_id' => 3380,
                'type' => 'wrapper',
            ),
            16 => 
            array (
                'id' => 17,
                'item_id' => 3381,
                'sprite_id' => 3381,
                'type' => 'wrapper',
            ),
        ));
        
        
    }
}