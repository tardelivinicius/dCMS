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
                'account_created' => 1,
                'account_day_of_birth' => 1,
                'auth_ticket' => '',
                'credits' => 0,
                'extra_rank' => NULL,
                'fbenable' => '1',
                'fbid' => NULL,
                'gender' => 'F',
                'home_room' => 0,
                'id' => 1,
                'ip_current' => '127.0.0.1',
                'ip_register' => '127.0.0.1',
                'last_login' => 1594680183,
                'last_online' => 1,
                'look' => 'he-3884-92-93.ch-4004-92.hr-3251-39-49.hd-3100-5.lg-3078-110',
                'machine_id' => 'dde7b67386d37aff60022250b84efbff5b1fd2c4ae5c8609049470a1c0feffc4',
                'mail' => 'mail@hoster.de',
                'mail_verified' => '1',
                'motto' => '',
                'online' => '0',
                'password' => '',
                'pin' => NULL,
                'pincode' => NULL,
                'pixels' => 0,
                'points' => 0,
                'rank' => 1,
                'real_name' => 'SYSTEMACC',
                'secret_key' => NULL,
                'teamrank' => 0,
                'user_likes' => 0,
                'username' => 'Systemaccount',
            ),
            1 => 
            array (
                'account_created' => 1618365190,
                'account_day_of_birth' => 0,
                'auth_ticket' => 'Brain-1.8.1-iBpISrvBhBruf0lKXjyJyNsM4-SSO',
                'credits' => 10000000,
                'extra_rank' => NULL,
                'fbenable' => '1',
                'fbid' => NULL,
                'gender' => 'M',
                'home_room' => 0,
                'id' => 2,
                'ip_current' => '127.0.0.1',
                'ip_register' => '127.0.0.1',
                'last_login' => 1619325423,
                'last_online' => 1619325084,
                'look' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'machine_id' => '',
                'mail' => 'mail@mail.com',
                'mail_verified' => '1',
                'motto' => 'Welcome to LocalHotel',
                'online' => '0',
                'password' => '$2y$10$oaxh6IqxCNC2XW5ym/DkMeFf3kZej7kHG/5PCMO0ypkArZGZtUqRm',
                'pin' => NULL,
                'pincode' => NULL,
                'pixels' => 95,
                'points' => 300,
                'rank' => 7,
                'real_name' => 'KREWS DEV',
                'secret_key' => NULL,
                'teamrank' => 0,
                'user_likes' => 0,
                'username' => 'habbo',
            ),
            2 => 
            array (
                'account_created' => 1618365190,
                'account_day_of_birth' => 0,
                'auth_ticket' => 'Brain-1.8.1-gpr7akQ0cb33ipzStfo5qffBB-SSO',
                'credits' => 1000,
                'extra_rank' => NULL,
                'fbenable' => '1',
                'fbid' => NULL,
                'gender' => 'M',
                'home_room' => 0,
                'id' => 3,
                'ip_current' => '127.0.0.1',
                'ip_register' => '127.0.0.1',
                'last_login' => 1619325058,
                'last_online' => 1619323332,
                'look' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'machine_id' => '',
                'mail' => 'mail2@mail.com',
                'mail_verified' => '1',
                'motto' => 'Welcome to LocalHotel',
                'online' => '0',
                'password' => '$2y$10$oaxh6IqxCNC2XW5ym/DkMeFf3kZej7kHG/5PCMO0ypkArZGZtUqRm',
                'pin' => NULL,
                'pincode' => NULL,
                'pixels' => 95,
                'points' => 300,
                'rank' => 7,
                'real_name' => 'KREWS DEV',
                'secret_key' => NULL,
                'teamrank' => 0,
                'user_likes' => 0,
                'username' => 'purewinter',
            ),
            3 => 
            array (
                'account_created' => 1631586872,
                'account_day_of_birth' => 0,
                'auth_ticket' => 'Brain-1.8.1-3112154178',
                'credits' => 999957,
                'extra_rank' => NULL,
                'fbenable' => '1',
                'fbid' => NULL,
                'gender' => 'M',
                'home_room' => 0,
                'id' => 7,
                'ip_current' => '127.0.0.1',
                'ip_register' => '192.168.0.30',
                'last_login' => 1631667302,
                'last_online' => 1631667275,
                'look' => 'hr-3163-1035.hd-3092-2.ch-215-63.lg-3320-1189-62.sh-3089-1408.ca-3219-110.wa-2001-0',
                'machine_id' => '',
                'mail' => 'tardelivinicius@gmail.com',
                'mail_verified' => '0',
                'motto' => 'Teste de mudança',
                'online' => '0',
                'password' => '$2b$12$arTRXSWjf89uWj3cjnwcX.67WDXTxxvvPcfA1u7CcBDlXqnXAmnDW',
                'pin' => NULL,
                'pincode' => NULL,
                'pixels' => 500,
                'points' => 10,
                'rank' => 1,
                'real_name' => 'KREWS DEV',
                'secret_key' => NULL,
                'teamrank' => 0,
                'user_likes' => 0,
                'username' => 'vvalle',
            ),
        ));
        
        
    }
}