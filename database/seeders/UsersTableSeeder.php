<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'Systemaccount',
                'real_name' => 'SYSTEMACC',
                'password' => '',
                'mail' => 'mail@hoster.de',
                'mail_verified' => '1',
                'account_created' => 1,
                'account_day_of_birth' => 1,
                'last_login' => 1594680183,
                'last_online' => 1,
                'motto' => '',
                'look' => 'he-3884-92-93.ch-4004-92.hr-3251-39-49.hd-3100-5.lg-3078-110',
                'gender' => 'F',
                'rank' => 1,
                'credits' => 0,
                'pixels' => 0,
                'points' => 0,
                'online' => '0',
                'auth_ticket' => '',
                'ip_register' => '127.0.0.1',
                'ip_current' => '127.0.0.1',
                'machine_id' => 'dde7b67386d37aff60022250b84efbff5b1fd2c4ae5c8609049470a1c0feffc4',
                'home_room' => 0,
                'secret_key' => NULL,
                'pincode' => NULL,
                'extra_rank' => NULL,
                'user_likes' => 0,
                'pin' => NULL,
                'teamrank' => 0,
                'fbid' => NULL,
                'fbenable' => '1',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'habbo',
                'real_name' => 'KREWS DEV',
                'password' => '$2y$10$oaxh6IqxCNC2XW5ym/DkMeFf3kZej7kHG/5PCMO0ypkArZGZtUqRm',
                'mail' => 'mail@mail.com',
                'mail_verified' => '1',
                'account_created' => 1618365190,
                'account_day_of_birth' => 0,
                'last_login' => 1619325423,
                'last_online' => 1619325084,
                'motto' => 'Welcome to LocalHotel',
                'look' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'gender' => 'M',
                'rank' => 7,
                'credits' => 10000000,
                'pixels' => 95,
                'points' => 300,
                'online' => '0',
                'auth_ticket' => 'Brain-1.8.1-iBpISrvBhBruf0lKXjyJyNsM4-SSO',
                'ip_register' => '127.0.0.1',
                'ip_current' => '127.0.0.1',
                'machine_id' => '',
                'home_room' => 0,
                'secret_key' => NULL,
                'pincode' => NULL,
                'extra_rank' => NULL,
                'user_likes' => 0,
                'pin' => NULL,
                'teamrank' => 0,
                'fbid' => NULL,
                'fbenable' => '1',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'purewinter',
                'real_name' => 'KREWS DEV',
                'password' => '$2y$10$oaxh6IqxCNC2XW5ym/DkMeFf3kZej7kHG/5PCMO0ypkArZGZtUqRm',
                'mail' => 'mail2@mail.com',
                'mail_verified' => '1',
                'account_created' => 1618365190,
                'account_day_of_birth' => 0,
                'last_login' => 1619325058,
                'last_online' => 1619323332,
                'motto' => 'Welcome to LocalHotel',
                'look' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'gender' => 'M',
                'rank' => 7,
                'credits' => 1000,
                'pixels' => 95,
                'points' => 300,
                'online' => '0',
                'auth_ticket' => 'Brain-1.8.1-gpr7akQ0cb33ipzStfo5qffBB-SSO',
                'ip_register' => '127.0.0.1',
                'ip_current' => '127.0.0.1',
                'machine_id' => '',
                'home_room' => 0,
                'secret_key' => NULL,
                'pincode' => NULL,
                'extra_rank' => NULL,
                'user_likes' => 0,
                'pin' => NULL,
                'teamrank' => 0,
                'fbid' => NULL,
                'fbenable' => '1',
            ),
            3 => 
            array (
                'id' => 7,
                'username' => 'vvalle',
                'real_name' => 'KREWS DEV',
                'password' => '$2y$10$/Ox43H1dAxEZxwkHOGjNPuCuyQDrFZS0/NvXCxYDDj8gTsYUIzCB6',
                'mail' => 'tardelivinicius@gmail.com',
                'mail_verified' => '0',
                'account_created' => 1638293186,
                'account_day_of_birth' => 0,
                'last_login' => 1638293676,
                'last_online' => 1638293207,
                'motto' => 'Olá, eu sou um Habbo!',
                'look' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'gender' => 'M',
                'rank' => 1,
                'credits' => 49999,
                'pixels' => 500,
                'points' => 10,
                'online' => '1',
                'auth_ticket' => 'dCMS-1.0.0-61a660aba6eeb',
                'ip_register' => '127.0.0.1',
                'ip_current' => '127.0.0.1',
                'machine_id' => '',
                'home_room' => 0,
                'secret_key' => NULL,
                'pincode' => NULL,
                'extra_rank' => NULL,
                'user_likes' => 0,
                'pin' => NULL,
                'teamrank' => 0,
                'fbid' => NULL,
                'fbenable' => '1',
            ),
        ));
        
        
    }
}