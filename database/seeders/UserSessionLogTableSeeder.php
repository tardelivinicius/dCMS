<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSessionLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_session_log')->delete();
        
        \DB::table('user_session_log')->insert(array (
            0 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) MxNitro/1.0.1.3000 Chrome/35.0.1849.0 Safari/537.36',
                'date' => '1618364973',
                'id' => 1,
                'ip' => '187.78.52.48',
                'userid' => '2',
            ),
            1 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
                'date' => '1618368545',
                'id' => 2,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            2 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1618369689',
                'id' => 3,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            3 => 
            array (
            'browser' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
                'date' => '1618529883',
                'id' => 4,
                'ip' => '49.181.164.155',
                'userid' => '3',
            ),
            4 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618552845',
                'id' => 5,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            5 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618628529',
                'id' => 6,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            6 => 
            array (
            'browser' => 'Mozilla/5.0 (iPad; CPU OS 14_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
                'date' => '1618649443',
                'id' => 7,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            7 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko',
                'date' => '1618702082',
                'id' => 8,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            8 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618702157',
                'id' => 9,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            9 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618703442',
                'id' => 10,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            10 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618704574',
                'id' => 11,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            11 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618705017',
                'id' => 12,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            12 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1618705730',
                'id' => 13,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            13 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618706302',
                'id' => 14,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            14 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1618708741',
                'id' => 15,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            15 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1618710143',
                'id' => 16,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            16 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1618755669',
                'id' => 17,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            17 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1618756695',
                'id' => 18,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            18 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1618761120',
                'id' => 19,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            19 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) HolocityClient/1.0.0 Chrome/73.0.3683.121 Electron/5.0.6 Safari/537.36',
                'date' => '1618761435',
                'id' => 20,
                'ip' => '2.59.117.60',
                'userid' => '4',
            ),
            20 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1618762531',
                'id' => 21,
                'ip' => '101.112.250.202',
                'userid' => '3',
            ),
            21 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
                'date' => '1619013904',
                'id' => 22,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            22 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619102321',
                'id' => 23,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            23 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619168507',
                'id' => 24,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            24 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619175058',
                'id' => 25,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            25 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619175483',
                'id' => 26,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            26 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619175784',
                'id' => 27,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            27 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619185693',
                'id' => 28,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            28 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619185719',
                'id' => 29,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            29 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619185835',
                'id' => 30,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            30 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619186079',
                'id' => 31,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            31 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619186216',
                'id' => 32,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            32 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619186644',
                'id' => 33,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            33 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619187606',
                'id' => 34,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            34 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619188010',
                'id' => 35,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            35 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619188373',
                'id' => 36,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            36 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619188447',
                'id' => 37,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            37 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619221748',
                'id' => 38,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            38 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619222199',
                'id' => 39,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            39 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 OPR/73.0.3856.438',
                'date' => '1619224393',
                'id' => 40,
                'ip' => '187.95.211.33',
                'userid' => '2',
            ),
            40 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619244230',
                'id' => 41,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            41 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619244356',
                'id' => 42,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            42 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619244363',
                'id' => 43,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            43 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619244377',
                'id' => 44,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            44 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619255984',
                'id' => 45,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            45 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619256636',
                'id' => 46,
                'ip' => '101.112.164.81',
                'userid' => '3',
            ),
            46 => 
            array (
            'browser' => 'Mozilla/5.0 (iPad; CPU OS 14_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
                'date' => '1619256667',
                'id' => 47,
                'ip' => '49.180.25.203',
                'userid' => '3',
            ),
            47 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619270892',
                'id' => 48,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            48 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.10240',
                'date' => '1619275844',
                'id' => 49,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            49 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619275981',
                'id' => 50,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            50 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619276133',
                'id' => 51,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            51 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619276814',
                'id' => 52,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            52 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619276833',
                'id' => 53,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            53 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619276874',
                'id' => 54,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            54 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619276901',
                'id' => 55,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            55 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619277580',
                'id' => 56,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            56 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619277822',
                'id' => 57,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            57 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619277867',
                'id' => 58,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            58 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619278100',
                'id' => 59,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            59 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619282369',
                'id' => 60,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            60 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619313182',
                'id' => 61,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            61 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619313183',
                'id' => 62,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            62 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619313243',
                'id' => 63,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            63 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619313449',
                'id' => 64,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            64 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619313849',
                'id' => 65,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            65 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619314369',
                'id' => 66,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            66 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
                'date' => '1619321726',
                'id' => 67,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            67 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619322344',
                'id' => 68,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
            68 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619322959',
                'id' => 69,
                'ip' => '127.0.0.1',
                'userid' => '3',
            ),
            69 => 
            array (
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
                'date' => '1619325069',
                'id' => 70,
                'ip' => '127.0.0.1',
                'userid' => '2',
            ),
        ));
        
        
    }
}