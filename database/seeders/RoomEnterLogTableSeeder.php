<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomEnterLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_enter_log')->delete();
        
        \DB::table('room_enter_log')->insert(array (
            0 => 
            array (
                'room_id' => 201,
                'user_id' => 2,
                'timestamp' => 1618365072,
                'exit_timestamp' => 0,
            ),
            1 => 
            array (
                'room_id' => 201,
                'user_id' => 3,
                'timestamp' => 1618369722,
                'exit_timestamp' => 1618369802,
            ),
            2 => 
            array (
                'room_id' => 201,
                'user_id' => 3,
                'timestamp' => 1618376100,
                'exit_timestamp' => 1618376554,
            ),
            3 => 
            array (
                'room_id' => 201,
                'user_id' => 2,
                'timestamp' => 1618410468,
                'exit_timestamp' => 1618410551,
            ),
            4 => 
            array (
                'room_id' => 201,
                'user_id' => 2,
                'timestamp' => 1618410869,
                'exit_timestamp' => 1618411059,
            ),
            5 => 
            array (
                'room_id' => 201,
                'user_id' => 2,
                'timestamp' => 1618411121,
                'exit_timestamp' => 1618411615,
            ),
            6 => 
            array (
                'room_id' => 201,
                'user_id' => 2,
                'timestamp' => 1618529536,
                'exit_timestamp' => 0,
            ),
            7 => 
            array (
                'room_id' => 201,
                'user_id' => 2,
                'timestamp' => 1618529752,
                'exit_timestamp' => 1618533396,
            ),
            8 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618552953,
                'exit_timestamp' => 1618554353,
            ),
            9 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618628650,
                'exit_timestamp' => 1618628684,
            ),
            10 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618649492,
                'exit_timestamp' => 1618649565,
            ),
            11 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618702179,
                'exit_timestamp' => 1618702298,
            ),
            12 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618703506,
                'exit_timestamp' => 1618703670,
            ),
            13 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618705041,
                'exit_timestamp' => 1618705377,
            ),
            14 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618705759,
                'exit_timestamp' => 1618706309,
            ),
            15 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618706322,
                'exit_timestamp' => 1618708212,
            ),
            16 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618708231,
                'exit_timestamp' => 1618708237,
            ),
            17 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618708237,
                'exit_timestamp' => 1618708748,
            ),
            18 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618708857,
                'exit_timestamp' => 1618709259,
            ),
            19 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618710159,
                'exit_timestamp' => 1618710242,
            ),
            20 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618710354,
                'exit_timestamp' => 0,
            ),
            21 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618755688,
                'exit_timestamp' => 1618755884,
            ),
            22 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618756283,
                'exit_timestamp' => 1618756364,
            ),
            23 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618756370,
                'exit_timestamp' => 1618756702,
            ),
            24 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618756712,
                'exit_timestamp' => 1618760968,
            ),
            25 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618761149,
                'exit_timestamp' => 1618762422,
            ),
            26 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1618762552,
                'exit_timestamp' => 1618762993,
            ),
            27 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619013983,
                'exit_timestamp' => 1619014042,
            ),
            28 => 
            array (
                'room_id' => 203,
                'user_id' => 3,
                'timestamp' => 1619014042,
                'exit_timestamp' => 1619014527,
            ),
            29 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619168593,
                'exit_timestamp' => 1619168657,
            ),
            30 => 
            array (
                'room_id' => 204,
                'user_id' => 3,
                'timestamp' => 1619168657,
                'exit_timestamp' => 1619168675,
            ),
            31 => 
            array (
                'room_id' => 203,
                'user_id' => 3,
                'timestamp' => 1619168675,
                'exit_timestamp' => 1619168679,
            ),
            32 => 
            array (
                'room_id' => 203,
                'user_id' => 3,
                'timestamp' => 1619168679,
                'exit_timestamp' => 1619168682,
            ),
            33 => 
            array (
                'room_id' => 204,
                'user_id' => 3,
                'timestamp' => 1619168682,
                'exit_timestamp' => 1619171990,
            ),
            34 => 
            array (
                'room_id' => 205,
                'user_id' => 3,
                'timestamp' => 1619171990,
                'exit_timestamp' => 0,
            ),
            35 => 
            array (
                'room_id' => 204,
                'user_id' => 3,
                'timestamp' => 1619172919,
                'exit_timestamp' => 1619172963,
            ),
            36 => 
            array (
                'room_id' => 206,
                'user_id' => 3,
                'timestamp' => 1619172963,
                'exit_timestamp' => 1619173761,
            ),
            37 => 
            array (
                'room_id' => 207,
                'user_id' => 3,
                'timestamp' => 1619173761,
                'exit_timestamp' => 1619174278,
            ),
            38 => 
            array (
                'room_id' => 206,
                'user_id' => 3,
                'timestamp' => 1619174278,
                'exit_timestamp' => 1619174380,
            ),
            39 => 
            array (
                'room_id' => 203,
                'user_id' => 3,
                'timestamp' => 1619175270,
                'exit_timestamp' => 1619175274,
            ),
            40 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619185734,
                'exit_timestamp' => 1619185742,
            ),
            41 => 
            array (
                'room_id' => 206,
                'user_id' => 3,
                'timestamp' => 1619185742,
                'exit_timestamp' => 1619185821,
            ),
            42 => 
            array (
                'room_id' => 204,
                'user_id' => 3,
                'timestamp' => 1619188385,
                'exit_timestamp' => 1619188398,
            ),
            43 => 
            array (
                'room_id' => 204,
                'user_id' => 3,
                'timestamp' => 1619244613,
                'exit_timestamp' => 1619244631,
            ),
            44 => 
            array (
                'room_id' => 206,
                'user_id' => 3,
                'timestamp' => 1619244631,
                'exit_timestamp' => 1619244637,
            ),
            45 => 
            array (
                'room_id' => 207,
                'user_id' => 3,
                'timestamp' => 1619244637,
                'exit_timestamp' => 1619244812,
            ),
            46 => 
            array (
                'room_id' => 205,
                'user_id' => 3,
                'timestamp' => 1619244812,
                'exit_timestamp' => 1619244906,
            ),
            47 => 
            array (
                'room_id' => 204,
                'user_id' => 3,
                'timestamp' => 1619245395,
                'exit_timestamp' => 1619245408,
            ),
            48 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619245468,
                'exit_timestamp' => 1619245478,
            ),
            49 => 
            array (
                'room_id' => 204,
                'user_id' => 3,
                'timestamp' => 1619246199,
                'exit_timestamp' => 1619246214,
            ),
            50 => 
            array (
                'room_id' => 207,
                'user_id' => 3,
                'timestamp' => 1619246214,
                'exit_timestamp' => 1619246234,
            ),
            51 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619246234,
                'exit_timestamp' => 1619246261,
            ),
            52 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619246283,
                'exit_timestamp' => 1619246322,
            ),
            53 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619246902,
                'exit_timestamp' => 1619247023,
            ),
            54 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619247050,
                'exit_timestamp' => 1619247055,
            ),
            55 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619256067,
                'exit_timestamp' => 1619256086,
            ),
            56 => 
            array (
                'room_id' => 207,
                'user_id' => 3,
                'timestamp' => 1619270913,
                'exit_timestamp' => 1619270950,
            ),
            57 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619271002,
                'exit_timestamp' => 1619271009,
            ),
            58 => 
            array (
                'room_id' => 202,
                'user_id' => 3,
                'timestamp' => 1619276272,
                'exit_timestamp' => 1619276292,
            ),
            59 => 
            array (
                'room_id' => 208,
                'user_id' => 3,
                'timestamp' => 1619277706,
                'exit_timestamp' => 1619277718,
            ),
            60 => 
            array (
                'room_id' => 202,
                'user_id' => 2,
                'timestamp' => 1619278330,
                'exit_timestamp' => 1619278335,
            ),
            61 => 
            array (
                'room_id' => 201,
                'user_id' => 2,
                'timestamp' => 1619278549,
                'exit_timestamp' => 1619278566,
            ),
            62 => 
            array (
                'room_id' => 202,
                'user_id' => 2,
                'timestamp' => 1619278566,
                'exit_timestamp' => 1619278652,
            ),
            63 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619278789,
                'exit_timestamp' => 1619278866,
            ),
            64 => 
            array (
                'room_id' => 208,
                'user_id' => 2,
                'timestamp' => 1619278866,
                'exit_timestamp' => 1619278879,
            ),
            65 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619313206,
                'exit_timestamp' => 0,
            ),
            66 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619313507,
                'exit_timestamp' => 1619313547,
            ),
            67 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619313894,
                'exit_timestamp' => 1619313928,
            ),
            68 => 
            array (
                'room_id' => 208,
                'user_id' => 2,
                'timestamp' => 1619314264,
                'exit_timestamp' => 1619314280,
            ),
            69 => 
            array (
                'room_id' => 202,
                'user_id' => 2,
                'timestamp' => 1619314280,
                'exit_timestamp' => 1619314294,
            ),
            70 => 
            array (
                'room_id' => 202,
                'user_id' => 2,
                'timestamp' => 1619314294,
                'exit_timestamp' => 1619314325,
            ),
            71 => 
            array (
                'room_id' => 208,
                'user_id' => 2,
                'timestamp' => 1619321770,
                'exit_timestamp' => 1619321972,
            ),
            72 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619322173,
                'exit_timestamp' => 1619322253,
            ),
            73 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619322359,
                'exit_timestamp' => 1619322457,
            ),
            74 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619322699,
                'exit_timestamp' => 1619322743,
            ),
            75 => 
            array (
                'room_id' => 204,
                'user_id' => 2,
                'timestamp' => 1619322929,
                'exit_timestamp' => 1619322947,
            ),
            76 => 
            array (
                'room_id' => 208,
                'user_id' => 3,
                'timestamp' => 1619322972,
                'exit_timestamp' => 1619323084,
            ),
            77 => 
            array (
                'room_id' => 208,
                'user_id' => 2,
                'timestamp' => 1619323201,
                'exit_timestamp' => 1619323213,
            ),
            78 => 
            array (
                'room_id' => 205,
                'user_id' => 2,
                'timestamp' => 1619323213,
                'exit_timestamp' => 1619325082,
            ),
            79 => 
            array (
                'room_id' => 208,
                'user_id' => 3,
                'timestamp' => 1619323340,
                'exit_timestamp' => 1619324239,
            ),
            80 => 
            array (
                'room_id' => 203,
                'user_id' => 3,
                'timestamp' => 1619324239,
                'exit_timestamp' => 1619324251,
            ),
            81 => 
            array (
                'room_id' => 208,
                'user_id' => 3,
                'timestamp' => 1619324251,
                'exit_timestamp' => 1619325020,
            ),
            82 => 
            array (
                'room_id' => 203,
                'user_id' => 3,
                'timestamp' => 1619325020,
                'exit_timestamp' => 1619325025,
            ),
            83 => 
            array (
                'room_id' => 203,
                'user_id' => 3,
                'timestamp' => 1619325025,
                'exit_timestamp' => 1619325058,
            ),
            84 => 
            array (
                'room_id' => 208,
                'user_id' => 2,
                'timestamp' => 1619325089,
                'exit_timestamp' => 1619325105,
            ),
            85 => 
            array (
                'room_id' => 202,
                'user_id' => 2,
                'timestamp' => 1619325105,
                'exit_timestamp' => 1619325126,
            ),
            86 => 
            array (
                'room_id' => 202,
                'user_id' => 2,
                'timestamp' => 1619325126,
                'exit_timestamp' => 1619325172,
            ),
            87 => 
            array (
                'room_id' => 207,
                'user_id' => 2,
                'timestamp' => 1619325172,
                'exit_timestamp' => 1619325193,
            ),
            88 => 
            array (
                'room_id' => 207,
                'user_id' => 2,
                'timestamp' => 1619325193,
                'exit_timestamp' => 1619325226,
            ),
            89 => 
            array (
                'room_id' => 207,
                'user_id' => 2,
                'timestamp' => 1619325226,
                'exit_timestamp' => 1619325238,
            ),
            90 => 
            array (
                'room_id' => 207,
                'user_id' => 2,
                'timestamp' => 1619325238,
                'exit_timestamp' => 1619325256,
            ),
            91 => 
            array (
                'room_id' => 202,
                'user_id' => 2,
                'timestamp' => 1619325256,
                'exit_timestamp' => 1619325312,
            ),
            92 => 
            array (
                'room_id' => 208,
                'user_id' => 2,
                'timestamp' => 1619325339,
                'exit_timestamp' => 1619325423,
            ),
            93 => 
            array (
                'room_id' => 209,
                'user_id' => 7,
                'timestamp' => 1638293246,
                'exit_timestamp' => 1638293300,
            ),
        ));
        
        
    }
}