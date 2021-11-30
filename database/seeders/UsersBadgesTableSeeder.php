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
                'badge_code' => 'ACH_TraderPass1',
                'id' => 1,
                'slot_id' => 0,
                'user_id' => 1,
            ),
            1 => 
            array (
                'badge_code' => 'ACH_TraderPass1',
                'id' => 2,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            2 => 
            array (
                'badge_code' => 'ACH_AllTimeHotelPresence3',
                'id' => 3,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            3 => 
            array (
                'badge_code' => 'ACH_TraderPass1',
                'id' => 4,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            4 => 
            array (
                'badge_code' => 'ACH_RespectEarned1',
                'id' => 5,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            5 => 
            array (
                'badge_code' => 'ACH_RespectGiven1',
                'id' => 6,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            6 => 
            array (
                'badge_code' => 'ACH_RegistrationDuration3',
                'id' => 7,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            7 => 
            array (
                'badge_code' => 'ACH_AllTimeHotelPresence2',
                'id' => 8,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            8 => 
            array (
                'badge_code' => 'ACH_AllTimeHotelPresence3',
                'id' => 9,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            9 => 
            array (
                'badge_code' => 'ACH_Spr1',
                'id' => 10,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            10 => 
            array (
                'badge_code' => 'ACH_SelfModChatFloodFilterSeen1',
                'id' => 11,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            11 => 
            array (
                'badge_code' => 'ACH_SelfModChatHearRangeSeen1',
                'id' => 12,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            12 => 
            array (
                'badge_code' => 'ACH_SelfModChatScrollSpeedSeen1',
                'id' => 13,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            13 => 
            array (
                'badge_code' => 'ACH_SelfModDoorModeSeen1',
                'id' => 14,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            14 => 
            array (
                'badge_code' => 'ACH_TraderPass1',
                'id' => 15,
                'slot_id' => 0,
                'user_id' => 4,
            ),
            15 => 
            array (
                'badge_code' => 'ACH_AllTimeHotelPresence1',
                'id' => 16,
                'slot_id' => 0,
                'user_id' => 4,
            ),
            16 => 
            array (
                'badge_code' => 'ACH_PetLover1',
                'id' => 17,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            17 => 
            array (
                'badge_code' => 'ACH_RoomDecoFloor2',
                'id' => 18,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            18 => 
            array (
                'badge_code' => 'ACH_RoomDecoWallpaper2',
                'id' => 19,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            19 => 
            array (
                'badge_code' => 'ACH_RegistrationDuration3',
                'id' => 20,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            20 => 
            array (
                'badge_code' => 'ACH_AllTimeHotelPresence3',
                'id' => 21,
                'slot_id' => 0,
                'user_id' => 3,
            ),
            21 => 
            array (
                'badge_code' => 'ACH_SelfModChatFloodFilterSeen1',
                'id' => 22,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            22 => 
            array (
                'badge_code' => 'ACH_SelfModChatHearRangeSeen1',
                'id' => 23,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            23 => 
            array (
                'badge_code' => 'ACH_SelfModChatScrollSpeedSeen1',
                'id' => 24,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            24 => 
            array (
                'badge_code' => 'ACH_SelfModDoorModeSeen1',
                'id' => 25,
                'slot_id' => 0,
                'user_id' => 2,
            ),
            25 => 
            array (
                'badge_code' => 'ACH_TraderPass1',
                'id' => 26,
                'slot_id' => 0,
                'user_id' => 7,
            ),
            26 => 
            array (
                'badge_code' => 'ACH_SelfModChatFloodFilterSeen1',
                'id' => 27,
                'slot_id' => 0,
                'user_id' => 7,
            ),
            27 => 
            array (
                'badge_code' => 'ACH_SelfModChatHearRangeSeen1',
                'id' => 28,
                'slot_id' => 0,
                'user_id' => 7,
            ),
            28 => 
            array (
                'badge_code' => 'ACH_SelfModChatScrollSpeedSeen1',
                'id' => 29,
                'slot_id' => 0,
                'user_id' => 7,
            ),
            29 => 
            array (
                'badge_code' => 'ACH_SelfModDoorModeSeen1',
                'id' => 30,
                'slot_id' => 0,
                'user_id' => 7,
            ),
        ));
        
        
    }
}