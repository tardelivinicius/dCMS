<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersAchievementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_achievements')->delete();
        
        \DB::table('users_achievements')->insert(array (
            0 => 
            array (
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'achievement_name' => 'RegistrationDuration',
                'progress' => 1,
                'user_id' => 1,
            ),
            2 => 
            array (
                'achievement_name' => 'TraderPass',
                'progress' => 1,
                'user_id' => 1,
            ),
            3 => 
            array (
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
                'user_id' => 2,
            ),
            4 => 
            array (
                'achievement_name' => 'RegistrationDuration',
                'progress' => 11,
                'user_id' => 2,
            ),
            5 => 
            array (
                'achievement_name' => 'TraderPass',
                'progress' => 1,
                'user_id' => 2,
            ),
            6 => 
            array (
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 106,
                'user_id' => 2,
            ),
            7 => 
            array (
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
                'user_id' => 3,
            ),
            8 => 
            array (
                'achievement_name' => 'RegistrationDuration',
                'progress' => 11,
                'user_id' => 3,
            ),
            9 => 
            array (
                'achievement_name' => 'TraderPass',
                'progress' => 1,
                'user_id' => 3,
            ),
            10 => 
            array (
                'achievement_name' => 'RespectGiven',
                'progress' => 3,
                'user_id' => 3,
            ),
            11 => 
            array (
                'achievement_name' => 'RespectEarned',
                'progress' => 1,
                'user_id' => 2,
            ),
            12 => 
            array (
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 372,
                'user_id' => 3,
            ),
            13 => 
            array (
                'achievement_name' => 'RoomDecoFurniCount',
                'progress' => 1,
                'user_id' => 2,
            ),
            14 => 
            array (
                'achievement_name' => 'RoomDecoFurniCount',
                'progress' => 55,
                'user_id' => 3,
            ),
            15 => 
            array (
                'achievement_name' => 'Spr',
                'progress' => 1,
                'user_id' => 3,
            ),
            16 => 
            array (
                'achievement_name' => 'SelfModChatFloodFilterSeen',
                'progress' => 1,
                'user_id' => 3,
            ),
            17 => 
            array (
                'achievement_name' => 'SelfModChatHearRangeSeen',
                'progress' => 1,
                'user_id' => 3,
            ),
            18 => 
            array (
                'achievement_name' => 'SelfModChatScrollSpeedSeen',
                'progress' => 1,
                'user_id' => 3,
            ),
            19 => 
            array (
                'achievement_name' => 'SelfModDoorModeSeen',
                'progress' => 1,
                'user_id' => 3,
            ),
            20 => 
            array (
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
                'user_id' => 4,
            ),
            21 => 
            array (
                'achievement_name' => 'RegistrationDuration',
                'progress' => 0,
                'user_id' => 4,
            ),
            22 => 
            array (
                'achievement_name' => 'TraderPass',
                'progress' => 1,
                'user_id' => 4,
            ),
            23 => 
            array (
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 37,
                'user_id' => 4,
            ),
            24 => 
            array (
                'achievement_name' => 'PetLover',
                'progress' => 1,
                'user_id' => 3,
            ),
            25 => 
            array (
                'achievement_name' => 'RoomDecoWallpaper',
                'progress' => 5,
                'user_id' => 3,
            ),
            26 => 
            array (
                'achievement_name' => 'RoomDecoFloor',
                'progress' => 6,
                'user_id' => 3,
            ),
            27 => 
            array (
                'achievement_name' => 'RoomDecoLandscape',
                'progress' => 1,
                'user_id' => 3,
            ),
            28 => 
            array (
                'achievement_name' => 'SelfModChatFloodFilterSeen',
                'progress' => 1,
                'user_id' => 2,
            ),
            29 => 
            array (
                'achievement_name' => 'SelfModChatHearRangeSeen',
                'progress' => 1,
                'user_id' => 2,
            ),
            30 => 
            array (
                'achievement_name' => 'SelfModChatScrollSpeedSeen',
                'progress' => 1,
                'user_id' => 2,
            ),
            31 => 
            array (
                'achievement_name' => 'SelfModDoorModeSeen',
                'progress' => 1,
                'user_id' => 2,
            ),
            32 => 
            array (
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
                'user_id' => 7,
            ),
            33 => 
            array (
                'achievement_name' => 'RegistrationDuration',
                'progress' => 0,
                'user_id' => 7,
            ),
            34 => 
            array (
                'achievement_name' => 'TraderPass',
                'progress' => 1,
                'user_id' => 7,
            ),
            35 => 
            array (
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 16,
                'user_id' => 7,
            ),
            36 => 
            array (
                'achievement_name' => 'RoomDecoFurniCount',
                'progress' => 7,
                'user_id' => 7,
            ),
            37 => 
            array (
                'achievement_name' => 'SelfModChatFloodFilterSeen',
                'progress' => 1,
                'user_id' => 7,
            ),
            38 => 
            array (
                'achievement_name' => 'SelfModChatHearRangeSeen',
                'progress' => 1,
                'user_id' => 7,
            ),
            39 => 
            array (
                'achievement_name' => 'SelfModChatScrollSpeedSeen',
                'progress' => 1,
                'user_id' => 7,
            ),
            40 => 
            array (
                'achievement_name' => 'SelfModDoorModeSeen',
                'progress' => 1,
                'user_id' => 7,
            ),
        ));
        
        
    }
}