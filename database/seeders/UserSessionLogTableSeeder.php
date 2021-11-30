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
                'id' => 1,
                'userid' => '2',
                'ip' => '187.78.52.48',
                'date' => '1618364973',
            'browser' => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) MxNitro/1.0.1.3000 Chrome/35.0.1849.0 Safari/537.36',
            ),
            1 => 
            array (
                'id' => 2,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618368545',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
            ),
            2 => 
            array (
                'id' => 3,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618369689',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            3 => 
            array (
                'id' => 4,
                'userid' => '3',
                'ip' => '49.181.164.155',
                'date' => '1618529883',
            'browser' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
            ),
            4 => 
            array (
                'id' => 5,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618552845',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            5 => 
            array (
                'id' => 6,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618628529',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            6 => 
            array (
                'id' => 7,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618649443',
            'browser' => 'Mozilla/5.0 (iPad; CPU OS 14_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
            ),
            7 => 
            array (
                'id' => 8,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618702082',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko',
            ),
            8 => 
            array (
                'id' => 9,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618702157',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            9 => 
            array (
                'id' => 10,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618703442',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            10 => 
            array (
                'id' => 11,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618704574',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            11 => 
            array (
                'id' => 12,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618705017',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            12 => 
            array (
                'id' => 13,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618705730',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            13 => 
            array (
                'id' => 14,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618706302',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            14 => 
            array (
                'id' => 15,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618708741',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            15 => 
            array (
                'id' => 16,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618710143',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            16 => 
            array (
                'id' => 17,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618755669',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            17 => 
            array (
                'id' => 18,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618756695',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            18 => 
            array (
                'id' => 19,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618761120',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            19 => 
            array (
                'id' => 20,
                'userid' => '4',
                'ip' => '2.59.117.60',
                'date' => '1618761435',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) HolocityClient/1.0.0 Chrome/73.0.3683.121 Electron/5.0.6 Safari/537.36',
            ),
            20 => 
            array (
                'id' => 21,
                'userid' => '3',
                'ip' => '101.112.250.202',
                'date' => '1618762531',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            21 => 
            array (
                'id' => 22,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619013904',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36',
            ),
            22 => 
            array (
                'id' => 23,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619102321',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            23 => 
            array (
                'id' => 24,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619168507',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            24 => 
            array (
                'id' => 25,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619175058',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            25 => 
            array (
                'id' => 26,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619175483',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            26 => 
            array (
                'id' => 27,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619175784',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            27 => 
            array (
                'id' => 28,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619185693',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            28 => 
            array (
                'id' => 29,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619185719',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            29 => 
            array (
                'id' => 30,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619185835',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            30 => 
            array (
                'id' => 31,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619186079',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            31 => 
            array (
                'id' => 32,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619186216',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            32 => 
            array (
                'id' => 33,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619186644',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            33 => 
            array (
                'id' => 34,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619187606',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            34 => 
            array (
                'id' => 35,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619188010',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            35 => 
            array (
                'id' => 36,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619188373',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            36 => 
            array (
                'id' => 37,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619188447',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            37 => 
            array (
                'id' => 38,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619221748',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            38 => 
            array (
                'id' => 39,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619222199',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            39 => 
            array (
                'id' => 40,
                'userid' => '2',
                'ip' => '187.95.211.33',
                'date' => '1619224393',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 OPR/73.0.3856.438',
            ),
            40 => 
            array (
                'id' => 41,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619244230',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            41 => 
            array (
                'id' => 42,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619244356',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            42 => 
            array (
                'id' => 43,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619244363',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            43 => 
            array (
                'id' => 44,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619244377',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            44 => 
            array (
                'id' => 45,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619255984',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            45 => 
            array (
                'id' => 46,
                'userid' => '3',
                'ip' => '101.112.164.81',
                'date' => '1619256636',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            46 => 
            array (
                'id' => 47,
                'userid' => '3',
                'ip' => '49.180.25.203',
                'date' => '1619256667',
            'browser' => 'Mozilla/5.0 (iPad; CPU OS 14_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 Safari/604.1',
            ),
            47 => 
            array (
                'id' => 48,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619270892',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            48 => 
            array (
                'id' => 49,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619275844',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.10240',
            ),
            49 => 
            array (
                'id' => 50,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619275981',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            50 => 
            array (
                'id' => 51,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619276133',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            51 => 
            array (
                'id' => 52,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619276814',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            52 => 
            array (
                'id' => 53,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619276833',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            53 => 
            array (
                'id' => 54,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619276874',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            54 => 
            array (
                'id' => 55,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619276901',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            55 => 
            array (
                'id' => 56,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619277580',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            56 => 
            array (
                'id' => 57,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619277822',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            57 => 
            array (
                'id' => 58,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619277867',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            58 => 
            array (
                'id' => 59,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619278100',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            59 => 
            array (
                'id' => 60,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619282369',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            60 => 
            array (
                'id' => 61,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619313182',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            61 => 
            array (
                'id' => 62,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619313183',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            62 => 
            array (
                'id' => 63,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619313243',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            63 => 
            array (
                'id' => 64,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619313449',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            64 => 
            array (
                'id' => 65,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619313849',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            65 => 
            array (
                'id' => 66,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619314369',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            66 => 
            array (
                'id' => 67,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619321726',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:60.9) Gecko/20100101 Goanna/4.4 Firefox/60.9 Basilisk/20190912',
            ),
            67 => 
            array (
                'id' => 68,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619322344',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            68 => 
            array (
                'id' => 69,
                'userid' => '3',
                'ip' => '127.0.0.1',
                'date' => '1619322959',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
            69 => 
            array (
                'id' => 70,
                'userid' => '2',
                'ip' => '127.0.0.1',
                'date' => '1619325069',
            'browser' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36',
            ),
        ));
        
        
    }
}