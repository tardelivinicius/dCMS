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
                'exit_timestamp' => 0,
                'room_id' => 201,
                'timestamp' => 1618365072,
                'user_id' => 2,
            ),
            1 => 
            array (
                'exit_timestamp' => 1618369802,
                'room_id' => 201,
                'timestamp' => 1618369722,
                'user_id' => 3,
            ),
            2 => 
            array (
                'exit_timestamp' => 1618376554,
                'room_id' => 201,
                'timestamp' => 1618376100,
                'user_id' => 3,
            ),
            3 => 
            array (
                'exit_timestamp' => 1618410551,
                'room_id' => 201,
                'timestamp' => 1618410468,
                'user_id' => 2,
            ),
            4 => 
            array (
                'exit_timestamp' => 1618411059,
                'room_id' => 201,
                'timestamp' => 1618410869,
                'user_id' => 2,
            ),
            5 => 
            array (
                'exit_timestamp' => 1618411615,
                'room_id' => 201,
                'timestamp' => 1618411121,
                'user_id' => 2,
            ),
            6 => 
            array (
                'exit_timestamp' => 0,
                'room_id' => 201,
                'timestamp' => 1618529536,
                'user_id' => 2,
            ),
            7 => 
            array (
                'exit_timestamp' => 1618533396,
                'room_id' => 201,
                'timestamp' => 1618529752,
                'user_id' => 2,
            ),
            8 => 
            array (
                'exit_timestamp' => 1618554353,
                'room_id' => 202,
                'timestamp' => 1618552953,
                'user_id' => 3,
            ),
            9 => 
            array (
                'exit_timestamp' => 1618628684,
                'room_id' => 202,
                'timestamp' => 1618628650,
                'user_id' => 3,
            ),
            10 => 
            array (
                'exit_timestamp' => 1618649565,
                'room_id' => 202,
                'timestamp' => 1618649492,
                'user_id' => 3,
            ),
            11 => 
            array (
                'exit_timestamp' => 1618702298,
                'room_id' => 202,
                'timestamp' => 1618702179,
                'user_id' => 3,
            ),
            12 => 
            array (
                'exit_timestamp' => 1618703670,
                'room_id' => 202,
                'timestamp' => 1618703506,
                'user_id' => 3,
            ),
            13 => 
            array (
                'exit_timestamp' => 1618705377,
                'room_id' => 202,
                'timestamp' => 1618705041,
                'user_id' => 3,
            ),
            14 => 
            array (
                'exit_timestamp' => 1618706309,
                'room_id' => 202,
                'timestamp' => 1618705759,
                'user_id' => 3,
            ),
            15 => 
            array (
                'exit_timestamp' => 1618708212,
                'room_id' => 202,
                'timestamp' => 1618706322,
                'user_id' => 3,
            ),
            16 => 
            array (
                'exit_timestamp' => 1618708237,
                'room_id' => 202,
                'timestamp' => 1618708231,
                'user_id' => 3,
            ),
            17 => 
            array (
                'exit_timestamp' => 1618708748,
                'room_id' => 202,
                'timestamp' => 1618708237,
                'user_id' => 3,
            ),
            18 => 
            array (
                'exit_timestamp' => 1618709259,
                'room_id' => 202,
                'timestamp' => 1618708857,
                'user_id' => 3,
            ),
            19 => 
            array (
                'exit_timestamp' => 1618710242,
                'room_id' => 202,
                'timestamp' => 1618710159,
                'user_id' => 3,
            ),
            20 => 
            array (
                'exit_timestamp' => 0,
                'room_id' => 202,
                'timestamp' => 1618710354,
                'user_id' => 3,
            ),
            21 => 
            array (
                'exit_timestamp' => 1618755884,
                'room_id' => 202,
                'timestamp' => 1618755688,
                'user_id' => 3,
            ),
            22 => 
            array (
                'exit_timestamp' => 1618756364,
                'room_id' => 202,
                'timestamp' => 1618756283,
                'user_id' => 3,
            ),
            23 => 
            array (
                'exit_timestamp' => 1618756702,
                'room_id' => 202,
                'timestamp' => 1618756370,
                'user_id' => 3,
            ),
            24 => 
            array (
                'exit_timestamp' => 1618760968,
                'room_id' => 202,
                'timestamp' => 1618756712,
                'user_id' => 3,
            ),
            25 => 
            array (
                'exit_timestamp' => 1618762422,
                'room_id' => 202,
                'timestamp' => 1618761149,
                'user_id' => 3,
            ),
            26 => 
            array (
                'exit_timestamp' => 1618762993,
                'room_id' => 202,
                'timestamp' => 1618762552,
                'user_id' => 3,
            ),
            27 => 
            array (
                'exit_timestamp' => 1619014042,
                'room_id' => 202,
                'timestamp' => 1619013983,
                'user_id' => 3,
            ),
            28 => 
            array (
                'exit_timestamp' => 1619014527,
                'room_id' => 203,
                'timestamp' => 1619014042,
                'user_id' => 3,
            ),
            29 => 
            array (
                'exit_timestamp' => 1619168657,
                'room_id' => 202,
                'timestamp' => 1619168593,
                'user_id' => 3,
            ),
            30 => 
            array (
                'exit_timestamp' => 1619168675,
                'room_id' => 204,
                'timestamp' => 1619168657,
                'user_id' => 3,
            ),
            31 => 
            array (
                'exit_timestamp' => 1619168679,
                'room_id' => 203,
                'timestamp' => 1619168675,
                'user_id' => 3,
            ),
            32 => 
            array (
                'exit_timestamp' => 1619168682,
                'room_id' => 203,
                'timestamp' => 1619168679,
                'user_id' => 3,
            ),
            33 => 
            array (
                'exit_timestamp' => 1619171990,
                'room_id' => 204,
                'timestamp' => 1619168682,
                'user_id' => 3,
            ),
            34 => 
            array (
                'exit_timestamp' => 0,
                'room_id' => 205,
                'timestamp' => 1619171990,
                'user_id' => 3,
            ),
            35 => 
            array (
                'exit_timestamp' => 1619172963,
                'room_id' => 204,
                'timestamp' => 1619172919,
                'user_id' => 3,
            ),
            36 => 
            array (
                'exit_timestamp' => 1619173761,
                'room_id' => 206,
                'timestamp' => 1619172963,
                'user_id' => 3,
            ),
            37 => 
            array (
                'exit_timestamp' => 1619174278,
                'room_id' => 207,
                'timestamp' => 1619173761,
                'user_id' => 3,
            ),
            38 => 
            array (
                'exit_timestamp' => 1619174380,
                'room_id' => 206,
                'timestamp' => 1619174278,
                'user_id' => 3,
            ),
            39 => 
            array (
                'exit_timestamp' => 1619175274,
                'room_id' => 203,
                'timestamp' => 1619175270,
                'user_id' => 3,
            ),
            40 => 
            array (
                'exit_timestamp' => 1619185742,
                'room_id' => 202,
                'timestamp' => 1619185734,
                'user_id' => 3,
            ),
            41 => 
            array (
                'exit_timestamp' => 1619185821,
                'room_id' => 206,
                'timestamp' => 1619185742,
                'user_id' => 3,
            ),
            42 => 
            array (
                'exit_timestamp' => 1619188398,
                'room_id' => 204,
                'timestamp' => 1619188385,
                'user_id' => 3,
            ),
            43 => 
            array (
                'exit_timestamp' => 1619244631,
                'room_id' => 204,
                'timestamp' => 1619244613,
                'user_id' => 3,
            ),
            44 => 
            array (
                'exit_timestamp' => 1619244637,
                'room_id' => 206,
                'timestamp' => 1619244631,
                'user_id' => 3,
            ),
            45 => 
            array (
                'exit_timestamp' => 1619244812,
                'room_id' => 207,
                'timestamp' => 1619244637,
                'user_id' => 3,
            ),
            46 => 
            array (
                'exit_timestamp' => 1619244906,
                'room_id' => 205,
                'timestamp' => 1619244812,
                'user_id' => 3,
            ),
            47 => 
            array (
                'exit_timestamp' => 1619245408,
                'room_id' => 204,
                'timestamp' => 1619245395,
                'user_id' => 3,
            ),
            48 => 
            array (
                'exit_timestamp' => 1619245478,
                'room_id' => 202,
                'timestamp' => 1619245468,
                'user_id' => 3,
            ),
            49 => 
            array (
                'exit_timestamp' => 1619246214,
                'room_id' => 204,
                'timestamp' => 1619246199,
                'user_id' => 3,
            ),
            50 => 
            array (
                'exit_timestamp' => 1619246234,
                'room_id' => 207,
                'timestamp' => 1619246214,
                'user_id' => 3,
            ),
            51 => 
            array (
                'exit_timestamp' => 1619246261,
                'room_id' => 202,
                'timestamp' => 1619246234,
                'user_id' => 3,
            ),
            52 => 
            array (
                'exit_timestamp' => 1619246322,
                'room_id' => 202,
                'timestamp' => 1619246283,
                'user_id' => 3,
            ),
            53 => 
            array (
                'exit_timestamp' => 1619247023,
                'room_id' => 202,
                'timestamp' => 1619246902,
                'user_id' => 3,
            ),
            54 => 
            array (
                'exit_timestamp' => 1619247055,
                'room_id' => 202,
                'timestamp' => 1619247050,
                'user_id' => 3,
            ),
            55 => 
            array (
                'exit_timestamp' => 1619256086,
                'room_id' => 202,
                'timestamp' => 1619256067,
                'user_id' => 3,
            ),
            56 => 
            array (
                'exit_timestamp' => 1619270950,
                'room_id' => 207,
                'timestamp' => 1619270913,
                'user_id' => 3,
            ),
            57 => 
            array (
                'exit_timestamp' => 1619271009,
                'room_id' => 202,
                'timestamp' => 1619271002,
                'user_id' => 3,
            ),
            58 => 
            array (
                'exit_timestamp' => 1619276292,
                'room_id' => 202,
                'timestamp' => 1619276272,
                'user_id' => 3,
            ),
            59 => 
            array (
                'exit_timestamp' => 1619277718,
                'room_id' => 208,
                'timestamp' => 1619277706,
                'user_id' => 3,
            ),
            60 => 
            array (
                'exit_timestamp' => 1619278335,
                'room_id' => 202,
                'timestamp' => 1619278330,
                'user_id' => 2,
            ),
            61 => 
            array (
                'exit_timestamp' => 1619278566,
                'room_id' => 201,
                'timestamp' => 1619278549,
                'user_id' => 2,
            ),
            62 => 
            array (
                'exit_timestamp' => 1619278652,
                'room_id' => 202,
                'timestamp' => 1619278566,
                'user_id' => 2,
            ),
            63 => 
            array (
                'exit_timestamp' => 1619278866,
                'room_id' => 204,
                'timestamp' => 1619278789,
                'user_id' => 2,
            ),
            64 => 
            array (
                'exit_timestamp' => 1619278879,
                'room_id' => 208,
                'timestamp' => 1619278866,
                'user_id' => 2,
            ),
            65 => 
            array (
                'exit_timestamp' => 0,
                'room_id' => 204,
                'timestamp' => 1619313206,
                'user_id' => 2,
            ),
            66 => 
            array (
                'exit_timestamp' => 1619313547,
                'room_id' => 204,
                'timestamp' => 1619313507,
                'user_id' => 2,
            ),
            67 => 
            array (
                'exit_timestamp' => 1619313928,
                'room_id' => 204,
                'timestamp' => 1619313894,
                'user_id' => 2,
            ),
            68 => 
            array (
                'exit_timestamp' => 1619314280,
                'room_id' => 208,
                'timestamp' => 1619314264,
                'user_id' => 2,
            ),
            69 => 
            array (
                'exit_timestamp' => 1619314294,
                'room_id' => 202,
                'timestamp' => 1619314280,
                'user_id' => 2,
            ),
            70 => 
            array (
                'exit_timestamp' => 1619314325,
                'room_id' => 202,
                'timestamp' => 1619314294,
                'user_id' => 2,
            ),
            71 => 
            array (
                'exit_timestamp' => 1619321972,
                'room_id' => 208,
                'timestamp' => 1619321770,
                'user_id' => 2,
            ),
            72 => 
            array (
                'exit_timestamp' => 1619322253,
                'room_id' => 204,
                'timestamp' => 1619322173,
                'user_id' => 2,
            ),
            73 => 
            array (
                'exit_timestamp' => 1619322457,
                'room_id' => 204,
                'timestamp' => 1619322359,
                'user_id' => 2,
            ),
            74 => 
            array (
                'exit_timestamp' => 1619322743,
                'room_id' => 204,
                'timestamp' => 1619322699,
                'user_id' => 2,
            ),
            75 => 
            array (
                'exit_timestamp' => 1619322947,
                'room_id' => 204,
                'timestamp' => 1619322929,
                'user_id' => 2,
            ),
            76 => 
            array (
                'exit_timestamp' => 1619323084,
                'room_id' => 208,
                'timestamp' => 1619322972,
                'user_id' => 3,
            ),
            77 => 
            array (
                'exit_timestamp' => 1619323213,
                'room_id' => 208,
                'timestamp' => 1619323201,
                'user_id' => 2,
            ),
            78 => 
            array (
                'exit_timestamp' => 1619325082,
                'room_id' => 205,
                'timestamp' => 1619323213,
                'user_id' => 2,
            ),
            79 => 
            array (
                'exit_timestamp' => 1619324239,
                'room_id' => 208,
                'timestamp' => 1619323340,
                'user_id' => 3,
            ),
            80 => 
            array (
                'exit_timestamp' => 1619324251,
                'room_id' => 203,
                'timestamp' => 1619324239,
                'user_id' => 3,
            ),
            81 => 
            array (
                'exit_timestamp' => 1619325020,
                'room_id' => 208,
                'timestamp' => 1619324251,
                'user_id' => 3,
            ),
            82 => 
            array (
                'exit_timestamp' => 1619325025,
                'room_id' => 203,
                'timestamp' => 1619325020,
                'user_id' => 3,
            ),
            83 => 
            array (
                'exit_timestamp' => 1619325058,
                'room_id' => 203,
                'timestamp' => 1619325025,
                'user_id' => 3,
            ),
            84 => 
            array (
                'exit_timestamp' => 1619325105,
                'room_id' => 208,
                'timestamp' => 1619325089,
                'user_id' => 2,
            ),
            85 => 
            array (
                'exit_timestamp' => 1619325126,
                'room_id' => 202,
                'timestamp' => 1619325105,
                'user_id' => 2,
            ),
            86 => 
            array (
                'exit_timestamp' => 1619325172,
                'room_id' => 202,
                'timestamp' => 1619325126,
                'user_id' => 2,
            ),
            87 => 
            array (
                'exit_timestamp' => 1619325193,
                'room_id' => 207,
                'timestamp' => 1619325172,
                'user_id' => 2,
            ),
            88 => 
            array (
                'exit_timestamp' => 1619325226,
                'room_id' => 207,
                'timestamp' => 1619325193,
                'user_id' => 2,
            ),
            89 => 
            array (
                'exit_timestamp' => 1619325238,
                'room_id' => 207,
                'timestamp' => 1619325226,
                'user_id' => 2,
            ),
            90 => 
            array (
                'exit_timestamp' => 1619325256,
                'room_id' => 207,
                'timestamp' => 1619325238,
                'user_id' => 2,
            ),
            91 => 
            array (
                'exit_timestamp' => 1619325312,
                'room_id' => 202,
                'timestamp' => 1619325256,
                'user_id' => 2,
            ),
            92 => 
            array (
                'exit_timestamp' => 1619325423,
                'room_id' => 208,
                'timestamp' => 1619325339,
                'user_id' => 2,
            ),
            93 => 
            array (
                'exit_timestamp' => 1631579986,
                'room_id' => 204,
                'timestamp' => 1631579931,
                'user_id' => 7,
            ),
            94 => 
            array (
                'exit_timestamp' => 1631579994,
                'room_id' => 205,
                'timestamp' => 1631579986,
                'user_id' => 7,
            ),
            95 => 
            array (
                'exit_timestamp' => 1631579997,
                'room_id' => 205,
                'timestamp' => 1631579994,
                'user_id' => 7,
            ),
            96 => 
            array (
                'exit_timestamp' => 1631580008,
                'room_id' => 204,
                'timestamp' => 1631579997,
                'user_id' => 7,
            ),
            97 => 
            array (
                'exit_timestamp' => 1631580158,
                'room_id' => 209,
                'timestamp' => 1631580008,
                'user_id' => 7,
            ),
            98 => 
            array (
                'exit_timestamp' => 1631580652,
                'room_id' => 209,
                'timestamp' => 1631580193,
                'user_id' => 7,
            ),
            99 => 
            array (
                'exit_timestamp' => 1631580982,
                'room_id' => 204,
                'timestamp' => 1631580973,
                'user_id' => 7,
            ),
            100 => 
            array (
                'exit_timestamp' => 1631581075,
                'room_id' => 206,
                'timestamp' => 1631580982,
                'user_id' => 7,
            ),
            101 => 
            array (
                'exit_timestamp' => 1631581276,
                'room_id' => 209,
                'timestamp' => 1631581075,
                'user_id' => 7,
            ),
            102 => 
            array (
                'exit_timestamp' => 0,
                'room_id' => 209,
                'timestamp' => 1631581284,
                'user_id' => 7,
            ),
            103 => 
            array (
                'exit_timestamp' => 0,
                'room_id' => 209,
                'timestamp' => 1631581829,
                'user_id' => 7,
            ),
            104 => 
            array (
                'exit_timestamp' => 1631666827,
                'room_id' => 209,
                'timestamp' => 1631666731,
                'user_id' => 7,
            ),
            105 => 
            array (
                'exit_timestamp' => 1631666852,
                'room_id' => 209,
                'timestamp' => 1631666832,
                'user_id' => 7,
            ),
            106 => 
            array (
                'exit_timestamp' => 1631667274,
                'room_id' => 209,
                'timestamp' => 1631666859,
                'user_id' => 7,
            ),
        ));
        
        
    }
}