<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmulatorTextsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('emulator_texts')->delete();
        
        \DB::table('emulator_texts')->insert(array (
            0 => 
            array (
                'key' => 'commands.error.cmd_userinfo.forgot_username',
                'value' => 'Please provide an username!',
            ),
            1 => 
            array (
                'key' => 'commands.description.cmd_userinfo',
                'value' => ':userinfo <username>',
            ),
            2 => 
            array (
                'key' => 'commands.description.cmd_shout_all',
                'value' => ':shoutall <message>',
            ),
            3 => 
            array (
                'key' => 'commands.description.cmd_say_all',
                'value' => ':sayall <message>',
            ),
            4 => 
            array (
                'key' => 'commands.error.cmd_shout_all.forgot_message',
                'value' => 'Specify a message!',
            ),
            5 => 
            array (
                'key' => 'commands.error.cmd_control.not_self',
                'value' => 'You cannot control yourself *facepalm*',
            ),
            6 => 
            array (
                'key' => 'commands.description.cmd_talk',
                'value' => ':talk <username> <message>',
            ),
            7 => 
            array (
                'key' => 'commands.error.cmd_control.not_found',
                'value' => 'User %user% could not be found!',
            ),
            8 => 
            array (
                'key' => 'commands.succes.cmd_control.controlling',
                'value' => 'You\'re now controlling %user%!',
            ),
            9 => 
            array (
                'key' => 'commands.error.cmd_alert.forgot_username',
                'value' => 'Please provide a username!',
            ),
            10 => 
            array (
                'key' => 'commands.error.cmd_alert.forgot_message',
                'value' => 'Please provide a message!',
            ),
            11 => 
            array (
                'key' => 'commands.succes.cmd_alert.message_send',
                'value' => 'Alert send to %user%',
            ),
            12 => 
            array (
                'key' => 'commands.error.cmd_alert.user_offline',
                'value' => 'Four Oh Four - \\r %user% doesn\'t seem to be online!',
            ),
            13 => 
            array (
                'key' => 'commands.error.cmd_ban.forgot_user',
                'value' => 'Please provide a username!',
            ),
            14 => 
            array (
                'key' => 'commands.error.cmd_ban.forgot_time',
                'value' => 'Please provide a time in seconds!',
            ),
            15 => 
            array (
                'key' => 'commands.error.cmd_ban.invalid_time',
                'value' => 'Please use a valid number.',
            ),
            16 => 
            array (
                'key' => 'commands.error.cmd_ban.time_to_short',
            'value' => 'Ban time must be more than 600 seconds (Which equals 10 minutes.)',
            ),
            17 => 
            array (
                'key' => 'commands.error.cmd_ban.ban_self',
                'value' => 'You cannot ban yourself.',
            ),
            18 => 
            array (
                'key' => 'commands.error.cmd_ban.user_offline',
                'value' => 'Target could not be found.',
            ),
            19 => 
            array (
                'key' => 'commands.succes.cmd_ban.ban_issued',
                'value' => '%user% banned for %time% seconds with reason %reason%',
            ),
            20 => 
            array (
                'key' => 'commands.generic.cmd_coords.title',
                'value' => '<b>Your current coords</b>',
            ),
            21 => 
            array (
                'key' => 'generic.rotation.head',
                'value' => 'Head Rotation',
            ),
            22 => 
            array (
                'key' => 'generic.rotation.body',
                'value' => 'Body Rotation',
            ),
            23 => 
            array (
                'key' => 'generic.sitting',
                'value' => 'Sitting',
            ),
            24 => 
            array (
                'key' => 'generic.yes',
                'value' => 'Yes',
            ),
            25 => 
            array (
                'key' => 'generic.no',
                'value' => 'No',
            ),
            26 => 
            array (
                'key' => 'commands.generic.cmd_credits.received',
                'value' => 'Whoah! You\'ve received %amount% credits!',
            ),
            27 => 
            array (
                'key' => 'commands.succes.cmd_credits.send',
                'value' => '%amount% credits send to %user%!',
            ),
            28 => 
            array (
                'key' => 'commands.error.cmd_credits.invalid_amount',
                'value' => 'Please use a valid number.',
            ),
            29 => 
            array (
                'key' => 'commands.error.cmd_credits.user_offline',
                'value' => 'User %user% could not be found.',
            ),
            30 => 
            array (
                'key' => 'commands.error.cmd_disconnect.forgot_username',
                'value' => 'Please provide a username!',
            ),
            31 => 
            array (
                'key' => 'commands.error.cmd_disconnect.disconnect_self',
                'value' => 'You cannot disconnect yourself!',
            ),
            32 => 
            array (
                'key' => 'commands.error.cmd_disconnect.user_offline',
                'value' => 'User not found.',
            ),
            33 => 
            array (
                'key' => 'commands.succes.cmd_disconnect.disconnected',
                'value' => '%user% disconnected!',
            ),
            34 => 
            array (
                'key' => 'commands.succes.cmd_freeze_bots.frozen',
                'value' => 'Bots are now frozen.',
            ),
            35 => 
            array (
                'key' => 'commands.succes.cmd_freeze_bots.unfrozen',
                'value' => 'Bots can now walk through your room.',
            ),
            36 => 
            array (
                'key' => 'generic.cannot_do_that',
                'value' => 'You cannot do that!',
            ),
            37 => 
            array (
                'key' => 'commands.error.cmd_ha.forgot_message',
                'value' => 'Please provide a message!',
            ),
            38 => 
            array (
                'key' => 'generic.pet.name',
                'value' => 'Name',
            ),
            39 => 
            array (
                'key' => 'generic.pet.age',
                'value' => 'Age',
            ),
            40 => 
            array (
                'key' => 'generic.pet.level',
                'value' => 'Level',
            ),
            41 => 
            array (
                'key' => 'commands.generic.cmd_pet_info.stats',
                'value' => '<b>Pet Stats:</b>',
            ),
            42 => 
            array (
                'key' => 'generic.pet.scratches',
                'value' => 'Scratches',
            ),
            43 => 
            array (
                'key' => 'generic.pet.energy',
                'value' => 'Energy',
            ),
            44 => 
            array (
                'key' => 'generic.pet.happyness',
                'value' => 'Happyness',
            ),
            45 => 
            array (
                'key' => 'generic.pet.level.thirst',
                'value' => 'Thirst Level',
            ),
            46 => 
            array (
                'key' => 'generic.pet.level.hunger',
                'value' => 'Hunger Level',
            ),
            47 => 
            array (
                'key' => 'generic.pet.current_action',
                'value' => 'Current action',
            ),
            48 => 
            array (
                'key' => 'generic.can.walk',
                'value' => 'Can walk',
            ),
            49 => 
            array (
                'key' => 'generic.nothing',
                'value' => 'Nothing',
            ),
            50 => 
            array (
                'key' => 'commands.generic.cmd_pet_info.title',
                'value' => '<b>Pet Info</b>',
            ),
            51 => 
            array (
                'key' => 'generic.pet.days.alive',
                'value' => 'days alive.',
            ),
            52 => 
            array (
                'key' => 'commands.generic.cmd_duckets.received',
                'value' => 'Whoah! You\'ve received %amount% duckets!',
            ),
            53 => 
            array (
                'key' => 'commands.succes.cmd_duckets.send',
                'value' => '%amount% duckets send to %user%!',
            ),
            54 => 
            array (
                'key' => 'commands.error.cmd_duckets.invalid_amount',
                'value' => 'Please use a valid number.',
            ),
            55 => 
            array (
                'key' => 'commands.error.cmd_duckets.user_offline',
                'value' => 'User %user% could not be found.',
            ),
            56 => 
            array (
                'key' => 'commands.succes.cmd_update_catalog',
                'value' => 'Catalogue has been refreshed!',
            ),
            57 => 
            array (
                'key' => 'commands.succes.cmd_update_items',
                'value' => 'Items have been refreshed!',
            ),
            58 => 
            array (
                'key' => 'commands.succes.cmd_update_permissions',
                'value' => 'Permissions have been refreshed!',
            ),
            59 => 
            array (
                'key' => 'commands.succes.cmd_update_pet_data',
                'value' => 'Petdata have been refreshed!',
            ),
            60 => 
            array (
                'key' => 'error.recycler.box.empty',
                'value' => 'Oops! This box doesn\'t seem to have a prize inside. We\'ll remove it for you.',
            ),
            61 => 
            array (
                'key' => 'error.catalog.buy.not_yet',
                'value' => 'Cannot buy that yet. Hold on <3',
            ),
            62 => 
            array (
                'key' => 'hotel.room.inappropriate.title',
                'value' => 'Inappropriate to hotel management.',
            ),
            63 => 
            array (
                'key' => 'hotel.alert.message.welcome',
                'value' => 'Welcome to Habbo Hotel %user%',
            ),
            64 => 
            array (
                'key' => 'commands.error.cmd_say.forgot_username',
                'value' => 'Please provide a username!',
            ),
            65 => 
            array (
                'key' => 'commands.error.cmd_say.user_not_found',
                'value' => 'User not found.',
            ),
            66 => 
            array (
                'key' => 'commands.error.cmd_say.hotel_view',
                'value' => '%user% is not in a room!',
            ),
            67 => 
            array (
                'key' => 'commands.succes.cmd_say',
                'value' => '%user% said %message%',
            ),
            68 => 
            array (
                'key' => 'commands.error.cmd_shout.forgot_username',
                'value' => 'Please provide a username!',
            ),
            69 => 
            array (
                'key' => 'commands.error.cmd_shout.hotel_view',
                'value' => '%user% is not in a room!',
            ),
            70 => 
            array (
                'key' => 'commands.error.cmd_shout.user_not_found',
                'value' => 'User not found.',
            ),
            71 => 
            array (
                'key' => 'commands.succes.cmd_shout',
                'value' => '%user% shouted %message%',
            ),
            72 => 
            array (
                'key' => 'commands.error.cmd_setspeed.invalid_amount',
                'value' => 'Please use a valid number.',
            ),
            73 => 
            array (
                'key' => 'commands.error.cmd_setspeed.bounds',
                'value' => 'Please use a number between 0 and 100.',
            ),
            74 => 
            array (
                'key' => 'commands.succes.cmd_setspeed',
                'value' => 'Succes! Old speed: %oldspeed%. New Speed: %newspeed%.',
            ),
            75 => 
            array (
                'key' => 'commands.succes.cmd_teleport.enabled',
                'value' => 'Teleporting enabled!',
            ),
            76 => 
            array (
                'key' => 'commands.succes.cmd_teleport.disabled',
                'value' => 'Teleporting disabled!',
            ),
            77 => 
            array (
                'key' => 'error.pets.max.inventory',
                'value' => 'You\'ve reached the maximum amount of pets in your inventory! The Limit is %amount%!',
            ),
            78 => 
            array (
                'key' => 'commands.description.cmd_control',
                'value' => ':control <username>',
            ),
            79 => 
            array (
                'key' => 'commands.error.cmd_say_all.forgot_message',
                'value' => 'Specify a message!',
            ),
            80 => 
            array (
                'key' => 'commands.succes.cmd_control.stopped',
                'value' => '%user% is now a free man!',
            ),
            81 => 
            array (
                'key' => 'commands.error.cmd_points.invalid_amount',
                'value' => 'Please use a valid number.',
            ),
            82 => 
            array (
                'key' => 'commands.error.cmd_points.user_offline',
                'value' => 'User %user% could not be found.',
            ),
            83 => 
            array (
                'key' => 'commands.succes.cmd_points.send',
                'value' => '%amount% %type% send to %user%!',
            ),
            84 => 
            array (
                'key' => 'commands.generic.cmd_points.received',
                'value' => 'Whoah! You\'ve received %amount% %type%!',
            ),
            85 => 
            array (
                'key' => 'commands.error.cmd_update_texts.failed',
                'value' => 'Failed to update texts!',
            ),
            86 => 
            array (
                'key' => 'commands.succes.cmd_update_texts',
                'value' => 'Updated texts!',
            ),
            87 => 
            array (
                'key' => 'commands.description.cmd_hand_item',
                'value' => ':handitem <itemid>',
            ),
            88 => 
            array (
                'key' => 'commands.description.cmd_freeze_bots',
                'value' => ':freezebots',
            ),
            89 => 
            array (
                'key' => 'commands.description.cmd_shout',
                'value' => ':makeshout <username> <text>',
            ),
            90 => 
            array (
                'key' => 'commands.description.cmd_points',
                'value' => ':points <username> <amount> [type]',
            ),
            91 => 
            array (
                'key' => 'commands.description.cmd_enable',
                'value' => ':enable <effect id>',
            ),
            92 => 
            array (
                'key' => 'commands.description.cmd_update_texts',
                'value' => ':update_texts',
            ),
            93 => 
            array (
                'key' => 'commands.description.cmd_ban',
                'value' => ':ban <username> <time in seconds>',
            ),
            94 => 
            array (
                'key' => 'commands.description.cmd_say',
                'value' => ':say <username> <text>',
            ),
            95 => 
            array (
                'key' => 'commands.description.cmd_update_permissions',
                'value' => ':update_permissions',
            ),
            96 => 
            array (
                'key' => 'commands.description.cmd_pet_info',
                'value' => ':petinfo <petname>',
            ),
            97 => 
            array (
                'key' => 'commands.description.cmd_setspeed',
                'value' => ':setspeed <speed>',
            ),
            98 => 
            array (
                'key' => 'commands.description.cmd_update_pet_data',
                'value' => ':update_petdata',
            ),
            99 => 
            array (
                'key' => 'commands.description.cmd_about',
                'value' => ':about',
            ),
            100 => 
            array (
                'key' => 'commands.description.cmd_alert',
                'value' => ':alert <username> <message>',
            ),
            101 => 
            array (
                'key' => 'commands.description.cmd_commands',
                'value' => ':commands',
            ),
            102 => 
            array (
                'key' => 'commands.description.cmd_coords',
                'value' => ':coords',
            ),
            103 => 
            array (
                'key' => 'commands.description.cmd_credits',
                'value' => ':credits <username> <amount>',
            ),
            104 => 
            array (
                'key' => 'commands.description.cmd_disconnect',
                'value' => ':disconnect <username>',
            ),
            105 => 
            array (
                'key' => 'commands.description.cmd_duckets',
                'value' => ':duckets <username> <amount>',
            ),
            106 => 
            array (
                'key' => 'commands.description.cmd_ha',
                'value' => ':ha <message>',
            ),
            107 => 
            array (
                'key' => 'commands.description.cmd_kickall',
                'value' => ':kickall <message>',
            ),
            108 => 
            array (
                'key' => 'commands.description.cmd_setpublic',
                'value' => ':setpublic',
            ),
            109 => 
            array (
                'key' => 'commands.description.cmd_shutdown',
                'value' => ':shutdown',
            ),
            110 => 
            array (
                'key' => 'commands.description.cmd_teleport',
                'value' => ':teleport',
            ),
            111 => 
            array (
                'key' => 'commands.description.cmd_unload',
                'value' => ':unload',
            ),
            112 => 
            array (
                'key' => 'commands.description.cmd_update_catalogue',
                'value' => ':update_catalog',
            ),
            113 => 
            array (
                'key' => 'commands.description.cmd_update_items',
                'value' => ':update_items',
            ),
            114 => 
            array (
                'key' => 'commands.error.cmd_userinfo.not_found',
                'value' => 'User %user% not found!',
            ),
            115 => 
            array (
                'key' => 'commands.error.cmd_masscredits.invalid_amount',
                'value' => 'Please use a valid number.',
            ),
            116 => 
            array (
                'key' => 'commands.error.cmd_massduckets.invalid_amount',
                'value' => 'Please use a valid number.',
            ),
            117 => 
            array (
                'key' => 'commands.error.cmd_masspoints.invalid_amount',
                'value' => 'Please use a valid number.',
            ),
            118 => 
            array (
                'key' => 'commands.description.cmd_masscredits',
                'value' => ':masscredits <amount>',
            ),
            119 => 
            array (
                'key' => 'commands.description.cmd_massduckets',
                'value' => ':massduckets <amount>',
            ),
            120 => 
            array (
                'key' => 'commands.description.cmd_masspoints',
                'value' => ':masspoints <amount> [type] ',
            ),
            121 => 
            array (
                'key' => 'commands.description.cmd_sitdown',
                'value' => ':sitdown',
            ),
            122 => 
            array (
                'key' => 'commands.succes.cmd_pull.pull',
                'value' => '* Pulls %user% towards %gender_name% *',
            ),
            123 => 
            array (
                'key' => 'gender.him',
                'value' => 'him',
            ),
            124 => 
            array (
                'key' => 'gender.her',
                'value' => 'her',
            ),
            125 => 
            array (
                'key' => 'commands.error.cmd_pull.not_found',
                'value' => 'User %user% could not be found!',
            ),
            126 => 
            array (
                'key' => 'commands.succes.cmd_push.push',
                'value' => '* Pushes %user% away from %gender_name% *',
            ),
            127 => 
            array (
                'key' => 'commands.error.cmd_pull.cant_reach',
                'value' => 'User %user% is too far away!',
            ),
            128 => 
            array (
                'key' => 'commands.error.cmd_push.cant_reach',
                'value' => 'User %user% is too far away!',
            ),
            129 => 
            array (
                'key' => 'commands.description.cmd_pull',
                'value' => ':pull <username>',
            ),
            130 => 
            array (
                'key' => 'commands.description.cmd_push',
                'value' => ':push <username>',
            ),
            131 => 
            array (
                'key' => 'commands.error.cmd_pull.pull_self',
                'value' => 'You cannot pull yourself!',
            ),
            132 => 
            array (
                'key' => 'commands.error.cmd_push.push_self',
                'value' => 'You cannot push yourself!',
            ),
            133 => 
            array (
                'key' => 'commands.error.cmd_push.not_found',
                'value' => 'User %user% could not be found!',
            ),
            134 => 
            array (
                'key' => 'commands.description.cmd_superpull',
                'value' => ':spull <username>',
            ),
            135 => 
            array (
                'key' => 'commands.error.cmd_mute.not_found',
                'value' => 'Use %user% could not be found.',
            ),
            136 => 
            array (
                'key' => 'commands.error.cmd_danceall.invalid_dance',
                'value' => 'Please use a valid number!',
            ),
            137 => 
            array (
                'key' => 'commands.error.cmd_danceall.outside_bounds',
                'value' => 'Please use a number between 0 and 4',
            ),
            138 => 
            array (
                'key' => 'commands.error.cmd_freeze.not_found',
                'value' => 'User %user% could not be found.',
            ),
            139 => 
            array (
                'key' => 'commands.succes.cmd_freeze.user_frozen',
                'value' => 'User %user% frozen!',
            ),
            140 => 
            array (
                'key' => 'commands.succes.cmd_freeze.user_unfrozen',
                'value' => 'User %user% unfrozen!',
            ),
            141 => 
            array (
                'key' => 'commands.succes.cmd_freeze.frozen',
                'value' => 'You\'ve been frozen!',
            ),
            142 => 
            array (
                'key' => 'commands.succes.cmd_freeze.unfrozen',
                'value' => 'You\'ve been unfrozen!',
            ),
            143 => 
            array (
                'key' => 'commands.description.cmd_danceall',
                'value' => ':danceall <dance id>',
            ),
            144 => 
            array (
                'key' => 'commands.description.cmd_freeze',
                'value' => ':freeze <username>',
            ),
            145 => 
            array (
                'key' => 'commands.error.cmd_mimic.not_found',
                'value' => 'User %user% could not be found!',
            ),
            146 => 
            array (
                'key' => 'commands.error.cmd_mimic.not_self',
                'value' => 'You cannot copy yourself!',
            ),
            147 => 
            array (
                'key' => 'commands.description.cmd_mimic',
                'value' => ':mimic <username>',
            ),
            148 => 
            array (
                'key' => 'commands.error.cmd_mimic.blocked',
                'value' => 'You cannot copy %user% %gender_name% look!',
            ),
            149 => 
            array (
                'key' => 'commands.succes.cmd_mimic.copied',
                'value' => 'You copied %user% %gender_name% look!',
            ),
            150 => 
            array (
                'key' => 'commands.error.cmd_mute.not_specified',
                'value' => 'Please specify an user to mute.',
            ),
            151 => 
            array (
                'key' => 'commands.succes.cmd_mute.muted',
                'value' => 'User %user% is now muted.',
            ),
            152 => 
            array (
                'key' => 'commands.succes.cmd_mute.unmuted',
                'value' => 'User %user% is no longer muted.',
            ),
            153 => 
            array (
                'key' => 'commands.error.cmd_mute.self',
                'value' => 'You cannot mute yourself. ',
            ),
            154 => 
            array (
                'key' => 'commands.description.cmd_mute',
                'value' => ':mute <username>',
            ),
            155 => 
            array (
                'key' => 'commands.error.cmd_badge.forgot_username',
                'value' => 'Please specify an user to give a badge to.',
            ),
            156 => 
            array (
                'key' => 'commands.error.cmd_badge.forgot_badge',
                'value' => 'Please specify an badge to give to %user%.',
            ),
            157 => 
            array (
                'key' => 'commands.error.cmd_badge.already_owns',
                'value' => 'User %user% already owns %badge%.',
            ),
            158 => 
            array (
                'key' => 'commands.succes.cmd_badge.given',
                'value' => 'Given %badge% to %user%!',
            ),
            159 => 
            array (
                'key' => 'commands.description.cmd_badge',
                'value' => ':badge <username> <badge>',
            ),
            160 => 
            array (
                'key' => 'commands.error.cmd_enable.not_allowed',
                'value' => 'You do not have permission to set this effect!',
            ),
            161 => 
            array (
                'key' => 'commands.keys.cmd_about',
                'value' => 'info;about;help',
            ),
            162 => 
            array (
                'key' => 'commands.keys.cmd_alert',
                'value' => 'alert;warning',
            ),
            163 => 
            array (
                'key' => 'commands.keys.cmd_badge',
                'value' => 'badge;givebadge',
            ),
            164 => 
            array (
                'key' => 'commands.keys.cmd_ban',
                'value' => 'ban',
            ),
            165 => 
            array (
                'key' => 'commands.keys.cmd_commands',
                'value' => 'commands;cmds',
            ),
            166 => 
            array (
                'key' => 'commands.keys.cmd_control',
                'value' => 'control',
            ),
            167 => 
            array (
                'key' => 'commands.keys.cmd_coords',
                'value' => 'coords;cordinates;coordinates;position',
            ),
            168 => 
            array (
                'key' => 'commands.keys.cmd_credits',
                'value' => 'credits;coins',
            ),
            169 => 
            array (
                'key' => 'commands.keys.cmd_disconnect',
                'value' => 'dc;disconnect;kill',
            ),
            170 => 
            array (
                'key' => 'commands.keys.cmd_enable',
                'value' => 'enable;effect',
            ),
            171 => 
            array (
                'key' => 'commands.keys.cmd_freeze_bots',
                'value' => 'freeze_bot;freezebot;freezebots;freeze_bots',
            ),
            172 => 
            array (
                'key' => 'commands.keys.cmd_freeze',
                'value' => 'freeze',
            ),
            173 => 
            array (
                'key' => 'commands.keys.cmd_hand_item',
                'value' => 'handitem;item;hand',
            ),
            174 => 
            array (
                'key' => 'commands.keys.cmd_ha',
                'value' => 'hotelalert;ha',
            ),
            175 => 
            array (
                'key' => 'commands.keys.cmd_masscredits',
                'value' => 'mass_credits;masscredits',
            ),
            176 => 
            array (
                'key' => 'commands.keys.cmd_massduckets',
                'value' => 'mass_duckets;massduckets;mass_pixels;masspixels',
            ),
            177 => 
            array (
                'key' => 'commands.keys.cmd_masspoints',
                'value' => 'mass_points;masspoints',
            ),
            178 => 
            array (
                'key' => 'commands.keys.cmd_mimic',
                'value' => 'mimic;copy',
            ),
            179 => 
            array (
                'key' => 'commands.keys.cmd_mute',
                'value' => 'mute;shutup',
            ),
            180 => 
            array (
                'key' => 'commands.keys.cmd_pet_info',
                'value' => 'pet;pet_info;petinfo',
            ),
            181 => 
            array (
                'key' => 'commands.keys.cmd_duckets',
                'value' => 'pixels;duckets',
            ),
            182 => 
            array (
                'key' => 'commands.keys.cmd_points',
                'value' => 'diamonds;points',
            ),
            183 => 
            array (
                'key' => 'commands.keys.cmd_pull',
                'value' => 'pull',
            ),
            184 => 
            array (
                'key' => 'commands.keys.cmd_push',
                'value' => 'push',
            ),
            185 => 
            array (
                'key' => 'commands.keys.cmd_danceall',
                'value' => 'danceall;room_dance;roomdance',
            ),
            186 => 
            array (
                'key' => 'commands.keys.cmd_kickall',
                'value' => 'room_kick;kickall;roomkick;kick_all',
            ),
            187 => 
            array (
                'key' => 'commands.keys.cmd_say_all',
                'value' => 'sayall;say_all',
            ),
            188 => 
            array (
                'key' => 'commands.keys.cmd_say',
                'value' => 'say;makesay',
            ),
            189 => 
            array (
                'key' => 'commands.keys.cmd_setspeed',
                'value' => 'speed;setspeed',
            ),
            190 => 
            array (
                'key' => 'commands.keys.cmd_shout_all',
                'value' => 'shoutall;shout_all;roomshout;room_shout',
            ),
            191 => 
            array (
                'key' => 'commands.keys.cmd_shout',
                'value' => 'makeshout',
            ),
            192 => 
            array (
                'key' => 'commands.keys.cmd_shutdown',
                'value' => 'stop;shutdown',
            ),
            193 => 
            array (
                'key' => 'commands.keys.cmd_sitdown',
                'value' => 'sitall;sitdown',
            ),
            194 => 
            array (
                'key' => 'commands.keys.cmd_superpull',
                'value' => 'spull;superpull',
            ),
            195 => 
            array (
                'key' => 'commands.keys.cmd_teleport',
                'value' => 'tele;teleport',
            ),
            196 => 
            array (
                'key' => 'commands.keys.cmd_unload',
                'value' => 'crash;unload',
            ),
            197 => 
            array (
                'key' => 'commands.keys.cmd_update_catalogue',
                'value' => 'reload_catalogue;reload_cata;update_catalogue;update_cata;update_catalog;update_shop',
            ),
            198 => 
            array (
                'key' => 'commands.keys.cmd_update_items',
                'value' => 'update_items;reload_items',
            ),
            199 => 
            array (
                'key' => 'commands.keys.cmd_update_permissions',
                'value' => 'update_permissions;update_perms',
            ),
            200 => 
            array (
                'key' => 'commands.keys.cmd_update_pet_data',
                'value' => 'update_pet_data;update_petdata',
            ),
            201 => 
            array (
                'key' => 'commands.keys.cmd_update_texts',
                'value' => 'update_texts;reload_texts',
            ),
            202 => 
            array (
                'key' => 'commands.keys.cmd_userinfo',
                'value' => 'userinfo;user_info',
            ),
            203 => 
            array (
                'key' => 'commands.keys.cmd_sit',
                'value' => 'sit',
            ),
            204 => 
            array (
                'key' => 'commands.description.cmd_sit',
                'value' => ':sit',
            ),
            205 => 
            array (
                'key' => 'total',
                'value' => 'Total',
            ),
            206 => 
            array (
                'key' => 'generic.bot.name',
                'value' => 'Bot',
            ),
            207 => 
            array (
                'key' => 'generic.bot.id',
                'value' => 'ID',
            ),
            208 => 
            array (
                'key' => 'commands.description.cmd_bots',
                'value' => ':bots',
            ),
            209 => 
            array (
                'key' => 'commands.keys.cmd_bots',
                'value' => 'bots',
            ),
            210 => 
            array (
                'key' => 'generic.shutdown',
                'value' => 'The server is shutting down. All changes made from now on may not get saved!',
            ),
            211 => 
            array (
                'key' => 'generic.reason.specified',
                'value' => 'Reason specified',
            ),
            212 => 
            array (
                'key' => 'generic.warning',
                'value' => 'WARNING!',
            ),
            213 => 
            array (
                'key' => 'wired.variable.username',
                'value' => '%username%',
            ),
            214 => 
            array (
                'key' => 'wired.variable.credits',
                'value' => '%credits%',
            ),
            215 => 
            array (
                'key' => 'wired.variable.points',
                'value' => '%points%',
            ),
            216 => 
            array (
                'key' => 'wired.variable.pixels',
                'value' => '%pixels%',
            ),
            217 => 
            array (
                'key' => 'commands.error.cmd_ban.target_rank_higher',
                'value' => 'The Habbo you want to ban has a higher rank than you.',
            ),
            218 => 
            array (
                'key' => 'commands.error.cmd_unban.not_specified',
                'value' => 'No username specified!',
            ),
            219 => 
            array (
                'key' => 'commands.error.cmd_unban.success',
                'value' => '%user% has been unbanned.',
            ),
            220 => 
            array (
                'key' => 'commands.error.cmd_unban.not_found',
                'value' => 'No bans found for %user%.',
            ),
            221 => 
            array (
                'key' => 'unbanned',
                'value' => 'unbanned',
            ),
            222 => 
            array (
                'key' => 'commands.description.cmd_unban',
                'value' => ':unban <username>',
            ),
            223 => 
            array (
                'key' => 'commands.keys.cmd_unban',
                'value' => 'unban',
            ),
            224 => 
            array (
                'key' => 'stalk.failed.same.room',
                'value' => '%user% is in this room too!',
            ),
            225 => 
            array (
                'key' => 'commands.keys.cmd_trash',
                'value' => 'trash;tornado;sharknado',
            ),
            226 => 
            array (
                'key' => 'commands.succes.cmd_empty.cleared',
                'value' => 'Inventory cleared!',
            ),
            227 => 
            array (
                'key' => 'commands.succes.cmd_empty.verify',
                'value' => 'This will remove all items from your inventory. Type :empty %generic.yes% to continue!',
            ),
            228 => 
            array (
                'key' => 'commands.succes.cmd_update_wordfilter',
                'value' => 'Wordfilter reloaded!',
            ),
            229 => 
            array (
                'key' => 'warning.auto.report',
                'value' => '%user% triggered wordfilter using: %word%',
            ),
            230 => 
            array (
                'key' => 'commands.keys.cmd_empty',
                'value' => 'empty',
            ),
            231 => 
            array (
                'key' => 'commands.keys.update_wordfilter',
                'value' => 'update_wordfilter;update_filter;update_word_filter',
            ),
            232 => 
            array (
                'key' => 'commands.description.acc_debug',
                'value' => ':test [header] i:1 s:a b:1',
            ),
            233 => 
            array (
                'key' => 'commands.description.cmd_trash',
                'value' => ':trash',
            ),
            234 => 
            array (
                'key' => 'commands.description.cmd_update_wordfilter',
                'value' => ':update_word_filter',
            ),
            235 => 
            array (
                'key' => 'commands.keys.cmd_update_config',
                'value' => 'update_config;update_configuration',
            ),
            236 => 
            array (
                'key' => 'scripter.warning.room.delete',
                'value' => '%username% tried to delete %roomname% owned by %roomowner%',
            ),
            237 => 
            array (
                'key' => 'commands.succes.cmd_update_config',
                'value' => 'Configuration reloaded!',
            ),
            238 => 
            array (
                'key' => 'commands.keys.cmd_update_guildparts',
                'value' => 'update_guildparts;update_guild_parts',
            ),
            239 => 
            array (
                'key' => 'commands.description.cmd_update_guildparts',
                'value' => ':update_guild_parts',
            ),
            240 => 
            array (
                'key' => 'commands.description.cmd_update_config',
                'value' => ':update_config',
            ),
            241 => 
            array (
                'key' => 'commands.description.cmd_empty',
                'value' => ':empty <username>',
            ),
            242 => 
            array (
                'key' => 'commands.keys.cmd_update_plugins',
                'value' => 'update_plugins;updateplugins',
            ),
            243 => 
            array (
                'key' => 'commands.description.cmd_update_plugins',
                'value' => ':update_plugins',
            ),
            244 => 
            array (
                'key' => 'commands.succes.cmd_update_plugins',
                'value' => 'Reloaded %count% plugins!',
            ),
            245 => 
            array (
                'key' => 'commands.keys.cmd_happyhour',
                'value' => 'happyhour;happy_hour',
            ),
            246 => 
            array (
                'key' => 'commands.error.cmd_danceall.no_dance',
                'value' => 'Please specify a dance from 0 to 4!',
            ),
            247 => 
            array (
                'key' => 'commands.keys.cmd_roomeffect',
                'value' => 'roomeffect;room_effect',
            ),
            248 => 
            array (
                'key' => 'commands.error.cmd_roomeffect.no_effect',
                'value' => 'No effect specified!',
            ),
            249 => 
            array (
                'key' => 'commands.error.cmd_roomeffect.numbers_only',
                'value' => 'Use numbers only!',
            ),
            250 => 
            array (
                'key' => 'commands.error.cmd_roomeffect.positive',
                'value' => 'Positive numbers only!',
            ),
            251 => 
            array (
                'key' => 'commands.error.cmd_staffonline.numbers_only',
                'value' => 'Numbers only please!',
            ),
            252 => 
            array (
                'key' => 'commands.error.cmd_staffonline.positive_only',
                'value' => 'Positive numbers only please!',
            ),
            253 => 
            array (
                'key' => 'commands.generic.cmd_staffonline.staffs',
                'value' => '<b>Staffs online:</b>',
            ),
            254 => 
            array (
                'key' => 'commands.description.cmd_staffonline',
                'value' => ':staffonline [minrank]',
            ),
            255 => 
            array (
                'key' => 'commands.description.cmd_roomeffect',
                'value' => ':roomeffect [effect id]',
            ),
            256 => 
            array (
                'key' => 'commands.keys.cmd_staffonline',
                'value' => 'staffonline;staffs',
            ),
            257 => 
            array (
                'key' => 'commands.description.cmd_happyhour',
                'value' => ':happyhour',
            ),
            258 => 
            array (
                'key' => 'commands.keys.cmd_summon',
                'value' => 'summon',
            ),
            259 => 
            array (
                'key' => 'commands.description.cmd_summon',
                'value' => ':summon <username>',
            ),
            260 => 
            array (
                'key' => 'commands.error.cmd_summon.forgot_username',
                'value' => 'Specify the username of the Habbo you want to summon!',
            ),
            261 => 
            array (
                'key' => 'commands.error.cmd_summon.not_found',
                'value' => '%% is not online!',
            ),
            262 => 
            array (
                'key' => 'commands.generic.cmd_summon.same_room',
                'value' => '%user% is in this room already!',
            ),
            263 => 
            array (
                'key' => 'commands.succes.cmd_summon.summoned',
                'value' => '%user% summoned!',
            ),
            264 => 
            array (
                'key' => 'commands.generic.cmd_summon.been_summoned',
                'value' => 'You\'ve been summoned by %user%!',
            ),
            265 => 
            array (
                'key' => 'commands.generic.cmd_summon.summoning',
                'value' => 'Summoning %user%...',
            ),
            266 => 
            array (
                'key' => 'commands.error.cmd_roomitem.no_item',
                'value' => 'No item id specified!',
            ),
            267 => 
            array (
                'key' => 'commands.error.cmd_roomitem.positive',
                'value' => 'Positive numbers only!',
            ),
            268 => 
            array (
                'key' => 'commands.succes.cmd_roomitem.given',
                'value' => 'Handitem %item% given!',
            ),
            269 => 
            array (
                'key' => 'commands.succes.cmd_roomitem.removed',
                'value' => 'Handitems removed!',
            ),
            270 => 
            array (
                'key' => 'commands.keys.cmd_roomitem',
                'value' => 'roomitem;room_item',
            ),
            271 => 
            array (
                'key' => 'commands.description.cmd_roomitem',
                'value' => ':roomitem [itemid]',
            ),
            272 => 
            array (
                'key' => 'commands.keys.cmd_chatcolor',
                'value' => 'chat;chatcolor',
            ),
            273 => 
            array (
                'key' => 'commands.error.cmd_chatcolor.numbers',
                'value' => 'Positive numbers only please!',
            ),
            274 => 
            array (
                'key' => 'commands.error.cmd_chatcolor.no_number',
                'value' => 'Please provide an color id.',
            ),
            275 => 
            array (
                'key' => 'commands.error.cmd_chatcolor.banned',
                'value' => 'Sorry, that chatcolor is not allowed.',
            ),
            276 => 
            array (
                'key' => 'commands.succes.cmd_chatcolor.set',
                'value' => 'Your new chatcolor is: %chat%',
            ),
            277 => 
            array (
                'key' => 'commands.succes.cmd_chatcolor.reset',
                'value' => 'Chat reset to normal',
            ),
            278 => 
            array (
                'key' => 'commands.description.cmd_chatcolor',
                'value' => ':chat [colorid = 0]',
            ),
            279 => 
            array (
                'key' => 'commands.error.cmd_masspoints.invalid_type',
                'value' => 'Invalid points type. Choose from: %types%',
            ),
            280 => 
            array (
                'key' => 'seasonal.name.0',
                'value' => 'Pixels',
            ),
            281 => 
            array (
                'key' => 'seasonal.name.105',
                'value' => 'Diamonds',
            ),
            282 => 
            array (
                'key' => 'seasonal.name.101',
                'value' => 'Snowflakes',
            ),
            283 => 
            array (
                'key' => 'seasonal.name.104',
                'value' => 'Clouds',
            ),
            284 => 
            array (
                'key' => 'seasonal.name.4',
                'value' => 'Shells',
            ),
            285 => 
            array (
                'key' => 'commands.error.cmd_points.invalid_type',
                'value' => 'Invalid points type. Choose from: %types%',
            ),
            286 => 
            array (
                'key' => 'hween12_fortune.message.0',
                'value' => 'Scotland, the bonnie bonnie banks of loch lomond, and you can become a baron of sealand was founded by roy bates following a legal battle with the',
            ),
            287 => 
            array (
                'key' => 'bots.visitor.no_visits',
                'value' => 'There were no visitors when you were away.',
            ),
            288 => 
            array (
                'key' => 'bots.visitor.visits',
                'value' => 'There were %count% visits since the last time you were away. If you want me to tell them say %positive%',
            ),
            289 => 
            array (
                'key' => 'bots.visitor.list',
                'value' => 'Last %count% visits were: %list%',
            ),
            290 => 
            array (
                'key' => 'generic.time.at',
                'value' => 'at',
            ),
            291 => 
            array (
                'key' => 'bots.butler.given',
                'value' => 'Here is your %key% %username%',
            ),
            292 => 
            array (
                'key' => 'commands.keys.cmd_multi',
                'value' => 'multi',
            ),
            293 => 
            array (
                'key' => 'commands.description.cmd_multi',
                'value' => ':multi',
            ),
            294 => 
            array (
                'key' => 'commands.error.cmd_stalk.not_found',
                'value' => '%user% seems to be offline.',
            ),
            295 => 
            array (
                'key' => 'commands.error.cmd_stalk.not_room',
                'value' => '%user% seems to be outside of an room.',
            ),
            296 => 
            array (
                'key' => 'commands.generic.cmd_stalk.same_room',
                'value' => '%user% seems to be in this room already!',
            ),
            297 => 
            array (
                'key' => 'commands.keys.cmd_stalk',
                'value' => 'stalk;follow;rape',
            ),
            298 => 
            array (
                'key' => 'commands.description.cmd_stalk',
                'value' => ':stalk <username>',
            ),
            299 => 
            array (
                'key' => 'commands.generic.cmd_summonrank.error',
                'value' => 'Potatohead!',
            ),
            300 => 
            array (
                'key' => 'commands.keys.cmd_summonrank',
                'value' => 'summonrank;summonall',
            ),
            301 => 
            array (
                'key' => 'commands.description.cmd_summonrank',
                'value' => ':summonrank <rankid>',
            ),
            302 => 
            array (
                'key' => 'commands.generic.cmd_summon.self',
                'value' => 'I tried something silly.',
            ),
            303 => 
            array (
                'key' => 'commands.generic.cmd_stalk.self',
                'value' => 'I tried something silly',
            ),
            304 => 
            array (
                'key' => 'commands.keys.cmd_bundle',
                'value' => 'bundle;roombundle',
            ),
            305 => 
            array (
                'key' => 'commands.description.cmd_bundle',
                'value' => ':bundle',
            ),
            306 => 
            array (
                'key' => 'commands.error.cmd_bundle.missing_params',
                'value' => 'Proper usage is :bundle <parent_id> <credits> <points> <points_type>',
            ),
            307 => 
            array (
                'key' => 'commands.error.cmd_bundle.duplicate',
                'value' => 'Whoops! Looks like this room is already on sale.',
            ),
            308 => 
            array (
                'key' => 'commands.error.cmd_mute.time',
                'value' => 'Mute time must be atleast 1 second.',
            ),
            309 => 
            array (
                'key' => 'scripter.warning.catalog.count',
                'value' => '%username% tried to buy multiple items of %itemname% from page %pagename% altough these are no set to have offers enabled!',
            ),
            310 => 
            array (
                'key' => 'scripter.warning.look.gender',
                'value' => '%username% tried to script an invalid gender \'%gender%\'',
            ),
            311 => 
            array (
                'key' => 'scripter.warning.catalog.page',
                'value' => '%username% tried to access a page it doesn\'t have permission to: %pagename%',
            ),
            312 => 
            array (
                'key' => 'scripter.warning.guild.buy.owner',
                'value' => '%username% tried to buy a guild for room %roomname% owned by %owner%',
            ),
            313 => 
            array (
                'key' => 'scripter.warning.roomsettings.category.nonexisting',
                'value' => '%username% tried to set its room to a non existing category!',
            ),
            314 => 
            array (
                'key' => 'scripter.warning.roomsettings.category.permission',
                'value' => '%username% tried to set its room to a category it doesn\'t have acces to: %category%',
            ),
            315 => 
            array (
                'key' => 'commands.keys.cmd_event',
                'value' => 'event;roomevent',
            ),
            316 => 
            array (
                'key' => 'commands.description.cmd_event',
                'value' => ':event <message>',
            ),
            317 => 
            array (
                'key' => 'scripter.warning.catalog.badge_display',
                'value' => '%username% tried to buy a badge display with badge %badge% which isn\'t owned!',
            ),
            318 => 
            array (
                'key' => 'scripter.warning.modtools.alert',
            'value' => '%username% tried to send an alert (\'%message%\') without having permission to modtools!',
            ),
            319 => 
            array (
                'key' => 'scripter.warning.modtools.ban',
                'value' => '%username% tried to ban someone trough modtools without having rights to ban!',
            ),
            320 => 
            array (
                'key' => 'scripter.warning.modtools.roomsettings',
                'value' => '%username% tried to edit an room via modtool without having permissions!',
            ),
            321 => 
            array (
                'key' => 'scripter.warning.modtools.ticket.close',
                'value' => '%username% tried to close a ticket without having permission!',
            ),
            322 => 
            array (
                'key' => 'scripter.warning.modtools.kick',
                'value' => '%username% tried to kick someone via modtools without having permission!',
            ),
            323 => 
            array (
                'key' => 'scripter.warning.modtools.ticket.pick',
                'value' => '%username% tried to pick a ticket in modtools without having permission!',
            ),
            324 => 
            array (
                'key' => 'scripter.warning.modtools.ticket.release',
                'value' => '%username% tried to release tickets in modtool without having permission!',
            ),
            325 => 
            array (
                'key' => 'scripter.warning.modtools.chatlog',
                'value' => '%username% requested chatlog in modtool without having permission!',
            ),
            326 => 
            array (
                'key' => 'scripter.warning.modtools.roominfo',
                'value' => '%username% requested roominfo in modtools without permission!',
            ),
            327 => 
            array (
                'key' => 'scripter.warning.userinfo',
                'value' => '%username% requested userinfo in modtools without permission!',
            ),
            328 => 
            array (
                'key' => 'scripter.warning.roomalert',
                'value' => '%username% tried to send a roomalert in modtools without permission!',
            ),
            329 => 
            array (
                'key' => 'commands.succes.cmd_blockalert',
                'value' => 'Alerts are now turned %state%',
            ),
            330 => 
            array (
                'key' => 'generic.on',
                'value' => 'on',
            ),
            331 => 
            array (
                'key' => 'generic.off',
                'value' => 'off',
            ),
            332 => 
            array (
                'key' => 'commands.keys.cmd_blockalert',
                'value' => 'blockalerts;blockalert;ignorealerts;ignore_alerts',
            ),
            333 => 
            array (
                'key' => 'commands.description.cmd_blockalert',
                'value' => ':blockalert',
            ),
            334 => 
            array (
                'key' => 'commands.keys.cmd_faceless',
                'value' => 'faceless;face',
            ),
            335 => 
            array (
                'key' => 'commands.description.cmd_faceless',
                'value' => ':faceless',
            ),
            336 => 
            array (
                'key' => 'commands.keys.cmd_moonwalk',
                'value' => 'moonwalk;mj;moon_walk',
            ),
            337 => 
            array (
                'key' => 'commands.description.cmd_moonwalk',
                'value' => ':moonwalk',
            ),
            338 => 
            array (
                'key' => 'commands.keys.cmd_fastwalk',
                'value' => 'fastwalk;supersonic',
            ),
            339 => 
            array (
                'key' => 'commands.description.cmd_fastwalk',
                'value' => ':fastwalk',
            ),
            340 => 
            array (
                'key' => 'commands.keys.cmd_redeem',
                'value' => 'redeem;exchange',
            ),
            341 => 
            array (
                'key' => 'commands.description.cmd_redeem',
                'value' => ':redeem',
            ),
            342 => 
            array (
                'key' => 'generic.redeemed',
                'value' => 'Redeemed: ',
            ),
            343 => 
            array (
                'key' => 'generic.credits',
                'value' => 'credits',
            ),
            344 => 
            array (
                'key' => 'generic.pixels',
                'value' => 'pixels',
            ),
            345 => 
            array (
                'key' => 'commands.error.cmd_gift.not_a_number',
                'value' => 'Only positive numbers',
            ),
            346 => 
            array (
                'key' => 'commands.keys.cmd_gift',
                'value' => 'gift',
            ),
            347 => 
            array (
                'key' => 'commands.error.cmd_gift.not_found',
                'value' => '%itemid% not found!',
            ),
            348 => 
            array (
                'key' => 'commands.error.cmd_gift.user_not_found',
                'value' => '%username% not found online.',
            ),
            349 => 
            array (
                'key' => 'commands.succes.cmd_gift',
                'value' => 'Send %itemname% to %username%!',
            ),
            350 => 
            array (
                'key' => 'commands.description.cmd_gift',
                'value' => ':gift <username> <itemid>',
            ),
            351 => 
            array (
                'key' => 'commands.keys.cmd_massgift',
                'value' => 'massgift',
            ),
            352 => 
            array (
                'key' => 'commands.description.cmd_massgift',
                'value' => ':massgift <itemid>',
            ),
            353 => 
            array (
                'key' => 'commands.error.cmd_badge.already_owned',
                'value' => '%user% already owns %badge%',
            ),
            354 => 
            array (
                'key' => 'commands.error.cmd_massbadge.no_badge',
                'value' => 'No badge specified!',
            ),
            355 => 
            array (
                'key' => 'commands.keys.cmd_massbadge',
                'value' => 'massbadge;hotelbadge',
            ),
            356 => 
            array (
                'key' => 'commands.generic.cmd_badge.received',
                'value' => 'Yahoooo! You\'ve received a badge!',
            ),
            357 => 
            array (
                'key' => 'commands.keys.cmd_pickall',
                'value' => 'pickall;pickupall',
            ),
            358 => 
            array (
                'key' => 'commands.keys.cmd_ejectall',
                'value' => 'ejectall;ejectfurni',
            ),
            359 => 
            array (
                'key' => 'commands.keys.cmd_update_bots',
                'value' => 'update_bots;updatebots',
            ),
            360 => 
            array (
                'key' => 'commands.description.cmd_ejectall',
                'value' => ':ejectall',
            ),
            361 => 
            array (
                'key' => 'commands.description.cmd_pickall',
                'value' => ':pickall',
            ),
            362 => 
            array (
                'key' => '',
                'value' => '',
            ),
            363 => 
            array (
                'key' => 'commands.keys.cmd_staffalert',
                'value' => 'sa;staffalert',
            ),
            364 => 
            array (
                'key' => 'commands.generic.cmd_staffalert.title',
                'value' => '<b>Staff Alert:</b>',
            ),
            365 => 
            array (
                'key' => 'commands.error.cmd_staffalert.forgot_message',
                'value' => 'Please specify a message to send to staff.',
            ),
            366 => 
            array (
                'key' => 'commands.keys.cmd_plugins',
                'value' => 'plugins',
            ),
            367 => 
            array (
                'key' => 'commands.keys.cmd_update_hotel_view',
                'value' => 'update_view;update_hotel_view;update_hotelview',
            ),
            368 => 
            array (
                'key' => 'commands.description.cmd_update_hotel_view',
                'value' => ':update_hotel_view',
            ),
            369 => 
            array (
                'key' => 'commands.succes.cmd_update_hotel_view',
                'value' => 'Hotelview reloaded!',
            ),
            370 => 
            array (
                'key' => 'commands.succes.cmd_bundle',
                'value' => 'Roombundle succesfully created with page id %id%',
            ),
            371 => 
            array (
                'key' => 'commands.error.cmd_kick.unkickable',
                'value' => '%username% is unkickable!',
            ),
            372 => 
            array (
                'key' => 'camera.disabled',
                'value' => 'Sorry! Camera is disabled :(',
                ),
                373 => 
                array (
                    'key' => 'commands.keys.cmd_update_navigator',
                    'value' => 'update_navigator;update_nav',
                ),
                374 => 
                array (
                    'key' => 'commands.succes.cmd_update_navigator',
                    'value' => 'Navigator succesfully reloaded!',
                ),
                375 => 
                array (
                    'key' => 'commands.description.cmd_plugins',
                    'value' => ':plugins',
                ),
                376 => 
                array (
                    'key' => 'commands.description.cmd_massbadge',
                    'value' => ':massbadge <badge>',
                ),
                377 => 
                array (
                    'key' => 'commands.description.cmd_update_bots',
                    'value' => ':update_bots',
                ),
                378 => 
                array (
                    'key' => 'commands.description.cmd_update_navigator',
                    'value' => ':update_navigator',
                ),
                379 => 
                array (
                    'key' => 'commands.keys.cmd_ip_ban',
                    'value' => 'ipban;banip;ip_ban;ban_ip',
                ),
                380 => 
                array (
                    'key' => 'commands.description.cmd_ip_ban',
                    'value' => ':ipban <username> [reason]',
                ),
                381 => 
                array (
                    'key' => 'commands.keys.cmd_machine_ban',
                    'value' => 'machineban;banmachine;banmac;macban',
                ),
                382 => 
                array (
                    'key' => 'commands.description.cmd_machine_ban',
                    'value' => ':machineban <username> [reason]',
                ),
                383 => 
                array (
                    'key' => 'commands.keys.cmd_super_ban',
                    'value' => 'superban;megaban',
                ),
                384 => 
                array (
                    'key' => 'commands.description.cmd_super_ban',
                    'value' => ':superban <username> [reason]',
                ),
                385 => 
                array (
                    'key' => 'commands.succes.cmd_machine_ban',
                    'value' => '%count% accounts have been MAC banned!',
                ),
                386 => 
                array (
                    'key' => 'commands.succes.cmd_ip_ban',
                    'value' => '%count% accounts have been IP banned!',
                ),
                387 => 
                array (
                    'key' => 'commands.succes.cmd_super_ban',
                    'value' => '%count% accounts have been Super banned!',
                ),
                388 => 
                array (
                    'key' => 'commands.error.cmd_ip_ban.ban_self',
                    'value' => 'You cannot IP Ban yourself!',
                ),
                389 => 
                array (
                    'key' => 'commands.error.cmd_machine_ban.ban_self',
                    'value' => 'You cannot issue yourself a MAC Ban!',
                ),
                390 => 
                array (
                    'key' => 'commands.error.cmd_super_ban.ban_self',
                    'value' => 'You cannot superban yourself!',
                ),
                391 => 
                array (
                    'key' => 'commands.succes.cmd_alert.cmd_connect_camera',
                    'value' => 'Camera reconnected!',
                ),
                392 => 
                array (
                    'key' => 'commands.keys.cmd_connect_camera',
                    'value' => 'connectcamera;connect_camera;cameraconnect',
                ),
                393 => 
                array (
                    'key' => 'commands.error.cmd_disconnect.higher_rank',
                    'value' => 'The Habbo you wanted to disconnect is more important than you are.',
                ),
                394 => 
                array (
                    'key' => 'commands.keys.cmd_diagonal',
                    'value' => 'diagonal;disablediagonal;diagonally',
                ),
                395 => 
                array (
                    'key' => 'commands.description.cmd_diagonal',
                    'value' => ':diagonal',
                ),
                396 => 
                array (
                    'key' => 'commands.succes.cmd_diagonal.disabled',
                    'value' => 'You can no longer walk diagonally!',
                ),
                397 => 
                array (
                    'key' => 'commands.keys.cmd_word_quiz',
                    'value' => 'wordquiz;quiz',
                ),
                398 => 
                array (
                    'key' => 'commands.description.cmd_word_quiz',
                    'value' => ':wordquiz <question>',
                ),
                399 => 
                array (
                    'key' => 'scripter.warning.marketplace.forbidden',
                    'value' => '%username% tried to sell an %itemname% for %credits% which is not allowed to be sold on the marketplace!',
                ),
                400 => 
                array (
                    'key' => 'inventory.full',
                    'value' => 'You\'ve reached the inventory limit. Move furniture out of your inventory before buying more!',
                ),
                401 => 
                array (
                    'key' => 'commands.error.cmd_setmax.invalid_number',
                    'value' => 'Invalid number. Specify a number between 0 and 9999',
                ),
                402 => 
                array (
                    'key' => 'commands.error.cmd_setmax.forgot_number',
                    'value' => 'No number specified. Dork.',
                ),
                403 => 
                array (
                    'key' => 'commands.keys.cmd_setmax',
                    'value' => 'setmax;set_max',
                ),
                404 => 
                array (
                    'key' => 'commands.description.cmd_setmax',
                    'value' => ':setmax <amount>',
                ),
                405 => 
                array (
                    'key' => 'commands.description.cmd_staffalert',
                    'value' => ':sA <message>',
                ),
                406 => 
                array (
                    'key' => 'commands.description.cmd_take_badge',
                    'value' => ':takebadge <username> <badge>',
                ),
                407 => 
                array (
                    'key' => 'commands.keys.cmd_take_badge',
                    'value' => 'takebadge;take_badge;remove_badge;removebadge',
                ),
                408 => 
                array (
                    'key' => 'commands.error.cmd_take_badge.forgot_badge',
                    'value' => 'No badge specified!',
                ),
                409 => 
                array (
                    'key' => 'commands.error.cmd_take_badge.forgot_username',
                    'value' => 'No username specified!',
                ),
                410 => 
                array (
                    'key' => 'commands.error.cmd_take_badge.no_badge',
                    'value' => '%username% does not have %badge%!',
                ),
                411 => 
                array (
                    'key' => 'commands.succes.cmd_take_badge',
                    'value' => 'Badge has been taken!',
                ),
                412 => 
                array (
                    'key' => 'camera.permission',
                    'value' => 'You don\'t have permission to use the camera!',
                ),
                413 => 
                array (
                    'key' => 'floorplan.permission',
                    'value' => 'You don\'t have permission to use the floorplan editor!',
                ),
                414 => 
                array (
                    'key' => 'commands.keys.cmd_update_polls',
                    'value' => 'update_polls;reload_polls',
                ),
                415 => 
                array (
                    'key' => 'commands.description.cmd_update_polls',
                    'value' => ':update_polls',
                ),
                416 => 
                array (
                    'key' => 'commands.keys.cmd_set_poll',
                    'value' => 'setpoll;set_poll',
                ),
                417 => 
                array (
                    'key' => 'commands.description.cmd_set_poll',
                    'value' => ':setpoll <id>',
                ),
                418 => 
                array (
                    'key' => 'commands.succes.cmd_set_poll',
                    'value' => 'Room poll has been updated!',
                ),
                419 => 
                array (
                    'key' => 'commands.error.cmd_set_poll.invalid_number',
                    'value' => 'Please specify a valid number. Use 0 to remove the poll.',
                ),
                420 => 
                array (
                    'key' => 'commands.error.cmd_set_poll.missing_arg',
                    'value' => 'Missing poll id. Use 0 to remove the poll from this room.',
                ),
                421 => 
                array (
                    'key' => 'commands.keys.cmd_roomcredits',
                    'value' => 'roomcredits;room_credits;roomcoins;room_coins',
                ),
                422 => 
                array (
                    'key' => 'commands.description.cmd_roomcredits',
                    'value' => ':roomcredits <amount>',
                ),
                423 => 
                array (
                    'key' => 'commands.keys.cmd_roompixels',
                    'value' => 'roompixels;room_pixels;roomduckets;room_duckets',
                ),
                424 => 
                array (
                    'key' => 'commands.description.cmd_roompixels',
                    'value' => ':roompixels <amount>',
                ),
                425 => 
                array (
                    'key' => 'commands.keys.cmd_roomgift',
                    'value' => 'roomgift;room_gift',
                ),
                426 => 
                array (
                    'key' => 'commands.description.cmd_roomgift',
                    'value' => ':roomgift <item_id> [message]',
                ),
                427 => 
                array (
                    'key' => 'commands.succes.cmd_update_polls',
                    'value' => 'Room polls have been reloaded!',
                ),
                428 => 
                array (
                    'key' => 'commands.error.cmd_set_poll.not_found',
                    'value' => 'Poll %id% not found!',
                ),
                429 => 
                array (
                    'key' => 'commands.error.cmd_unmute.not_specified',
                    'value' => 'No user specified to unmute!',
                ),
                430 => 
                array (
                    'key' => 'commands.error.cmd_unmute.not_found',
                    'value' => '%user% is not online!',
                ),
                431 => 
                array (
                    'key' => 'commands.succes.cmd_unmute',
                    'value' => '%user% has been unmuted!',
                ),
                432 => 
                array (
                    'key' => 'commands.keys.cmd_unmute',
                    'value' => 'unmute',
                ),
                433 => 
                array (
                    'key' => 'commands.description.cmd_unmute',
                    'value' => ':unmute <username>',
                ),
                434 => 
                array (
                    'key' => 'commands.keys.cmd_give_rank',
                    'value' => 'giverank;setrank;give_rank;set_rank',
                ),
                435 => 
                array (
                    'key' => 'commands.description.cmd_give_rank',
                    'value' => ':giverank <username> <rank>',
                ),
                436 => 
                array (
                    'key' => 'commands.error.cmd_give_rank.not_found',
                    'value' => 'Rank %id% was not found!',
                ),
                437 => 
                array (
                    'key' => 'commands.succes.cmd_give_rank.updated',
                    'value' => '%username% has been given the rank %id%',
                ),
                438 => 
                array (
                    'key' => 'commands.error.cmd_give_rank.higher',
                    'value' => 'You cannot rank %username% to a higher rank than you are!',
                ),
                439 => 
                array (
                    'key' => 'commands.error.cmd_give_rank.user_offline',
                    'value' => '%username% is not online!',
                ),
                440 => 
                array (
                    'key' => 'commands.error.cmd_give_rank.missing_rank',
                    'value' => 'Missing rank. Usage: ',
                ),
                441 => 
                array (
                    'key' => 'commands.error.cmd_give_rank.missing_username',
                    'value' => 'Missing username. Usage: ',
                ),
                442 => 
                array (
                    'key' => 'commands.generic.cmd_give_rank.new_rank',
                    'value' => 'Your rank has been updated. Your rank is now %id%',
                ),
                443 => 
                array (
                    'key' => 'commands.keys.cmd_roommute',
                    'value' => 'roommute;room_mute',
                ),
                444 => 
                array (
                    'key' => 'commands.description.cmd_roommute',
                    'value' => ':roommute',
                ),
                445 => 
                array (
                    'key' => 'commands.succes.cmd_roommute.unmuted',
                    'value' => 'The room has been unmuted!',
                ),
                446 => 
                array (
                    'key' => 'commands.succes.cmd_roommute.muted',
                    'value' => 'The room has been muted!',
                ),
                447 => 
                array (
                    'key' => 'commands.keys.cmd_lay',
                    'value' => 'lay',
                ),
                448 => 
                array (
                    'key' => 'commands.description.cmd_lay',
                    'value' => ':lay',
                ),
                449 => 
                array (
                    'key' => 'camera.wait',
                    'value' => 'Please wait %seconds% seconds before making another picture.',
                ),
                450 => 
                array (
                    'key' => 'loggedin.elsewhere',
                    'value' => 'You have been disconnected as you logged in from somewhere else.',
                ),
                451 => 
                array (
                    'key' => 'commands.keys.cmd_mute_pets',
                    'value' => 'mutepets;ignorepets;mute_pets;ignore_pets',
                ),
                452 => 
                array (
                    'key' => 'commands.succes.cmd_mute_pets.ignored',
                    'value' => 'You\'re now ignoring pets.',
                ),
                453 => 
                array (
                    'key' => 'commands.succes.cmd_mute_pets.unignored',
                    'value' => 'You\'re no longer ignoring pets.',
                ),
                454 => 
                array (
                    'key' => 'commands.keys.cmd_mute_bots',
                    'value' => 'mutebots;ignorebots;mute_bots;ignore_bots',
                ),
                455 => 
                array (
                    'key' => 'commands.succes.cmd_mute_bots.ignored',
                    'value' => 'You are now ignoring bots.',
                ),
                456 => 
                array (
                    'key' => 'commands.succes.cmd_mute_bots.unignored',
                    'value' => 'You are no longer ignoring bots.',
                ),
                457 => 
                array (
                    'key' => 'commands.description.cmd_roomalert',
                    'value' => ':roomalert <message>',
                ),
                458 => 
                array (
                    'key' => 'commands.error.cmd_roomalert.empty',
                    'value' => 'Please specify an message!',
                ),
                459 => 
                array (
                    'key' => 'commands.keys.cmd_roomalert',
                    'value' => 'roomalert;room_alert;ra',
                ),
                460 => 
                array (
                    'key' => 'commands.keys.cmd_roompoints',
                    'value' => 'roompoints;room_points',
                ),
                461 => 
                array (
                    'key' => 'commands.generic.cmd_transform.title',
                    'value' => 'The following pets are available:',
                ),
                462 => 
                array (
                    'key' => 'commands.generic.cmd_transform.line',
                    'value' => '%name%',
                ),
                463 => 
                array (
                    'key' => 'commands.description.cmd_transform',
                    'value' => ':transform <name> <race> <color>',
                ),
                464 => 
                array (
                    'key' => 'commands.keys.cmd_transform',
                    'value' => 'transform;becomepet',
                ),
                465 => 
                array (
                    'key' => 'commands.description.cmd_connect_camera',
                    'value' => ':connectcamera',
                ),
                466 => 
                array (
                    'key' => 'commands.description.cmd_roompoints',
                    'value' => ':roompoints <amount>',
                ),
                467 => 
                array (
                    'key' => 'generic.gift.received.anonymous',
                    'value' => 'You\'ve received a gift!',
                ),
                468 => 
                array (
                    'key' => 'generic.gift.received',
                    'value' => '%username% gave you a gift!',
                ),
                469 => 
                array (
                    'key' => 'generic.user.not_found',
                    'value' => '%user% not found.',
                ),
                470 => 
                array (
                    'key' => 'commands.keys.cmd_reload_room',
                    'value' => 'reload_room;reload;reloadroom',
                ),
                471 => 
                array (
                    'key' => 'commands.description.cmd_reload_room',
                    'value' => ':reload_room',
                ),
                472 => 
                array (
                    'key' => 'scripter.warning.packet.closedice',
                    'value' => '%username% tried to change furniture state on non dice using the close dice packet on item %id% %itemname%',
                ),
                473 => 
                array (
                    'key' => 'commands.succes.cmd_update_guildparts',
                    'value' => 'Succes! Guild badgeparts and guild badge imager has been reloaded!',
                ),
                474 => 
                array (
                    'key' => 'ban.info.user_id',
                    'value' => 'User ID: ',
                ),
                475 => 
                array (
                    'key' => 'ban.info.type',
                    'value' => 'Ban Type: ',
                ),
                476 => 
                array (
                    'key' => 'ban.info.reason',
                    'value' => 'Reason: ',
                ),
                477 => 
                array (
                    'key' => 'ban.info.staff_id',
                    'value' => 'Staff ID: ',
                ),
                478 => 
                array (
                    'key' => 'ban.info.date_issued',
                    'value' => 'Date: ',
                ),
                479 => 
                array (
                    'key' => 'ban.info.date_expire',
                    'value' => 'Expire Date: ',
                ),
                480 => 
                array (
                    'key' => 'ban.info.ip',
                    'value' => 'IP: ',
                ),
                481 => 
                array (
                    'key' => 'ban.info.machine',
                    'value' => 'Machine: ',
                ),
                482 => 
                array (
                    'key' => 'command.cmd_userinfo.user_id',
                    'value' => 'ID',
                ),
                483 => 
                array (
                    'key' => 'command.cmd_userinfo.user_name',
                    'value' => 'Username',
                ),
                484 => 
                array (
                    'key' => 'command.cmd_userinfo.motto',
                    'value' => 'Motto',
                ),
                485 => 
                array (
                    'key' => 'command.cmd_userinfo.rank',
                    'value' => 'Rank',
                ),
                486 => 
                array (
                    'key' => 'command.cmd_userinfo.online',
                    'value' => 'Online',
                ),
                487 => 
                array (
                    'key' => 'command.cmd_userinfo.email',
                    'value' => 'Email',
                ),
                488 => 
                array (
                    'key' => 'command.cmd_userinfo.ip_register',
                    'value' => 'Register IP',
                ),
                489 => 
                array (
                    'key' => 'command.cmd_userinfo.ip_current',
                    'value' => 'Current IP',
                ),
                490 => 
                array (
                    'key' => 'command.cmd_userinfo.banned',
                    'value' => 'Banned',
                ),
                491 => 
                array (
                    'key' => 'command.cmd_userinfo.currencies',
                    'value' => 'Currencies',
                ),
                492 => 
                array (
                    'key' => 'command.cmd_userinfo.achievement_score',
                    'value' => 'Score',
                ),
                493 => 
                array (
                    'key' => 'command.cmd_userinfo.credits',
                    'value' => 'Credits',
                ),
                494 => 
                array (
                    'key' => 'command.cmd_userinfo.current_activity',
                    'value' => 'Current Activity',
                ),
                495 => 
                array (
                    'key' => 'command.cmd_userinfo.room',
                    'value' => 'Room',
                ),
                496 => 
                array (
                    'key' => 'command.cmd_userinfo.respect_left',
                    'value' => 'Respect Left',
                ),
                497 => 
                array (
                    'key' => 'command.cmd_userinfo.pet_respect_left',
                    'value' => 'Pet Respect Left',
                ),
                498 => 
                array (
                    'key' => 'command.cmd_userinfo.allow_trade',
                    'value' => 'Allow Trade',
                ),
                499 => 
                array (
                    'key' => 'command.cmd_userinfo.allow_follow',
                    'value' => 'Allow Follow',
                ),
            ));
        \DB::table('emulator_texts')->insert(array (
            0 => 
            array (
                'key' => 'command.cmd_userinfo.allow_friend_request',
                'value' => 'Allow Friend Request',
            ),
            1 => 
            array (
                'key' => 'command.cmd_userinfo.total_bans',
                'value' => 'Total bans',
            ),
            2 => 
            array (
                'key' => 'command.cmd_userinfo.ban_info',
                'value' => 'Recent Ban Info',
            ),
            3 => 
            array (
                'key' => 'command.cmd_userinfo.userinfo',
                'value' => 'Userinfo',
            ),
            4 => 
            array (
                'key' => 'commands.error.cmd_pet_info.pet_not_found',
                'value' => '"Please provide a petname!"',
            ),
            5 => 
            array (
                'key' => 'commands.description.cmd_hal',
                'value' => ':hal <url> <message>',
            ),
            6 => 
            array (
                'key' => 'commands.keys.cmd_hal',
                'value' => 'hal;halink',
            ),
            7 => 
            array (
                'key' => 'commands.succes.cmd_empty_bots.cleared',
                'value' => 'Bots inventory cleared!',
            ),
            8 => 
            array (
                'key' => 'commands.succes.cmd_empty_bots.verify',
                'value' => 'This will remove all bots from your inventory. Type :emptybots %generic.yes% to continue!',
            ),
            9 => 
            array (
                'key' => 'commands.keys.cmd_empty_bots',
                'value' => 'emptybots;empty_bots;deletebots',
            ),
            10 => 
            array (
                'key' => 'commands.description.cmd_empty_bots',
                'value' => ':emptybots',
            ),
            11 => 
            array (
                'key' => 'commands.succes.cmd_empty_pets.cleared',
                'value' => 'Pets inventory cleared!',
            ),
            12 => 
            array (
                'key' => 'commands.succes.cmd_empty_pets.verify',
                'value' => 'This will remove all pets from your inventory. Type :emptypets %generic.yes% to continue!',
            ),
            13 => 
            array (
                'key' => 'commands.keys.cmd_empty_pets',
                'value' => 'emptypets;empty_pets;deletepets',
            ),
            14 => 
            array (
                'key' => 'commands.description.cmd_empty_pets',
                'value' => ':emptypets',
            ),
            15 => 
            array (
                'key' => 'nux.step.1',
                'value' => 'This is the reception button, it will take you to the hotelview.',
            ),
            16 => 
            array (
                'key' => 'nux.step.2',
                'value' => 'This is the navigator button, from here you can visit other rooms.',
            ),
            17 => 
            array (
                'key' => 'nux.step.3',
                'value' => 'To talk, just enter your message here.',
            ),
            18 => 
            array (
                'key' => 'nux.step.4',
                'value' => 'The chat history window lets you read back your previous conversations.',
            ),
            19 => 
            array (
                'key' => 'nux.step.5',
                'value' => 'If you want to change your looks, you can use the wardrobe.',
            ),
            20 => 
            array (
                'key' => 'nux.step.6',
                'value' => 'In the catalog you can purchase furniture to decorate your own room.',
            ),
            21 => 
            array (
                'key' => 'nux.step.7',
                'value' => 'Furniture can be bought with a combination of credits...',
            ),
            22 => 
            array (
                'key' => 'nux.step.8',
                'value' => '...duckets,',
            ),
            23 => 
            array (
                'key' => 'nux.step.9',
                'value' => 'or diamonds.',
            ),
            24 => 
            array (
                'key' => 'nux.step.10',
                'value' => 'All your friends are located down here.',
            ),
            25 => 
            array (
                'key' => 'nux.step.11',
                'value' => 'Lets have some fun and start exploring the hotel!',
            ),
            26 => 
            array (
                'key' => 'alert.superwired.invalid',
                'value' => 'Invalid superwired configuration. Make sure to NOT use <b>;</b> in the product field!',
            ),
            27 => 
            array (
                'key' => 'commands.description.cmd_allow_trading',
                'value' => 'Enables / Disables the tradelock for a user.',
            ),
            28 => 
            array (
                'key' => 'commands.keys.cmd_allow_trading',
                'value' => 'tradelock;blocktrading;disabletrade',
            ),
            29 => 
            array (
                'key' => 'commands.error.cmd_allow_trading.forgot_username',
                'value' => 'Please specify the user to enable / disable trading for.',
            ),
            30 => 
            array (
                'key' => 'commands.error.cmd_allow_trading.forgot_trade',
                'value' => 'Please specify if you want to enable trading for %username%.',
            ),
            31 => 
            array (
                'key' => 'commands.succes.cmd_allow_trading.enabled',
                'value' => 'Trading has been enabled for %username%!',
            ),
            32 => 
            array (
                'key' => 'commands.succes.cmd_allow_trading.disabled',
                'value' => 'Trading has been disabled for %username%!',
            ),
            33 => 
            array (
                'key' => 'commands.error.cmd_allow_trading.user_not_found',
                'value' => 'Target Habbo does not exist.',
            ),
            34 => 
            array (
                'key' => 'commands.error.cmd_allow_trading.incorrect_setting',
                'value' => 'Please use %enabled% to enable trading. Use %disabled% to disable trading.',
            ),
            35 => 
            array (
                'key' => 'commands.error.cmd_give_rank.higher.other',
                'value' => '%username% has an higher rank than you and thus cannot change it!',
            ),
            36 => 
            array (
                'key' => 'commands.error.cmd_unmute.not_muted',
                'value' => '%user% is not muted.',
            ),
            37 => 
            array (
                'key' => 'supporttools.not_ticket_owner',
                'value' => 'You are not the moderator currently handling the ticket.',
            ),
            38 => 
            array (
                'key' => 'commands.success.cmd_setmax',
                'value' => 'Success! Maximum users in this room changed to %value%.',
            ),
            39 => 
            array (
                'key' => 'commands.description.cmd_changename',
                'value' => ':changename',
            ),
            40 => 
            array (
                'key' => 'commands.keys.cmd_changename',
                'value' => 'changename;flagme;change_name;namechange',
            ),
            41 => 
            array (
                'key' => 'commands.error.cmd_credits.user_not_found',
                'value' => 'Could net send %amount% credits to %user%. %user% does not exist.',
            ),
            42 => 
            array (
                'key' => 'commands.error.cmd_pull.invalid',
                'value' => 'You cannot pull %username% to there.',
            ),
            43 => 
            array (
                'key' => 'commands.error.cmd_push.invalid',
                'value' => 'You cannot push %username% to there.',
            ),
            44 => 
            array (
                'key' => 'hotel.wired.superwired.info',
                'value' => 'Superwired Usage Information. Possible reward types:<br/>badge: BADGE CODE<br/>Credits: credits#amount<br/>Pixels: pixels#amount<br/>Points: points#amount<br/>Respect: respect#amount<br/>Furniture: furni#FurnitureID<br/>Catalog Item: cata#CatalogItemID',
            ),
            45 => 
            array (
                'key' => 'hotel.wired.kickexception.unkickable',
                'value' => 'Wired Kick Exception: Unkickable',
            ),
            46 => 
            array (
                'key' => 'hotel.wired.kickexception.owner',
                'value' => 'Wired Kick Exception: Room Owner',
            ),
            47 => 
            array (
                'key' => 'error.catalog.buy.limited.daily.item',
                'value' => 'You cannot purchase any limited %itemname% for today as you have reached the limt of %limit%. Come back tomorrow.',
            ),
            48 => 
            array (
                'key' => 'error.catalog.buy.limited.daily.total',
                'value' => 'You cannot purchase any limited furniture as you have reached the limited of %limit% for today. Come back tomorrow.',
            ),
            49 => 
            array (
                'key' => 'commands.keys.cmd_calendar',
                'value' => 'calendar',
            ),
            50 => 
            array (
                'key' => 'commands.description.cmd_calendar',
                'value' => ':calendar',
            ),
            51 => 
            array (
                'key' => 'scripter.warning.chat.length',
                'value' => '%username% tried to send a room chat message with length %length% while the maximum length is 100 characters.',
            ),
            52 => 
            array (
                'key' => 'commands.keys.cmd_invisible',
                'value' => 'invisible;hideme',
            ),
            53 => 
            array (
                'key' => 'commands.description.cmd_invisible',
                'value' => ':invisible',
            ),
            54 => 
            array (
                'key' => 'commands.succes.cmd_invisible.updated',
                'value' => 'You are now invisible. Reload the room to reset.',
            ),
            55 => 
            array (
                'key' => 'commands.keys.cmd_hidewired',
                'value' => 'hidewired;hidemywired;wiredbegone',
            ),
            56 => 
            array (
                'key' => 'commands.succes.cmd_hidewired.hidden',
                'value' => 'Wired is now hidden.',
            ),
            57 => 
            array (
                'key' => 'commands.succes.cmd_hidewired.shown',
                'value' => 'Wired is now shown.',
            ),
            58 => 
            array (
                'key' => 'commands.errors.cmd_hidewired.permission',
                'value' => 'You don\'t have permission to hide wireds in this room!',
            ),
            59 => 
            array (
                'key' => 'support.ticket.picked.failed',
                'value' => 'Picking issue failedd: <br>Ticket already picked or does not exist!',
            ),
            60 => 
            array (
                'key' => 'camera.error.creation',
                'value' => 'Failed to create your picture. *sadpanda*',
            ),
            61 => 
            array (
                'key' => 'scripter.warning.sticky.size',
                'value' => '%username% tried to create a sticky with %amount% characters where %limit% characters are allowed!',
            ),
            62 => 
            array (
                'key' => 'commands.keys.cmd_promote_offer',
                'value' => 'promoteoffer;promotetargetoffer;promote_offer',
            ),
            63 => 
            array (
                'key' => 'commands.description.cmd_promote_offer',
                'value' => ':promoteoffer <offer_id> [info]',
            ),
            64 => 
            array (
                'key' => 'commands.cmd_promote_offer.info',
                'value' => 'info',
            ),
            65 => 
            array (
                'key' => 'commands.error.cmd_promote_offer.not_found',
                'value' => 'The offer could not be found. Use :promoteoffer info to see a list of active offers.',
            ),
            66 => 
            array (
                'key' => 'commands.cmd_promote_offer.list',
            'value' => 'All available offers (%amount%):<br>%list%',
            ),
            67 => 
            array (
                'key' => 'commands.cmd_promote_offer.list.entry',
                'value' => '%id%: %title% %description%',
            ),
            68 => 
            array (
                'key' => 'commands.succes.cmd_promote_offer',
                'value' => 'The promoted offer has been changed to %id%: %title%',
            ),
            69 => 
            array (
                'key' => 'commands.keys.cmd_filterword',
                'value' => 'filter;banword;filterword',
            ),
            70 => 
            array (
                'key' => 'commands.error.cmd_filterword.missing_word',
                'value' => 'Please specify the word to filter, with an optional replacement.',
            ),
            71 => 
            array (
                'key' => 'commands.error.cmd_filterword.error',
                'value' => 'Failed to add the word to the wordfilter. Possible duplicate?',
            ),
            72 => 
            array (
                'key' => 'commands.succes.cmd_filterword.added',
                'value' => 'Wordfilter word %word% has been added with replacement %replacement%!',
            ),
            73 => 
            array (
                'key' => 'commands.description.cmd_filterword',
                'value' => ':filter <word> [replacement]',
            ),
            74 => 
            array (
                'key' => 'debug.show.headers',
                'value' => '',
            ),
            75 => 
            array (
                'key' => 'generic.tile.not.exists',
                'value' => 'Tile does not exist!',
            ),
            76 => 
            array (
                'key' => 'commands.errors.cmd_give_rank.not_found',
                'value' => 'Rank %id% could not be given to %username% as it does not exist!',
            ),
            77 => 
            array (
                'key' => 'hotel.wired.giveachievement.invalid.points',
                'value' => 'This is not a number!',
            ),
            78 => 
            array (
                'key' => 'hotel.wired.giveachievement.invalid.achievement',
                'value' => '%achievement% does not exist!',
            ),
            79 => 
            array (
                'key' => 'hotel.error.roomads.nopermission',
                'value' => 'You have no permission to modify room ads!',
            ),
            80 => 
            array (
                'key' => 'commands.keys.cmd_update_achievements',
                'value' => 'uach;update_achievements',
            ),
            81 => 
            array (
                'key' => 'commands.description.cmd_update_achievements',
                'value' => ':update_achievements',
            ),
            82 => 
            array (
                'key' => 'commands.succes.cmd_update_achievements.updated',
                'value' => 'Achievements have been reloaded!',
            ),
            83 => 
            array (
                'key' => 'invisible.prevent.chat.error',
                'value' => 'While being invisible you cannot talk.',
            ),
            84 => 
            array (
                'key' => 'commands.succes.cmd_invisible.updated.back',
                'value' => 'You are now visible again.',
            ),
            85 => 
            array (
                'key' => 'commands.error.cmd_mimic.forbidden_clothing',
                'value' => 'The other user has clothing that you do not own yet.',
            ),
            86 => 
            array (
                'key' => 'commands.keys.cmd_update_youtube_playlists',
                'value' => 'update_youtube;update_youtube_playlists',
            ),
            87 => 
            array (
                'key' => 'commands.succes.cmd_update_youtube_playlists',
                'value' => 'YouTube playlists have been refreshed!',
            ),
            88 => 
            array (
                'key' => 'commands.keys.cmd_add_youtube_playlist',
                'value' => 'add_youtube;add_playlist;add_youtube_playlist',
            ),
            89 => 
            array (
                'key' => 'commands.error.cmd_add_youtube_playlist.usage',
                'value' => 'Usage: base_item_id youtube_playlist_id',
            ),
            90 => 
            array (
                'key' => 'commands.error.cmd_add_youtube_playlist.no_base_item',
                'value' => 'A base item with that ID could not be found.',
            ),
            91 => 
            array (
                'key' => 'commands.error.cmd_add_youtube_playlist.failed_playlist',
                'value' => 'Error: unable to fetch the given YouTube playlist.',
            ),
            92 => 
            array (
                'key' => 'commands.succes.cmd_add_youtube_playlist',
                'value' => 'The playlist has been added successfully!',
            ),
            93 => 
            array (
                'key' => 'generic.furniture.bought',
                'value' => 'You just purchased %amount%%is_limited%%itemname%%limited_display%!',
            ),
            94 => 
            array (
                'key' => 'generic.furniture.sold',
                'value' => 'Your %item% has been sold. Click here to claim your credits!',
            ),
            95 => 
            array (
                'key' => 'commands.generic.cmd_commands.text',
                'value' => 'Your Commands',
            ),
            96 => 
            array (
                'key' => 'commands.keys.cmd_stand',
                'value' => 'stand',
            ),
            97 => 
            array (
                'key' => 'commands.description.cmd_setstate',
                'value' => ':ss',
            ),
            98 => 
            array (
                'key' => 'be.cmd_setstate.keys',
                'value' => 'ss;setstate',
            ),
            99 => 
            array (
                'key' => 'be.cmd_setstate.changed',
                'value' => 'Changed state to %extra_data%',
            ),
            100 => 
            array (
                'key' => 'be.cmd_setstate.disabled',
                'value' => 'state removed.',
            ),
            101 => 
            array (
                'key' => 'be.cmd_setstate.not_specified',
                'value' => 'No state set. state must be between 0 - 40.',
            ),
            102 => 
            array (
                'key' => 'commands.description.cmd_buildheight',
                'value' => ':buildheight [height]',
            ),
            103 => 
            array (
                'key' => 'be.cmd_buildheight.keys',
                'value' => 'buildheight;bh',
            ),
            104 => 
            array (
                'key' => 'be.cmd_buildheight.invalid_height',
                'value' => 'Invalid height! Build height must be between 0 - 40!',
            ),
            105 => 
            array (
                'key' => 'be.cmd_buildheight.changed',
                'value' => 'Changed build height to %height%',
            ),
            106 => 
            array (
                'key' => 'be.cmd_buildheight.disabled',
                'value' => 'Build height removed.',
            ),
            107 => 
            array (
                'key' => 'be.cmd_buildheight.not_specified',
                'value' => 'No buildheight set. Height must be between 0 - 40.',
            ),
            108 => 
            array (
                'key' => 'commands.description.cmd_setrotation',
                'value' => ':rot;rotation',
            ),
            109 => 
            array (
                'key' => 'be.cmd_setrotation.keys',
                'value' => 'rot;setrotation',
            ),
            110 => 
            array (
                'key' => 'be.cmd_setrotation.changed',
                'value' => 'Changed Furni Rotation to %rot%',
            ),
            111 => 
            array (
                'key' => 'be.cmd_setrotation.disabled',
                'value' => 'Furni Rotation removed.',
            ),
            112 => 
            array (
                'key' => 'be.cmd_setrotation.not_specified',
                'value' => 'No rotation set. state must be between 0 - 6.',
            ),
            113 => 
            array (
                'key' => 'commands.description.cmd_buyroom',
                'value' => ':buyroom',
            ),
            114 => 
            array (
                'key' => 'commands.description.cmd_sellroom',
                'value' => ':sellroom <diamonds>',
            ),
            115 => 
            array (
                'key' => 'rosie.sellroom.keys',
                'value' => 'sellroom',
            ),
            116 => 
            array (
                'key' => 'rosie.sellroom.removed',
                'value' => 'This room was remove from sale.',
            ),
            117 => 
            array (
                'key' => 'rosie.sellroom.invalid_credits',
                'value' => '%diamonds% diamonds is an invalid amount!',
            ),
            118 => 
            array (
                'key' => 'rosie.sellroom.has_guild',
                'value' => 'Cannot sell this room, room has a guild.',
            ),
            119 => 
            array (
                'key' => 'rosie.sellroom.confirmed',
                'value' => 'This room is now up for sale for %currency% diamonds!',
            ),
            120 => 
            array (
                'key' => 'rosie.sellroom.usage',
                'value' => 'Usage: :sellroom <diamonds>',
            ),
            121 => 
            array (
                'key' => 'rosie.sellroom.forsale',
                'value' => 'This room is being sold by %ownername% for %currency% diamonds! If you wish to buy it write :buyroom confirm.',
            ),
            122 => 
            array (
                'key' => 'rosie.sellroom.notforsale',
                'value' => 'This room is not being sold.',
            ),
            123 => 
            array (
                'key' => 'rosie.sellroom.confirmkey',
                'value' => 'confirm',
            ),
            124 => 
            array (
                'key' => 'rosie.buyroom.has_guild',
                'value' => 'This room has a guild and therefor cannot be bought.',
            ),
            125 => 
            array (
                'key' => 'rosie.sellroom.bubble.thisroom',
                'value' => 'This room is for sale for %currency% diamonds!',
            ),
            126 => 
            array (
                'key' => 'rosie.buyroom.bubble.message',
                'value' => 'This room has been bought from %oldowner% by %newowner%!',
            ),
            127 => 
            array (
                'key' => 'rosie.buyroom.bubble.message.bought',
                'value' => '%roomname% has been bought by %newowner%',
            ),
            128 => 
            array (
                'key' => 'rosie.buyroom.invalid_amount',
                'value' => 'You don\'t have enough diamonds to buy this room!',
            ),
            129 => 
            array (
                'key' => 'rosie.sellroom.owneroffline',
                'value' => 'Owner of this room, %username%, is offline.',
            ),
            130 => 
            array (
                'key' => 'rosie.sellroom.selfbuy',
                'value' => 'Silly %username%. You cannot buy your own room.',
            ),
            131 => 
            array (
                'key' => 'rosie.sellroom.buyroom.usage',
                'value' => 'To buy a room use :%key% %confirmkey%',
            ),
            132 => 
            array (
                'key' => 'rosie.buyroom.keys',
                'value' => 'buyroom',
            ),
            133 => 
            array (
                'key' => 'rosie.roomforsale.alert',
                'value' => 'This room is for sale. Type :buyroom for more information.',
            ),
            134 => 
            array (
                'key' => 'essentials.cmd_pay.keys',
                'value' => 'pay;transfer',
            ),
            135 => 
            array (
                'key' => 'essentials.cmd_pay.incorrect.usage',
                'value' => 'Missing arguments for pay command!',
            ),
            136 => 
            array (
                'key' => 'commands.description.cmd_pay',
                'value' => ':pay <username> <amount> <currency>',
            ),
            137 => 
            array (
                'key' => 'generic.habbo.notfound',
                'value' => 'Habbo not found',
            ),
            138 => 
            array (
                'key' => 'essentials.cmd_pay.self',
                'value' => 'You cannot pay yourself, silly!',
            ),
            139 => 
            array (
                'key' => 'essentials.cmd_pay.invalid_amount',
                'value' => 'Invalid amount! Please use a positive value.',
            ),
            140 => 
            array (
                'key' => 'essentials.cmd_pay.not_enough',
                'value' => 'Cannot pay %username%. You don\'t have %amount% %type%!',
            ),
            141 => 
            array (
                'key' => 'essentials.cmd_pay.invalid_type',
                'value' => 'The currency %type% does not exist!',
            ),
            142 => 
            array (
                'key' => 'essentials.cmd_pay.received',
                'value' => '%username% has paid you %amount% %type%!',
            ),
            143 => 
            array (
                'key' => 'essentials.cmd_pay.transferred',
                'value' => 'You paid %username% %amount% %type%!',
            ),
            144 => 
            array (
                'key' => 'commands.description.cmd_kill',
                'value' => ':kill <username>',
            ),
            145 => 
            array (
                'key' => 'essentials.cmd_kill.keys',
                'value' => 'kill;murder',
            ),
            146 => 
            array (
                'key' => 'essentials.cmd_kill.killmessages.killer',
                'value' => '* Murders %victim% *;* %victim% was slain by %killer% *;* Takes %victim%s head off *',
            ),
            147 => 
            array (
                'key' => 'essentials.cmd_kill.killmessages.victim',
                'value' => '* Bleeds to dead while twitching *; * Oh noes. %killer% took my head off *',
            ),
            148 => 
            array (
                'key' => 'commands.description.cmd_hoverboard',
                'value' => ':hoverboard',
            ),
            149 => 
            array (
                'key' => 'essentials.cmd_hoverboard.keys',
                'value' => 'hoverboard',
            ),
            150 => 
            array (
                'key' => 'essentials.cmd_hoverboard.texts',
                'value' => '* Grabs Blue hoverboard and flies away *;* Jumps onto a pink hoverboard *;* Nice day to ride my yellow hoverboard *;* Pulls out a green hoverboard to explore the hotel on *',
            ),
            151 => 
            array (
                'key' => 'commands.description.cmd_kiss',
                'value' => ':kiss <username>',
            ),
            152 => 
            array (
                'key' => 'essentials.kissedmessages.kissedperson',
                'value' => '* %kissedperson% gets kissed by %kisser% *',
            ),
            153 => 
            array (
                'key' => 'essentials.kissedmessages.kisser',
                'value' => '* Kisses %kissedperson% passionately *',
            ),
            154 => 
            array (
                'key' => 'essentials.cmd_kiss.keys',
                'value' => 'kiss;frenchkiss',
            ),
            155 => 
            array (
                'key' => 'essentials.kissmessages.tofar',
                'value' => '%kissedperson% is too far to kiss!',
            ),
            156 => 
            array (
                'key' => 'commands.description.cmd_hug',
                'value' => ':hug <username>',
            ),
            157 => 
            array (
                'key' => 'essentials.cmd_hug.keys',
                'value' => 'hug;cuddle',
            ),
            158 => 
            array (
                'key' => 'essentials.hugmessages.huggedperson',
                'value' => '* Gets a warm hug from %hugger% *',
            ),
            159 => 
            array (
                'key' => 'essentials.hugmessages.hugger',
                'value' => '* Hugs %huggedperson% tightly *',
            ),
            160 => 
            array (
                'key' => 'essentials.hugmessages.tofar',
                'value' => '%huggedperson% is too far to hug. Get a bit closer and try again!',
            ),
            161 => 
            array (
                'key' => 'commands.description.cmd_welcome',
                'value' => ':welcome <username>',
            ),
            162 => 
            array (
                'key' => 'essentials.cmd_welcome.keys',
                'value' => 'welcome;willkommen;welkom;bienvenue;bienvenida;bem-vindo',
            ),
            163 => 
            array (
                'key' => 'essentials.cmd_welcome.text',
                'value' => 'Welcome %username% to %hotelname%;My name is %greeter_username% and I am %greeter_rank% at %hotelname%;At the moment there are %onlinecount% %hotelplayername%s online!;If you have any further questions feel free to ask me or any of our staff. You can recognize our staff from the badge they wear;Enjoy your stay in %hotelname% %username%!',
            ),
            164 => 
            array (
                'key' => 'commands.description.cmd_disable_effects',
                'value' => ':disableffects',
            ),
            165 => 
            array (
                'key' => 'essentials.cmd_disable_effects.keys',
                'value' => 'antieffects;disableffects',
            ),
            166 => 
            array (
                'key' => 'essentials.cmd_disable_effects.effects_enabled',
                'value' => 'Effects in this room have been enabled!',
            ),
            167 => 
            array (
                'key' => 'essentials.cmd_disable_effects.effects_disabled',
                'value' => 'Effects in this room have been disabled!',
            ),
            168 => 
            array (
                'key' => 'commands.description.cmd_brb',
                'value' => ':brb',
            ),
            169 => 
            array (
                'key' => 'essentials.cmd_brb.keys',
                'value' => 'afk;brb;',
            ),
            170 => 
            array (
                'key' => 'essentials.cmd_brb.brb',
                'value' => '* %username% is now AFK! *',
            ),
            171 => 
            array (
                'key' => 'essentials.cmd_brb.back',
                'value' => '* %username% is now back! *',
            ),
            172 => 
            array (
                'key' => 'essentials.cmd_brb.time',
                'value' => '* %username% has now been away for %time% minutes *',
            ),
            173 => 
            array (
                'key' => 'commands.description.cmd_nuke',
                'value' => ':nuke <username>',
            ),
            174 => 
            array (
                'key' => 'essentials.cmd_nuke.keys',
                'value' => 'nuke;nade;grenade;explode;boom',
            ),
            175 => 
            array (
                'key' => 'essentials.nuke.self',
                'value' => 'You can\'t nuke yourself, silly!',
            ),
            176 => 
            array (
                'key' => 'essentials.nuke.action',
                'value' => '* Launches nuke towards %username% *',
            ),
            177 => 
            array (
                'key' => 'essentials.nuke.nuked',
                'value' => '* %username% gets obliterated *',
            ),
            178 => 
            array (
                'key' => 'essentials.cmd_buildheight.keys',
                'value' => 'buildheight;bh',
            ),
            179 => 
            array (
                'key' => 'essentials.cmd_buildheight.invalid_height',
                'value' => 'Invalid height! Build height must be between 0 - 40!',
            ),
            180 => 
            array (
                'key' => 'essentials.cmd_buildheight.changed',
                'value' => 'Changed build height to %height%',
            ),
            181 => 
            array (
                'key' => 'essentials.cmd_buildheight.disabled',
                'value' => 'Build height removed.',
            ),
            182 => 
            array (
                'key' => 'essentials.cmd_buildheight.not_specified',
                'value' => 'No buildheight set. Height must be between 0 - 40.',
            ),
            183 => 
            array (
                'key' => 'commands.description.cmd_slime',
                'value' => ':slime <username>',
            ),
            184 => 
            array (
                'key' => 'essentials.cmd_slime.keys',
                'value' => 'slime;slimed;goop;nickelodeon',
            ),
            185 => 
            array (
                'key' => 'essentials.cmd_slime.throws',
                'value' => '* Throws slime at %username%s direction *',
            ),
            186 => 
            array (
                'key' => 'essentials.cmd_slime.missed',
                'value' => '* Missed %username%s face *',
            ),
            187 => 
            array (
                'key' => 'essentials.cmd_slime.slimed',
                'value' => '* Gets covered in slime by %username% *',
            ),
            188 => 
            array (
                'key' => 'commands.description.cmd_explain',
                'value' => ':explain <command>',
            ),
            189 => 
            array (
                'key' => 'essentials.cmd_explain.keys',
                'value' => 'explain;commandinfo;commandhelp;aliases',
            ),
            190 => 
            array (
                'key' => 'essentials.cmd_explain.help',
                'value' => 'Specify a command to lookup. Example: :explain mimic',
            ),
            191 => 
            array (
                'key' => 'essentials.cmd_explain.notfound',
                'value' => 'Too bad but \'%command%\'-command does not seem to exist',
            ),
            192 => 
            array (
                'key' => 'essentials.cmd_explain.nopermission',
                'value' => 'You don\'t have permission to use %command%',
            ),
            193 => 
            array (
                'key' => 'essentials.cmd_explain.info',
                'value' => 'Information about the \'%command%\'-command:Usage: %description%Keys / Aliases:%keys%',
            ),
            194 => 
            array (
                'key' => 'essentials.sellroom.keys',
                'value' => 'sellroom',
            ),
            195 => 
            array (
                'key' => 'essentials.sellroom.removed',
                'value' => 'This room was remove from sale.',
            ),
            196 => 
            array (
                'key' => 'essentials.sellroom.invalid_credits',
                'value' => '%credits% credits is an invalid amount!',
            ),
            197 => 
            array (
                'key' => 'essentials.sellroom.has_guild',
                'value' => 'Cannot sell this room, room has a guild.',
            ),
            198 => 
            array (
                'key' => 'essentials.sellroom.confirmed',
                'value' => 'This room is now up for sale for %credits% credits!',
            ),
            199 => 
            array (
                'key' => 'essentials.sellroom.usage',
                'value' => 'Usage: :sellroom <credits>',
            ),
            200 => 
            array (
                'key' => 'essentials.sellroom.forsale',
                'value' => 'This room is being sold by %ownername% for %credits%.',
            ),
            201 => 
            array (
                'key' => 'essentials.sellroom.notforsale',
                'value' => 'This room is not being sold.',
            ),
            202 => 
            array (
                'key' => 'essentials.sellroom.confirmkey',
                'value' => 'confirm',
            ),
            203 => 
            array (
                'key' => 'essentials.buyroom.has_guild',
                'value' => 'This room has a guild and therefor cannot be bought.',
            ),
            204 => 
            array (
                'key' => 'essentials.sellroom.owneroffline',
                'value' => 'Owner of this room, %username%, is offline.',
            ),
            205 => 
            array (
                'key' => 'essentials.sellroom.selfbuy',
                'value' => 'Silly %username%. You cannot buy your own room.',
            ),
            206 => 
            array (
                'key' => 'essentials.sellroom.buyroom.usage',
                'value' => 'To buy a room use :%key% %confirmkey%',
            ),
            207 => 
            array (
                'key' => 'essentials.buyroom.keys',
                'value' => 'buyroom',
            ),
            208 => 
            array (
                'key' => 'commands.description.cmd_closedice',
                'value' => ':closedice [all]',
            ),
            209 => 
            array (
                'key' => 'essentials.cmd_closedice.keys',
                'value' => 'closedice;cd;sluitdices',
            ),
            210 => 
            array (
                'key' => 'essentials.cmd_closedice.keywordall',
                'value' => 'all',
            ),
            211 => 
            array (
                'key' => 'essentials.cmd_closedice.closed',
                'value' => '* Closes %count% dices *',
            ),
            212 => 
            array (
                'key' => 'commands.description.cmd_set',
                'value' => ':set info',
            ),
            213 => 
            array (
                'key' => 'essentials.cmd_set.keys',
                'value' => 'set;changefurni',
            ),
            214 => 
            array (
                'key' => 'essentials.cmd_set.error',
                'value' => 'Use \':set info\' for more information!',
            ),
            215 => 
            array (
                'key' => 'essentials.cmd_set.invalid',
                'value' => 'Invalid item id %value%',
            ),
            216 => 
            array (
                'key' => 'essentials.cmd_set.notfound',
                'value' => 'Item not found.',
            ),
            217 => 
            array (
                'key' => 'essentials.cmd_set.wrong',
                'value' => 'Something went wrong.',
            ),
            218 => 
            array (
                'key' => 'essentials.cmd_set.succes',
                'value' => 'Updated!',
            ),
            219 => 
            array (
                'key' => 'commands.description.cmd_furnidata',
                'value' => ':furnidata',
            ),
            220 => 
            array (
                'key' => 'furnidata.cmd_furnidata.keys',
                'value' => 'furnidata',
            ),
            221 => 
            array (
                'key' => 'furnidata.cmd_furnidata.on',
                'value' => 'Successfully turned furnidata on!',
            ),
            222 => 
            array (
                'key' => 'furnidata.cmd_furnidata.off',
                'value' => 'Successfully turned furnidata off!',
            ),
            223 => 
            array (
                'key' => 'bubblealerts.notif_friendonline.message',
                'value' => '%username% just logged in! Say hi!',
            ),
            224 => 
            array (
                'key' => 'bubblealerts.notif_mention.message',
                'value' => '%username% mentioned you. Click to visit %username% in %room_name%!',
            ),
            225 => 
            array (
                'key' => 'commands.keys.cmd_softkick',
                'value' => 'softkick',
            ),
            226 => 
            array (
                'key' => 'commands.error.cmd_softkick_not_found',
                'value' => '%user% not found',
            ),
            227 => 
            array (
                'key' => 'commands.error.cmd_softkick_error_self',
                'value' => 'You can not softkick yourself!',
            ),
            228 => 
            array (
                'key' => 'generic.error.ignore_higher_rank',
                'value' => 'You can\'t ignore this user.',
            ),
            229 => 
            array (
                'key' => 'error.bots.max.inventory',
                'value' => 'You can\'t buy or pickup anymore bots until you place some, the maximum amount of bots you are allowed is %amount%.',
            ),
            230 => 
            array (
                'key' => 'scripter.warning.item.bgtoner.permission',
                'value' => '%username% tried to change the background toner without rights in %room% owned by %owner%',
            ),
            231 => 
            array (
                'key' => 'commands.keys.cmd_subscription',
                'value' => 'subscription;sub',
            ),
            232 => 
            array (
                'key' => 'commands.error.cmd_subscription.invalid_action',
                'value' => 'Invalid action specified. Must be add, +, remove or -',
            ),
            233 => 
            array (
                'key' => 'commands.error.cmd_subscription.type_not_found',
                'value' => '%subscription% is not a valid subscription type',
            ),
            234 => 
            array (
                'key' => 'commands.error.cmd_subscription.invalid_params_time',
                'value' => 'Invalid time span, try: x minutes/days/weeks/months',
            ),
            235 => 
            array (
                'key' => 'commands.error.cmd_subscription.success_add_time',
                'value' => 'Successfully added %time% seconds to %subscription% on %user%',
            ),
            236 => 
            array (
                'key' => 'commands.error.cmd_subscription.user_not_have',
                'value' => '%user% does not have the %subscription% subscription',
            ),
            237 => 
            array (
                'key' => 'commands.error.cmd_subscription.success_remove_time',
                'value' => 'Successfully removed %time% seconds from %subscription% on %user%',
            ),
            238 => 
            array (
                'key' => 'commands.error.cmd_subscription.success_remove_sub',
                'value' => 'Successfully removed %subscription% sub from %user%',
            ),
            239 => 
            array (
                'key' => 'commands.error.cmd_subscription.user_not_found',
                'value' => '%user% was not found',
            ),
            240 => 
            array (
                'key' => 'commands.error.cmd_subscription.invalid_params',
                'value' => 'Invalid command format',
            ),
            241 => 
            array (
                'key' => 'subscriptions.hc.payday.message',
                'value' => 'Woohoo HC Payday has arrived! You have received %amount% credits to your purse. Enjoy!',
            ),
            242 => 
            array (
                'key' => 'hotel.room.tent.prefix',
                'value' => 'Tent',
            ),
            243 => 
            array (
                'key' => 'commands.error.cmd_roombadge.no_badge',
                'value' => 'No badge specified!',
            ),
            244 => 
            array (
                'key' => 'commands.keys.cmd_roombadge',
                'value' => 'roombadge',
            ),
            245 => 
            array (
                'key' => 'commands.description.cmd_roombadge',
                'value' => ':roombadge <badge>',
            ),
            246 => 
            array (
                'key' => 'wired.variable.name',
                'value' => '%name%',
            ),
            247 => 
            array (
                'key' => 'wired.variable.roomname',
                'value' => '%roomname%',
            ),
            248 => 
            array (
                'key' => 'wired.variable.user_count',
                'value' => '%user_count%',
            ),
            249 => 
            array (
                'key' => 'wired.variable.owner',
                'value' => '%owner%',
            ),
            250 => 
            array (
                'key' => 'wired.variable.item_count',
                'value' => '%item_count%',
            ),
            251 => 
            array (
                'key' => 'hween12_fortune.message.1',
                'value' => 'Many nights i prayed for this, to let my work begin, first we take berlin.',
            ),
            252 => 
            array (
                'key' => 'hween12_fortune.message.2',
                'value' => 'But she doesn\'t believe you.',
            ),
            253 => 
            array (
                'key' => 'hween12_fortune.message.3',
                'value' => 'I like big butts and i cannot lie.',
            ),
            254 => 
            array (
                'key' => 'hween12_fortune.message.4',
                'value' => 'A job today means work tomorrow.',
            ),
            255 => 
            array (
                'key' => 'hween12_fortune.message.5',
                'value' => 'Your friend may claim to love you, but really he or them or that which cannot be spoken aloud.',
            ),
            256 => 
            array (
                'key' => 'hween12_fortune.message.6',
                'value' => 'You have to believe in life after love.',
            ),
            257 => 
            array (
                'key' => 'hween12_fortune.message.7',
                'value' => 'We sent a team to locate it last year, but they never returned.',
            ),
            258 => 
            array (
                'key' => 'hween12_fortune.message.8',
                'value' => 'You know the way to stop me, but you don\'t know what he\'s after',
            ),
            259 => 
            array (
                'key' => 'hween12_fortune.message.9',
                'value' => 'You will become a hip-hop beauty queen and be abducted by aliens.',
            ),
            260 => 
            array (
                'key' => 'hween12_fortune.message.10',
                'value' => 'Yes kids, there was piracy long before bitorrent.roy then looked for and he found it and',
            ),
            261 => 
            array (
                'key' => 'hween12_fortune.message.11',
                'value' => 'He doesn\'t care.',
            ),
            262 => 
            array (
                'key' => 'xmas14_santateller.message.0',
                'value' => 'That elf and i are just friends.',
            ),
            263 => 
            array (
                'key' => 'xmas14_santateller.message.1',
                'value' => 'Did you know i have no idea how i\'m going to deliver all these presents.',
            ),
            264 => 
            array (
                'key' => 'xmas14_santateller.message.2',
                'value' => 'Santa says relax.',
            ),
            265 => 
            array (
                'key' => 'xmas14_santateller.message.3',
                'value' => 'What do snowmen eat for lunch? ice bergers.',
            ),
            266 => 
            array (
                'key' => 'xmas14_santateller.message.4',
                'value' => 'It\'s not about what\'s under the tree, it\'s about who\'s around it.',
            ),
            267 => 
            array (
                'key' => 'xmas14_santateller.message.5',
                'value' => 'Don\'t get your tinsel in a tangle.',
            ),
            268 => 
            array (
                'key' => 'xmas14_santateller.message.6',
                'value' => 'Close your eyes and listen to the waves.',
            ),
            269 => 
            array (
                'key' => 'xmas14_santateller.message.7',
                'value' => 'Hoping you have a zen filled holiday season.',
            ),
            270 => 
            array (
                'key' => 'xmas14_santateller.message.8',
                'value' => 'The seashell is whispering sweet nothings in my ear. oh, its got a crab inside!',
            ),
            271 => 
            array (
                'key' => 'xmas14_santateller.message.9',
                'value' => 'Merry fish-mas.',
            ),
            272 => 
            array (
                'key' => 'xmas14_santateller.message.10',
                'value' => 'Everyday is a surprise.',
            ),
            273 => 
            array (
                'key' => 'xmas14_santateller.message.11',
                'value' => 'The sound of the ocean brings me inner calm. it also makes me need the bathroom.',
            ),
            274 => 
            array (
                'key' => 'wildwest_stocks.message.0',
                'value' => 'Never trust a man without spurs on his boots.',
            ),
            275 => 
            array (
                'key' => 'wildwest_stocks.message.1',
                'value' => 'Mind tightening my belt, i\'ve recently lost a little weight.',
            ),
            276 => 
            array (
                'key' => 'wildwest_stocks.message.2',
                'value' => 'I call the vulture that took my eye steven mcgillicudy.',
            ),
            277 => 
            array (
                'key' => 'wildwest_stocks.message.3',
                'value' => 'In the summer the townsfolk put on a puppet show in my pocket. one of my fingers fell off.',
            ),
            278 => 
            array (
                'key' => 'wildwest_stocks.message.4',
                'value' => 'If you see a cactus running around in circles you tell it i\'m coming for it as soon as i get outta here',
            ),
            279 => 
            array (
                'key' => 'wildwest_stocks.message.5',
                'value' => 'Kick off your boots and stay a while.',
            ),
            280 => 
            array (
                'key' => 'wildwest_stocks.message.6',
                'value' => 'Sometimes i look into the night sky and sing, "my heart will go on".',
            ),
            281 => 
            array (
                'key' => 'wildwest_stocks.message.7',
                'value' => 'I often dream about swimming in a sea of chocolate milk but then i remember i\'m lactose intolerant and i can\'t swim.',
            ),
            282 => 
            array (
                'key' => 'wildwest_stocks.message.8',
                'value' => 'I know 83 digits of pi and not one is correct.',
            ),
            283 => 
            array (
                'key' => 'wildwest_stocks.message.9',
                'value' => 'What i wouldn\'t give to have my ears back.',
            ),
            284 => 
            array (
                'key' => 'wildwest_stocks.message.10',
                'value' => 'You\'re darn tootin\' right!',
            ),
            285 => 
            array (
                'key' => 'wildwest_stocks.message.11',
                'value' => 'I really need to go to the bathroom.',
            ),
            286 => 
            array (
                'key' => 'wildwest_stocks.message.12',
                'value' => 'I drink my own tears for water.',
            ),
            287 => 
            array (
                'key' => 'wildwest_stocks.message.13',
                'value' => 'I know 83 digits of pi and not one is correct.',
            ),
            288 => 
            array (
                'key' => 'wildwest_stocks.message.14',
                'value' => 'The head nurse said to leave me alone...',
            ),
            289 => 
            array (
                'key' => 'wildwest_stocks.message.15',
                'value' => 'I\'m selling these fine leather hats.',
            ),
            290 => 
            array (
                'key' => 'wildwest_stocks.message.16',
                'value' => 'If the glove doesn\'t fit, you must aquit!',
            ),
            291 => 
            array (
                'key' => 'wildwest_stocks.message.17',
                'value' => 'It took me years to figure out how to pronounce "p" without lips.',
            ),
            292 => 
            array (
                'key' => 'wildwest_stocks.message.18',
                'value' => 'Life was simpler when i could walk away from my problems.',
            ),
            293 => 
            array (
                'key' => 'wildwest_stocks.message.19',
                'value' => 'I only took a piece of gum and now they want to flog me!',
            ),
            294 => 
            array (
                'key' => 'pirate_parrot.message.0',
                'value' => 'Don\'t you go thinking no thoughts about plucking me feathers now i\'ll \'av your eyes out!',
            ),
            295 => 
            array (
                'key' => 'pirate_parrot.message.1',
                'value' => 'Go bring me a flagon a’ bubble juice, ye scurvy dog!',
            ),
            296 => 
            array (
                'key' => 'pirate_parrot.message.2',
                'value' => 'Ya land lubber, might be i got a story too tell ya!',
            ),
            297 => 
            array (
                'key' => 'pirate_parrot.message.3',
                'value' => 'This ol’ sea dog sing ye a sea shanty about the time i took a ship from a unsuspecting little... oh wait, that\'ll be you... soon.',
            ),
            298 => 
            array (
                'key' => 'pirate_parrot.message.5',
                'value' => 'Arr arr arr, don\'t be silly, we weren\'t talking about mutiny. we were talking about ye booti-ny... don\'t give me that look ye scalywag.',
            ),
            299 => 
            array (
                'key' => 'pirate_parrot.message.6',
                'value' => 'Blow me down! look at that there plank to a watery grave so ye know.',
            ),
            300 => 
            array (
                'key' => 'pirate_parrot.message.7',
                'value' => 'Ho ho and a bottle o\' bubble! hic! rawk!',
            ),
            301 => 
            array (
                'key' => 'pirate_parrot.message.8',
                'value' => 'Can do what ya like with the ship, but when i get it back i\'m throwing all ya things over-board. rawk!',
            ),
            302 => 
            array (
                'key' => 'pirate_parrot.message.9',
                'value' => 'Ye think i\'m ya friend, keep in mind friends can always betray ye, enemies are the ones that stay the same.',
            ),
            303 => 
            array (
                'key' => 'pirate_parrot.message.10',
                'value' => 'Walked a man down that there treasure! it\'ll be mine when i make ye walk the plank...',
            ),
            304 => 
            array (
                'key' => 'pirate_parrot.message.11',
                'value' => 'May \'av a lot ta say but there aint nuttin\' that will make me tell ye where me buried treasure o\' credits is! is that a cracker',
            ),
            305 => 
            array (
                'key' => 'pirate_parrot.message.12',
                'value' => 'Can do what ya like with the ship, but when i make ye walk the plank...',
            ),
            306 => 
            array (
                'key' => 'pirate_parrot.message.13',
                'value' => 'Ye flying the old jolly bobba, better \'av the gaol to be a real pirate matey!',
            ),
            307 => 
            array (
                'key' => 'pirate_parrot.message.14',
                'value' => 'A lot ta say but there aint nuttin\' that will make me tell ye where me buried treasure o\' credits is! is that a cracker ya got',
            ),
            308 => 
            array (
                'key' => 'pirate_parrot.message.15',
                'value' => 'Blow me down! look at that there plank to a watery grave so ye better watch where i be swooping.',
            ),
            309 => 
            array (
                'key' => 'pirate_parrot.message.16',
                'value' => 'Jones aint got nuttin\' on me, bucko, ye can bet ye breeches.',
            ),
            310 => 
            array (
                'key' => 'fun.cmd_slime.keys',
                'value' => 'slime;slimed;goop;nickelodeon',
            ),
            311 => 
            array (
                'key' => 'fun.cmd_slime.throws',
                'value' => '* Throws slime at %username%s direction *',
            ),
            312 => 
            array (
                'key' => 'fun.cmd_slime.missed',
                'value' => '* Missed %username%s face *',
            ),
            313 => 
            array (
                'key' => 'fun.cmd_slime.slimed',
                'value' => '* Gets covered in slime by %username% *',
            ),
            314 => 
            array (
                'key' => 'fun.cmd_hug.keys',
                'value' => 'hug;cuddle',
            ),
            315 => 
            array (
                'key' => 'fun.hugmessages.huggedperson',
                'value' => '* Gets a warm hug from %hugger% *',
            ),
            316 => 
            array (
                'key' => 'fun.hugmessages.hugger',
                'value' => '* Hugs %huggedperson% tightly *',
            ),
            317 => 
            array (
                'key' => 'fun.hugmessages.tofar',
                'value' => '%huggedperson% is too far to hug. Get a bit closer and try again!',
            ),
            318 => 
            array (
                'key' => 'fun.cmd_nuke.keys',
                'value' => 'nuke;nade;grenade;explode;boom',
            ),
            319 => 
            array (
                'key' => 'fun.nuke.self',
                'value' => 'You can\'t nuke yourself, silly!',
            ),
            320 => 
            array (
                'key' => 'fun.nuke.action',
                'value' => '* Launches nuke towards %username% *',
            ),
            321 => 
            array (
                'key' => 'fun.nuke.nuked',
                'value' => '* %username% gets obliterated *',
            ),
            322 => 
            array (
                'key' => 'commands.description.cmd_afk',
                'value' => ':afk',
            ),
            323 => 
            array (
                'key' => 'fun.cmd_afk.keys',
                'value' => 'brb;afk;',
            ),
            324 => 
            array (
                'key' => 'fun.cmd_afk.afk',
                'value' => '* %username% is now AFK! *',
            ),
            325 => 
            array (
                'key' => 'fun.cmd_afk.back',
                'value' => '* %username% is now back! *',
            ),
            326 => 
            array (
                'key' => 'fun.cmd_afk.time',
                'value' => '* %username% has now been away for %time% minutes *',
            ),
            327 => 
            array (
                'key' => 'fun.cmd_tptome.keys',
                'value' => 'tptome;tp',
            ),
            328 => 
            array (
                'key' => 'commands.description.cmd_tptome',
                'value' => ':tptome <username>',
            ),
            329 => 
            array (
                'key' => 'fun.error.not_found',
                'value' => 'Could not find %user%',
            ),
            330 => 
            array (
                'key' => 'fun.error.tp_self',
                'value' => 'You cannot teleport yourself in front of you',
            ),
            331 => 
            array (
                'key' => 'commands.success.cmd_tptome.tptome',
                'value' => '* Teleports %user% to %gender_name% *',
            ),
            332 => 
            array (
                'key' => 'fun.cmd_superpush.keys',
                'value' => 'spush;superpush',
            ),
            333 => 
            array (
                'key' => 'fun.cmd_superpull.keys',
                'value' => 'spull;superpull',
            ),
        ));
        
        
    }
}