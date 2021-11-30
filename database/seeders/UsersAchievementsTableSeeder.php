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
                'user_id' => 1,
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
            ),
            1 => 
            array (
                'user_id' => 1,
                'achievement_name' => 'RegistrationDuration',
                'progress' => 1,
            ),
            2 => 
            array (
                'user_id' => 1,
                'achievement_name' => 'TraderPass',
                'progress' => 1,
            ),
            3 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
            ),
            4 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'RegistrationDuration',
                'progress' => 11,
            ),
            5 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'TraderPass',
                'progress' => 1,
            ),
            6 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 106,
            ),
            7 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
            ),
            8 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'RegistrationDuration',
                'progress' => 11,
            ),
            9 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'TraderPass',
                'progress' => 1,
            ),
            10 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'RespectGiven',
                'progress' => 3,
            ),
            11 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'RespectEarned',
                'progress' => 1,
            ),
            12 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 372,
            ),
            13 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'RoomDecoFurniCount',
                'progress' => 1,
            ),
            14 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'RoomDecoFurniCount',
                'progress' => 55,
            ),
            15 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'Spr',
                'progress' => 1,
            ),
            16 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'SelfModChatFloodFilterSeen',
                'progress' => 1,
            ),
            17 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'SelfModChatHearRangeSeen',
                'progress' => 1,
            ),
            18 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'SelfModChatScrollSpeedSeen',
                'progress' => 1,
            ),
            19 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'SelfModDoorModeSeen',
                'progress' => 1,
            ),
            20 => 
            array (
                'user_id' => 4,
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
            ),
            21 => 
            array (
                'user_id' => 4,
                'achievement_name' => 'RegistrationDuration',
                'progress' => 0,
            ),
            22 => 
            array (
                'user_id' => 4,
                'achievement_name' => 'TraderPass',
                'progress' => 1,
            ),
            23 => 
            array (
                'user_id' => 4,
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 37,
            ),
            24 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'PetLover',
                'progress' => 1,
            ),
            25 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'RoomDecoWallpaper',
                'progress' => 5,
            ),
            26 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'RoomDecoFloor',
                'progress' => 6,
            ),
            27 => 
            array (
                'user_id' => 3,
                'achievement_name' => 'RoomDecoLandscape',
                'progress' => 1,
            ),
            28 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'SelfModChatFloodFilterSeen',
                'progress' => 1,
            ),
            29 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'SelfModChatHearRangeSeen',
                'progress' => 1,
            ),
            30 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'SelfModChatScrollSpeedSeen',
                'progress' => 1,
            ),
            31 => 
            array (
                'user_id' => 2,
                'achievement_name' => 'SelfModDoorModeSeen',
                'progress' => 1,
            ),
            32 => 
            array (
                'user_id' => 7,
                'achievement_name' => 'FriendListSize',
                'progress' => 1,
            ),
            33 => 
            array (
                'user_id' => 7,
                'achievement_name' => 'RegistrationDuration',
                'progress' => 0,
            ),
            34 => 
            array (
                'user_id' => 7,
                'achievement_name' => 'TraderPass',
                'progress' => 1,
            ),
            35 => 
            array (
                'user_id' => 7,
                'achievement_name' => 'RoomDecoFurniCount',
                'progress' => 2,
            ),
            36 => 
            array (
                'user_id' => 7,
                'achievement_name' => 'AllTimeHotelPresence',
                'progress' => 1,
            ),
        ));
        
        
    }
}