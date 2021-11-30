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
                'id' => 1,
                'category_id' => 1,
                'name_internal' => 'cyber.sextalk',
                'name_external' => 'Sexual talk',
                'action' => 'auto_ignore',
                'ignore_target' => '0',
                'auto_reply' => 'Thank you for reporting someone for sexual talk. We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'. We will take a look at this.',
                'default_sanction' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'name_internal' => 'cyber.asking',
                'name_external' => 'Asking for cyber sex',
                'action' => 'auto_ignore',
                'ignore_target' => '0',
                'auto_reply' => 'Thank you for reporting someone for sexual talk. We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'. We will take a look at this.',
                'default_sanction' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'name_internal' => 'cyber.offering',
                'name_external' => 'Offering cyber sex',
                'action' => 'auto_ignore',
                'ignore_target' => '0',
                'auto_reply' => 'Thank you for reporting someone for sexual talk. We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'. We will take a look at this.',
                'default_sanction' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'name_internal' => 'cyber.porn',
                'name_external' => 'Sending porn',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 2,
                'name_internal' => 'scamming.scamsite',
                'name_external' => 'Promoting scam sites',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 2,
                'name_internal' => 'scamming.sellingirl',
                'name_external' => 'Selling virtual items for real money',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 2,
                'name_internal' => 'scamming.stealingfurni',
                'name_external' => 'Stealing furni or coins',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 2,
                'name_internal' => 'scamming.account',
                'name_external' => 'Stealing account information',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 2,
                'name_internal' => 'scamming.casino',
                'name_external' => 'Casino scamming',
                'action' => 'auto_reply',
                'ignore_target' => '0',
                'auto_reply' => 'Habbo does not get involved with the casino community due to cases being complex and hard to track. Players gamble at their own risk. When the fun stops, stop.',
                'default_sanction' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 3,
                'name_internal' => 'badwords.roomname',
                'name_external' => 'Room name',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 3,
                'name_internal' => 'badwords.roomdesc',
                'name_external' => 'Room description',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 3,
                'name_internal' => 'badwords.username',
                'name_external' => 'Username',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 3,
                'name_internal' => 'badwords.motto',
                'name_external' => 'Moto',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 3,
                'name_internal' => 'badwords.grouporevent',
                'name_external' => 'Group or event name',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 4,
                'name_internal' => 'badbehavior.trolling',
                'name_external' => 'Trolling',
                'action' => 'auto_reply',
                'ignore_target' => '0',
                'auto_reply' => 'Thanks for your report. Please call a moderator to the room by following these steps.
1. Under the Help window click on \'Get immediate help\'.
2. Then click on \'Chat to a Moderator\'.
3. Let them know that somebody is trolling in the room.
4. A moderator will open a chat session with you to resolve the problem.',
                'default_sanction' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 4,
                'name_internal' => 'badbehavior.blocking',
                'name_external' => 'Blocking',
                'action' => 'auto_reply',
                'ignore_target' => '0',
                'auto_reply' => 'Thanks for your report. Please call a moderator to the room by following these steps.
1. Under the Help window click on \'Get immediate help\'.
2. Then click on \'Chat to a Moderator\'.
3. Let them know that somebody is blocking in the room.
4. A moderator will open a chat session with you to resolve the problem.',
                'default_sanction' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 4,
                'name_internal' => 'badbehavior.flooding',
                'name_external' => 'Flooding',
                'action' => 'auto_reply',
                'ignore_target' => '0',
                'auto_reply' => 'Thanks for your report. Please call a moderator to the room by following these steps.
1. Under the Help window click on \'Get immediate help\'.
2. Then click on \'Chat to a Moderator\'.
3. Let them know that somebody is flooding the room.
4. A moderator will open a chat session with you to resolve the problem.',
                'default_sanction' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 4,
                'name_internal' => 'badbehavior.young',
                'name_external' => 'Too young for Habbo',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 4,
                'name_internal' => 'badbehavior.staffimpersonation',
                'name_external' => 'Staff impersonation',
                'action' => 'mods',
                'ignore_target' => '0',
                'auto_reply' => NULL,
                'default_sanction' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 4,
                'name_internal' => 'badbehavior.offensive',
                'name_external' => 'Offensive language',
                'action' => 'auto_ignore',
                'ignore_target' => '0',
                'auto_reply' => 'We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'',
                'default_sanction' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 4,
                'name_internal' => 'badbehavior.hate',
                'name_external' => 'Hate speech',
                'action' => 'auto_ignore',
                'ignore_target' => '0',
                'auto_reply' => 'We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'',
                'default_sanction' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 4,
                'name_internal' => 'badbehavior.violence',
                'name_external' => 'Violence',
                'action' => 'auto_ignore',
                'ignore_target' => '0',
                'auto_reply' => 'We have put this user on ignore for you. This means that you can no longer see what they are saying. To turn ignore off for this person you need to click on them and press \'Listen\'',
                'default_sanction' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 5,
                'name_internal' => 'account.username',
                'name_external' => 'Change username',
                'action' => 'auto_reply',
                'ignore_target' => '0',
            'auto_reply' => 'It is currently not possible to change your username in Habbo. When that feature becomes available you\'ll be sure to know! :)',
            'default_sanction' => 0,
        ),
        23 => 
        array (
            'id' => 24,
            'category_id' => 5,
            'name_internal' => 'accunt.payment',
            'name_external' => 'Payment issues',
            'action' => 'auto_reply',
            'ignore_target' => '0',
            'auto_reply' => 'Thanks for your report. Unfortunately Game Moderators cannot help with payment issues. Please report your payment issue to us at the help desk on the website where our team of specialists will get back to you.',
            'default_sanction' => 0,
        ),
        24 => 
        array (
            'id' => 25,
            'category_id' => 5,
            'name_internal' => 'account.earn',
            'name_external' => 'Earn gems',
            'action' => 'auto_reply',
            'ignore_target' => '0',
            'auto_reply' => 'Thanks for your report. Unfortunately Game Moderators cannot help with payment issues. Please report your payment issue to us at the help desk on the website where our team of specialists will get back to you.',
            'default_sanction' => 0,
        ),
        25 => 
        array (
            'id' => 26,
            'category_id' => 5,
            'name_internal' => 'account.other',
            'name_external' => 'Something else',
            'action' => 'auto_reply',
            'ignore_target' => '0',
            'auto_reply' => 'Please use the helpdesk on the website for help with this matter.',
            'default_sanction' => 0,
        ),
        26 => 
        array (
            'id' => 27,
            'category_id' => 6,
            'name_internal' => 'hacking.game',
            'name_external' => 'Threat to hack Habbo',
            'action' => 'auto_reply',
            'ignore_target' => '0',
        'auto_reply' => 'We work very hard to ensure that Habbo is safe for all that play. This involves using only the best security technology. We would like to thank you for reporting this to us, but we don\'t think this person is capable of hacking Habbo :)',
        'default_sanction' => 0,
    ),
    27 => 
    array (
        'id' => 28,
        'category_id' => 6,
        'name_internal' => 'hacking.player',
        'name_external' => 'Threat to hack a player',
        'action' => 'auto_reply',
        'ignore_target' => '0',
        'auto_reply' => 'There is no way that another Habbo can hack you without knowing your Habbo password or Habbo email address. Please make sure that you are using a secure password which is not easy to remember. We recommend passwords which include letters and numbers such as fl0w3rs. If you wanted to be even more secure you could include a special letter, such as fl0w3r$.

To change your Habbo password go to your profile on the website.',
        'default_sanction' => 0,
    ),
    28 => 
    array (
        'id' => 29,
        'category_id' => 6,
        'name_internal' => 'hacking.furni',
        'name_external' => 'Scripted furniture',
        'action' => 'mods',
        'ignore_target' => '0',
        'auto_reply' => NULL,
        'default_sanction' => 0,
    ),
    29 => 
    array (
        'id' => 30,
        'category_id' => 6,
        'name_internal' => 'hacking.room',
        'name_external' => 'Scripted room',
        'action' => 'mods',
        'ignore_target' => '0',
        'auto_reply' => NULL,
        'default_sanction' => 0,
    ),
    30 => 
    array (
        'id' => 31,
        'category_id' => 6,
        'name_internal' => 'hacking.character',
        'name_external' => 'Scripted character',
        'action' => 'mods',
        'ignore_target' => '0',
        'auto_reply' => NULL,
        'default_sanction' => 0,
    ),
    31 => 
    array (
        'id' => 32,
        'category_id' => 6,
        'name_internal' => 'hacking.other',
        'name_external' => 'Other hacking',
        'action' => 'mods',
        'ignore_target' => '0',
        'auto_reply' => NULL,
        'default_sanction' => 0,
    ),
));
        
        
    }
}