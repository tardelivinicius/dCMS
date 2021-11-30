<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersBadgesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_badges')->delete();
        
        \DB::table('users_badges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'slot_id' => 0,
                'badge_code' => 'ACH_TraderPass1',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_TraderPass1',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_AllTimeHotelPresence3',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_TraderPass1',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_RespectEarned1',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_RespectGiven1',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_RegistrationDuration3',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_AllTimeHotelPresence2',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_AllTimeHotelPresence3',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_Spr1',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModChatFloodFilterSeen1',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModChatHearRangeSeen1',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModChatScrollSpeedSeen1',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModDoorModeSeen1',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 4,
                'slot_id' => 0,
                'badge_code' => 'ACH_TraderPass1',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 4,
                'slot_id' => 0,
                'badge_code' => 'ACH_AllTimeHotelPresence1',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_PetLover1',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_RoomDecoFloor2',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_RoomDecoWallpaper2',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_RegistrationDuration3',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 3,
                'slot_id' => 0,
                'badge_code' => 'ACH_AllTimeHotelPresence3',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModChatFloodFilterSeen1',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModChatHearRangeSeen1',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModChatScrollSpeedSeen1',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 2,
                'slot_id' => 0,
                'badge_code' => 'ACH_SelfModDoorModeSeen1',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 7,
                'slot_id' => 0,
                'badge_code' => 'ACH_TraderPass1',
            ),
        ));
        
        
    }
}