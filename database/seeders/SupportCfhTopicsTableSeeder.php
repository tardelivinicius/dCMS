<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupportCfhTopicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('support_cfh_topics')->delete();
        
        \DB::table('support_cfh_topics')->insert(array (
            0 => 
            array (
                'action' => 'auto_ignore',
                'auto_reply' => 'Thank you for reporting someone for sexual talk. We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'. We will take a look at this.',
                'category_id' => 1,
                'default_sanction' => 0,
                'id' => 1,
                'ignore_target' => '0',
                'name_external' => 'Sexual talk',
                'name_internal' => 'cyber.sextalk',
            ),
            1 => 
            array (
                'action' => 'auto_ignore',
                'auto_reply' => 'Thank you for reporting someone for sexual talk. We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'. We will take a look at this.',
                'category_id' => 1,
                'default_sanction' => 0,
                'id' => 2,
                'ignore_target' => '0',
                'name_external' => 'Asking for cyber sex',
                'name_internal' => 'cyber.asking',
            ),
            2 => 
            array (
                'action' => 'auto_ignore',
                'auto_reply' => 'Thank you for reporting someone for sexual talk. We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'. We will take a look at this.',
                'category_id' => 1,
                'default_sanction' => 0,
                'id' => 3,
                'ignore_target' => '0',
                'name_external' => 'Offering cyber sex',
                'name_internal' => 'cyber.offering',
            ),
            3 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 1,
                'default_sanction' => 0,
                'id' => 4,
                'ignore_target' => '0',
                'name_external' => 'Sending porn',
                'name_internal' => 'cyber.porn',
            ),
            4 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 2,
                'default_sanction' => 0,
                'id' => 5,
                'ignore_target' => '0',
                'name_external' => 'Promoting scam sites',
                'name_internal' => 'scamming.scamsite',
            ),
            5 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 2,
                'default_sanction' => 0,
                'id' => 6,
                'ignore_target' => '0',
                'name_external' => 'Selling virtual items for real money',
                'name_internal' => 'scamming.sellingirl',
            ),
            6 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 2,
                'default_sanction' => 0,
                'id' => 7,
                'ignore_target' => '0',
                'name_external' => 'Stealing furni or coins',
                'name_internal' => 'scamming.stealingfurni',
            ),
            7 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 2,
                'default_sanction' => 0,
                'id' => 8,
                'ignore_target' => '0',
                'name_external' => 'Stealing account information',
                'name_internal' => 'scamming.account',
            ),
            8 => 
            array (
                'action' => 'auto_reply',
                'auto_reply' => 'Habbo does not get involved with the casino community due to cases being complex and hard to track. Players gamble at their own risk. When the fun stops, stop.',
                'category_id' => 2,
                'default_sanction' => 0,
                'id' => 9,
                'ignore_target' => '0',
                'name_external' => 'Casino scamming',
                'name_internal' => 'scamming.casino',
            ),
            9 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 3,
                'default_sanction' => 0,
                'id' => 10,
                'ignore_target' => '0',
                'name_external' => 'Room name',
                'name_internal' => 'badwords.roomname',
            ),
            10 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 3,
                'default_sanction' => 0,
                'id' => 11,
                'ignore_target' => '0',
                'name_external' => 'Room description',
                'name_internal' => 'badwords.roomdesc',
            ),
            11 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 3,
                'default_sanction' => 0,
                'id' => 12,
                'ignore_target' => '0',
                'name_external' => 'Username',
                'name_internal' => 'badwords.username',
            ),
            12 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 3,
                'default_sanction' => 0,
                'id' => 13,
                'ignore_target' => '0',
                'name_external' => 'Moto',
                'name_internal' => 'badwords.motto',
            ),
            13 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 3,
                'default_sanction' => 0,
                'id' => 14,
                'ignore_target' => '0',
                'name_external' => 'Group or event name',
                'name_internal' => 'badwords.grouporevent',
            ),
            14 => 
            array (
                'action' => 'auto_reply',
                'auto_reply' => 'Thanks for your report. Please call a moderator to the room by following these steps.
1. Under the Help window click on \'Get immediate help\'.
2. Then click on \'Chat to a Moderator\'.
3. Let them know that somebody is trolling in the room.
4. A moderator will open a chat session with you to resolve the problem.',
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 15,
                'ignore_target' => '0',
                'name_external' => 'Trolling',
                'name_internal' => 'badbehavior.trolling',
            ),
            15 => 
            array (
                'action' => 'auto_reply',
                'auto_reply' => 'Thanks for your report. Please call a moderator to the room by following these steps.
1. Under the Help window click on \'Get immediate help\'.
2. Then click on \'Chat to a Moderator\'.
3. Let them know that somebody is blocking in the room.
4. A moderator will open a chat session with you to resolve the problem.',
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 16,
                'ignore_target' => '0',
                'name_external' => 'Blocking',
                'name_internal' => 'badbehavior.blocking',
            ),
            16 => 
            array (
                'action' => 'auto_reply',
                'auto_reply' => 'Thanks for your report. Please call a moderator to the room by following these steps.
1. Under the Help window click on \'Get immediate help\'.
2. Then click on \'Chat to a Moderator\'.
3. Let them know that somebody is flooding the room.
4. A moderator will open a chat session with you to resolve the problem.',
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 17,
                'ignore_target' => '0',
                'name_external' => 'Flooding',
                'name_internal' => 'badbehavior.flooding',
            ),
            17 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 18,
                'ignore_target' => '0',
                'name_external' => 'Too young for Habbo',
                'name_internal' => 'badbehavior.young',
            ),
            18 => 
            array (
                'action' => 'mods',
                'auto_reply' => NULL,
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 19,
                'ignore_target' => '0',
                'name_external' => 'Staff impersonation',
                'name_internal' => 'badbehavior.staffimpersonation',
            ),
            19 => 
            array (
                'action' => 'auto_ignore',
                'auto_reply' => 'We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'',
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 20,
                'ignore_target' => '0',
                'name_external' => 'Offensive language',
                'name_internal' => 'badbehavior.offensive',
            ),
            20 => 
            array (
                'action' => 'auto_ignore',
                'auto_reply' => 'We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'',
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 21,
                'ignore_target' => '0',
                'name_external' => 'Hate speech',
                'name_internal' => 'badbehavior.hate',
            ),
            21 => 
            array (
                'action' => 'auto_ignore',
                'auto_reply' => 'We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'',
                'category_id' => 4,
                'default_sanction' => 0,
                'id' => 22,
                'ignore_target' => '0',
                'name_external' => 'Violence',
                'name_internal' => 'badbehavior.violence',
            ),
            22 => 
            array (
                'action' => 'auto_reply',
            'auto_reply' => 'It is currently not possible to change your username in Habbo. When that feature becomes available you\'ll be sure to know! :)',
            'category_id' => 5,
            'default_sanction' => 0,
            'id' => 23,
            'ignore_target' => '0',
            'name_external' => 'Change username',
            'name_internal' => 'account.username',
        ),
        23 => 
        array (
            'action' => 'auto_reply',
            'auto_reply' => 'Thanks for your report. Unfortunately Game Moderators cannot help with payment issues. Please report your payment issue to us at the help desk on the website where our team of specialists will get back to you.',
            'category_id' => 5,
            'default_sanction' => 0,
            'id' => 24,
            'ignore_target' => '0',
            'name_external' => 'Payment issues',
            'name_internal' => 'accunt.payment',
        ),
        24 => 
        array (
            'action' => 'auto_reply',
            'auto_reply' => 'Thanks for your report. Unfortunately Game Moderators cannot help with payment issues. Please report your payment issue to us at the help desk on the website where our team of specialists will get back to you.',
            'category_id' => 5,
            'default_sanction' => 0,
            'id' => 25,
            'ignore_target' => '0',
            'name_external' => 'Earn gems',
            'name_internal' => 'account.earn',
        ),
        25 => 
        array (
            'action' => 'auto_reply',
            'auto_reply' => 'Please use the helpdesk on the website for help with this matter.',
            'category_id' => 5,
            'default_sanction' => 0,
            'id' => 26,
            'ignore_target' => '0',
            'name_external' => 'Something else',
            'name_internal' => 'account.other',
        ),
        26 => 
        array (
            'action' => 'auto_reply',
        'auto_reply' => 'We work very hard to ensure that Habbo is safe for all that play. This involves using only the best security technology. We would like to thank you for reporting this to us, but we don\'t think this person is capable of hacking Habbo :)',
        'category_id' => 6,
        'default_sanction' => 0,
        'id' => 27,
        'ignore_target' => '0',
        'name_external' => 'Threat to hack Habbo',
        'name_internal' => 'hacking.game',
    ),
    27 => 
    array (
        'action' => 'auto_reply',
        'auto_reply' => 'There is no way that another Habbo can hack you without knowing your Habbo password or Habbo email address. Please make sure that you are using a secure password which is not easy to remember. We recommend passwords which include letters and numbers such as fl0w3rs. If you wanted to be even more secure you could include a special letter, such as fl0w3r$.

To change your Habbo password go to your profile on the website.',
        'category_id' => 6,
        'default_sanction' => 0,
        'id' => 28,
        'ignore_target' => '0',
        'name_external' => 'Threat to hack a player',
        'name_internal' => 'hacking.player',
    ),
    28 => 
    array (
        'action' => 'mods',
        'auto_reply' => NULL,
        'category_id' => 6,
        'default_sanction' => 0,
        'id' => 29,
        'ignore_target' => '0',
        'name_external' => 'Scripted furniture',
        'name_internal' => 'hacking.furni',
    ),
    29 => 
    array (
        'action' => 'mods',
        'auto_reply' => NULL,
        'category_id' => 6,
        'default_sanction' => 0,
        'id' => 30,
        'ignore_target' => '0',
        'name_external' => 'Scripted room',
        'name_internal' => 'hacking.room',
    ),
    30 => 
    array (
        'action' => 'mods',
        'auto_reply' => NULL,
        'category_id' => 6,
        'default_sanction' => 0,
        'id' => 31,
        'ignore_target' => '0',
        'name_external' => 'Scripted character',
        'name_internal' => 'hacking.character',
    ),
    31 => 
    array (
        'action' => 'mods',
        'auto_reply' => NULL,
        'category_id' => 6,
        'default_sanction' => 0,
        'id' => 32,
        'ignore_target' => '0',
        'name_external' => 'Other hacking',
        'name_internal' => 'hacking.other',
    ),
));
        
        
    }
}