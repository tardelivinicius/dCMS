<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CraftingRecipesIngredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crafting_recipes_ingredients')->delete();
        
        \DB::table('crafting_recipes_ingredients')->insert(array (
            0 => 
            array (
                'recipe_id' => 1,
                'item_id' => 8373,
                'amount' => 4,
            ),
            1 => 
            array (
                'recipe_id' => 2,
                'item_id' => 8363,
                'amount' => 4,
            ),
            2 => 
            array (
                'recipe_id' => 2,
                'item_id' => 8373,
                'amount' => 4,
            ),
            3 => 
            array (
                'recipe_id' => 3,
                'item_id' => 8363,
                'amount' => 8,
            ),
            4 => 
            array (
                'recipe_id' => 4,
                'item_id' => 8404,
                'amount' => 4,
            ),
            5 => 
            array (
                'recipe_id' => 4,
                'item_id' => 8363,
                'amount' => 4,
            ),
            6 => 
            array (
                'recipe_id' => 5,
                'item_id' => 8404,
                'amount' => 3,
            ),
            7 => 
            array (
                'recipe_id' => 6,
                'item_id' => 8363,
                'amount' => 3,
            ),
            8 => 
            array (
                'recipe_id' => 7,
                'item_id' => 8370,
                'amount' => 3,
            ),
            9 => 
            array (
                'recipe_id' => 8,
                'item_id' => 8362,
                'amount' => 3,
            ),
            10 => 
            array (
                'recipe_id' => 15,
                'item_id' => 9581,
                'amount' => 1,
            ),
            11 => 
            array (
                'recipe_id' => 15,
                'item_id' => 9598,
                'amount' => 1,
            ),
            12 => 
            array (
                'recipe_id' => 14,
                'item_id' => 9621,
                'amount' => 2,
            ),
            13 => 
            array (
                'recipe_id' => 14,
                'item_id' => 9611,
                'amount' => 1,
            ),
            14 => 
            array (
                'recipe_id' => 14,
                'item_id' => 9581,
                'amount' => 1,
            ),
            15 => 
            array (
                'recipe_id' => 14,
                'item_id' => 9598,
                'amount' => 1,
            ),
            16 => 
            array (
                'recipe_id' => 13,
                'item_id' => 9611,
                'amount' => 1,
            ),
            17 => 
            array (
                'recipe_id' => 13,
                'item_id' => 9581,
                'amount' => 1,
            ),
            18 => 
            array (
                'recipe_id' => 12,
                'item_id' => 8362,
                'amount' => 4,
            ),
            19 => 
            array (
                'recipe_id' => 12,
                'item_id' => 8370,
                'amount' => 4,
            ),
            20 => 
            array (
                'recipe_id' => 11,
                'item_id' => 8365,
                'amount' => 8,
            ),
            21 => 
            array (
                'recipe_id' => 10,
                'item_id' => 8362,
                'amount' => 8,
            ),
            22 => 
            array (
                'recipe_id' => 9,
                'item_id' => 8365,
                'amount' => 4,
            ),
            23 => 
            array (
                'recipe_id' => 9,
                'item_id' => 8362,
                'amount' => 4,
            ),
            24 => 
            array (
                'recipe_id' => 159,
                'item_id' => 11153,
                'amount' => 2,
            ),
            25 => 
            array (
                'recipe_id' => 160,
                'item_id' => 11147,
                'amount' => 2,
            ),
            26 => 
            array (
                'recipe_id' => 161,
                'item_id' => 11162,
                'amount' => 2,
            ),
            27 => 
            array (
                'recipe_id' => 162,
                'item_id' => 11154,
                'amount' => 2,
            ),
            28 => 
            array (
                'recipe_id' => 25,
                'item_id' => 9431,
                'amount' => 3,
            ),
            29 => 
            array (
                'recipe_id' => 26,
                'item_id' => 9444,
                'amount' => 3,
            ),
            30 => 
            array (
                'recipe_id' => 27,
                'item_id' => 9434,
                'amount' => 3,
            ),
            31 => 
            array (
                'recipe_id' => 28,
                'item_id' => 9411,
                'amount' => 1,
            ),
            32 => 
            array (
                'recipe_id' => 28,
                'item_id' => 9435,
                'amount' => 1,
            ),
            33 => 
            array (
                'recipe_id' => 29,
                'item_id' => 9436,
                'amount' => 3,
            ),
            34 => 
            array (
                'recipe_id' => 29,
                'item_id' => 9411,
                'amount' => 1,
            ),
            35 => 
            array (
                'recipe_id' => 30,
                'item_id' => 9455,
                'amount' => 1,
            ),
            36 => 
            array (
                'recipe_id' => 30,
                'item_id' => 9411,
                'amount' => 1,
            ),
            37 => 
            array (
                'recipe_id' => 31,
                'item_id' => 9444,
                'amount' => 1,
            ),
            38 => 
            array (
                'recipe_id' => 31,
                'item_id' => 9431,
                'amount' => 1,
            ),
            39 => 
            array (
                'recipe_id' => 31,
                'item_id' => 9434,
                'amount' => 1,
            ),
            40 => 
            array (
                'recipe_id' => 32,
                'item_id' => 9457,
                'amount' => 10,
            ),
            41 => 
            array (
                'recipe_id' => 33,
                'item_id' => 9411,
                'amount' => 3,
            ),
            42 => 
            array (
                'recipe_id' => 34,
                'item_id' => 9411,
                'amount' => 1,
            ),
            43 => 
            array (
                'recipe_id' => 34,
                'item_id' => 9457,
                'amount' => 3,
            ),
            44 => 
            array (
                'recipe_id' => 35,
                'item_id' => 9411,
                'amount' => 3,
            ),
            45 => 
            array (
                'recipe_id' => 35,
                'item_id' => 9457,
                'amount' => 1,
            ),
            46 => 
            array (
                'recipe_id' => 36,
                'item_id' => 9411,
                'amount' => 1,
            ),
            47 => 
            array (
                'recipe_id' => 36,
                'item_id' => 9421,
                'amount' => 1,
            ),
            48 => 
            array (
                'recipe_id' => 37,
                'item_id' => 9457,
                'amount' => 1,
            ),
            49 => 
            array (
                'recipe_id' => 37,
                'item_id' => 9435,
                'amount' => 1,
            ),
            50 => 
            array (
                'recipe_id' => 37,
                'item_id' => 9411,
                'amount' => 3,
            ),
            51 => 
            array (
                'recipe_id' => 39,
                'item_id' => 9585,
                'amount' => 1,
            ),
            52 => 
            array (
                'recipe_id' => 39,
                'item_id' => 9581,
                'amount' => 1,
            ),
            53 => 
            array (
                'recipe_id' => 40,
                'item_id' => 9585,
                'amount' => 1,
            ),
            54 => 
            array (
                'recipe_id' => 40,
                'item_id' => 9611,
                'amount' => 1,
            ),
            55 => 
            array (
                'recipe_id' => 41,
                'item_id' => 9585,
                'amount' => 1,
            ),
            56 => 
            array (
                'recipe_id' => 41,
                'item_id' => 9598,
                'amount' => 1,
            ),
            57 => 
            array (
                'recipe_id' => 42,
                'item_id' => 9585,
                'amount' => 1,
            ),
            58 => 
            array (
                'recipe_id' => 42,
                'item_id' => 9582,
                'amount' => 1,
            ),
            59 => 
            array (
                'recipe_id' => 43,
                'item_id' => 9585,
                'amount' => 1,
            ),
            60 => 
            array (
                'recipe_id' => 43,
                'item_id' => 9621,
                'amount' => 1,
            ),
            61 => 
            array (
                'recipe_id' => 44,
                'item_id' => 9585,
                'amount' => 1,
            ),
            62 => 
            array (
                'recipe_id' => 44,
                'item_id' => 9574,
                'amount' => 1,
            ),
            63 => 
            array (
                'recipe_id' => 45,
                'item_id' => 9585,
                'amount' => 1,
            ),
            64 => 
            array (
                'recipe_id' => 45,
                'item_id' => 9581,
                'amount' => 2,
            ),
            65 => 
            array (
                'recipe_id' => 45,
                'item_id' => 9611,
                'amount' => 1,
            ),
            66 => 
            array (
                'recipe_id' => 46,
                'item_id' => 9585,
                'amount' => 1,
            ),
            67 => 
            array (
                'recipe_id' => 46,
                'item_id' => 9581,
                'amount' => 1,
            ),
            68 => 
            array (
                'recipe_id' => 46,
                'item_id' => 9611,
                'amount' => 2,
            ),
            69 => 
            array (
                'recipe_id' => 47,
                'item_id' => 9585,
                'amount' => 1,
            ),
            70 => 
            array (
                'recipe_id' => 47,
                'item_id' => 9581,
                'amount' => 1,
            ),
            71 => 
            array (
                'recipe_id' => 47,
                'item_id' => 9598,
                'amount' => 1,
            ),
            72 => 
            array (
                'recipe_id' => 48,
                'item_id' => 9585,
                'amount' => 1,
            ),
            73 => 
            array (
                'recipe_id' => 48,
                'item_id' => 9621,
                'amount' => 1,
            ),
            74 => 
            array (
                'recipe_id' => 48,
                'item_id' => 9598,
                'amount' => 1,
            ),
            75 => 
            array (
                'recipe_id' => 49,
                'item_id' => 9585,
                'amount' => 1,
            ),
            76 => 
            array (
                'recipe_id' => 49,
                'item_id' => 9582,
                'amount' => 1,
            ),
            77 => 
            array (
                'recipe_id' => 49,
                'item_id' => 9621,
                'amount' => 1,
            ),
            78 => 
            array (
                'recipe_id' => 50,
                'item_id' => 9627,
                'amount' => 1,
            ),
            79 => 
            array (
                'recipe_id' => 50,
                'item_id' => 9581,
                'amount' => 1,
            ),
            80 => 
            array (
                'recipe_id' => 51,
                'item_id' => 9627,
                'amount' => 1,
            ),
            81 => 
            array (
                'recipe_id' => 51,
                'item_id' => 9611,
                'amount' => 1,
            ),
            82 => 
            array (
                'recipe_id' => 52,
                'item_id' => 9627,
                'amount' => 1,
            ),
            83 => 
            array (
                'recipe_id' => 52,
                'item_id' => 9598,
                'amount' => 1,
            ),
            84 => 
            array (
                'recipe_id' => 53,
                'item_id' => 9627,
                'amount' => 1,
            ),
            85 => 
            array (
                'recipe_id' => 53,
                'item_id' => 9582,
                'amount' => 1,
            ),
            86 => 
            array (
                'recipe_id' => 54,
                'item_id' => 9627,
                'amount' => 1,
            ),
            87 => 
            array (
                'recipe_id' => 54,
                'item_id' => 9621,
                'amount' => 1,
            ),
            88 => 
            array (
                'recipe_id' => 55,
                'item_id' => 9627,
                'amount' => 1,
            ),
            89 => 
            array (
                'recipe_id' => 55,
                'item_id' => 9574,
                'amount' => 1,
            ),
            90 => 
            array (
                'recipe_id' => 56,
                'item_id' => 9627,
                'amount' => 1,
            ),
            91 => 
            array (
                'recipe_id' => 56,
                'item_id' => 9581,
                'amount' => 2,
            ),
            92 => 
            array (
                'recipe_id' => 56,
                'item_id' => 9611,
                'amount' => 1,
            ),
            93 => 
            array (
                'recipe_id' => 57,
                'item_id' => 9627,
                'amount' => 1,
            ),
            94 => 
            array (
                'recipe_id' => 57,
                'item_id' => 9581,
                'amount' => 1,
            ),
            95 => 
            array (
                'recipe_id' => 57,
                'item_id' => 9611,
                'amount' => 2,
            ),
            96 => 
            array (
                'recipe_id' => 58,
                'item_id' => 9627,
                'amount' => 1,
            ),
            97 => 
            array (
                'recipe_id' => 58,
                'item_id' => 9581,
                'amount' => 1,
            ),
            98 => 
            array (
                'recipe_id' => 58,
                'item_id' => 9598,
                'amount' => 1,
            ),
            99 => 
            array (
                'recipe_id' => 59,
                'item_id' => 9627,
                'amount' => 1,
            ),
            100 => 
            array (
                'recipe_id' => 59,
                'item_id' => 9621,
                'amount' => 1,
            ),
            101 => 
            array (
                'recipe_id' => 59,
                'item_id' => 9598,
                'amount' => 1,
            ),
            102 => 
            array (
                'recipe_id' => 60,
                'item_id' => 9627,
                'amount' => 1,
            ),
            103 => 
            array (
                'recipe_id' => 60,
                'item_id' => 9582,
                'amount' => 1,
            ),
            104 => 
            array (
                'recipe_id' => 60,
                'item_id' => 9621,
                'amount' => 1,
            ),
            105 => 
            array (
                'recipe_id' => 61,
                'item_id' => 9632,
                'amount' => 1,
            ),
            106 => 
            array (
                'recipe_id' => 61,
                'item_id' => 9581,
                'amount' => 1,
            ),
            107 => 
            array (
                'recipe_id' => 62,
                'item_id' => 9632,
                'amount' => 1,
            ),
            108 => 
            array (
                'recipe_id' => 62,
                'item_id' => 9611,
                'amount' => 1,
            ),
            109 => 
            array (
                'recipe_id' => 63,
                'item_id' => 9632,
                'amount' => 1,
            ),
            110 => 
            array (
                'recipe_id' => 63,
                'item_id' => 9598,
                'amount' => 1,
            ),
            111 => 
            array (
                'recipe_id' => 64,
                'item_id' => 9632,
                'amount' => 1,
            ),
            112 => 
            array (
                'recipe_id' => 64,
                'item_id' => 9582,
                'amount' => 1,
            ),
            113 => 
            array (
                'recipe_id' => 65,
                'item_id' => 9632,
                'amount' => 1,
            ),
            114 => 
            array (
                'recipe_id' => 65,
                'item_id' => 9621,
                'amount' => 1,
            ),
            115 => 
            array (
                'recipe_id' => 66,
                'item_id' => 9632,
                'amount' => 1,
            ),
            116 => 
            array (
                'recipe_id' => 66,
                'item_id' => 9574,
                'amount' => 1,
            ),
            117 => 
            array (
                'recipe_id' => 67,
                'item_id' => 9632,
                'amount' => 1,
            ),
            118 => 
            array (
                'recipe_id' => 67,
                'item_id' => 9581,
                'amount' => 2,
            ),
            119 => 
            array (
                'recipe_id' => 67,
                'item_id' => 9611,
                'amount' => 1,
            ),
            120 => 
            array (
                'recipe_id' => 68,
                'item_id' => 9632,
                'amount' => 1,
            ),
            121 => 
            array (
                'recipe_id' => 68,
                'item_id' => 9581,
                'amount' => 1,
            ),
            122 => 
            array (
                'recipe_id' => 68,
                'item_id' => 9611,
                'amount' => 2,
            ),
            123 => 
            array (
                'recipe_id' => 69,
                'item_id' => 9632,
                'amount' => 1,
            ),
            124 => 
            array (
                'recipe_id' => 69,
                'item_id' => 9581,
                'amount' => 1,
            ),
            125 => 
            array (
                'recipe_id' => 69,
                'item_id' => 9598,
                'amount' => 1,
            ),
            126 => 
            array (
                'recipe_id' => 70,
                'item_id' => 9632,
                'amount' => 1,
            ),
            127 => 
            array (
                'recipe_id' => 70,
                'item_id' => 9621,
                'amount' => 1,
            ),
            128 => 
            array (
                'recipe_id' => 70,
                'item_id' => 9598,
                'amount' => 1,
            ),
            129 => 
            array (
                'recipe_id' => 71,
                'item_id' => 9632,
                'amount' => 1,
            ),
            130 => 
            array (
                'recipe_id' => 71,
                'item_id' => 9582,
                'amount' => 1,
            ),
            131 => 
            array (
                'recipe_id' => 71,
                'item_id' => 9621,
                'amount' => 1,
            ),
            132 => 
            array (
                'recipe_id' => 72,
                'item_id' => 9622,
                'amount' => 1,
            ),
            133 => 
            array (
                'recipe_id' => 72,
                'item_id' => 9581,
                'amount' => 1,
            ),
            134 => 
            array (
                'recipe_id' => 73,
                'item_id' => 9622,
                'amount' => 1,
            ),
            135 => 
            array (
                'recipe_id' => 73,
                'item_id' => 9611,
                'amount' => 1,
            ),
            136 => 
            array (
                'recipe_id' => 74,
                'item_id' => 9622,
                'amount' => 1,
            ),
            137 => 
            array (
                'recipe_id' => 74,
                'item_id' => 9598,
                'amount' => 1,
            ),
            138 => 
            array (
                'recipe_id' => 75,
                'item_id' => 9622,
                'amount' => 1,
            ),
            139 => 
            array (
                'recipe_id' => 75,
                'item_id' => 9582,
                'amount' => 1,
            ),
            140 => 
            array (
                'recipe_id' => 76,
                'item_id' => 9622,
                'amount' => 1,
            ),
            141 => 
            array (
                'recipe_id' => 76,
                'item_id' => 9621,
                'amount' => 1,
            ),
            142 => 
            array (
                'recipe_id' => 77,
                'item_id' => 9622,
                'amount' => 1,
            ),
            143 => 
            array (
                'recipe_id' => 77,
                'item_id' => 9574,
                'amount' => 1,
            ),
            144 => 
            array (
                'recipe_id' => 78,
                'item_id' => 9622,
                'amount' => 1,
            ),
            145 => 
            array (
                'recipe_id' => 78,
                'item_id' => 9581,
                'amount' => 2,
            ),
            146 => 
            array (
                'recipe_id' => 78,
                'item_id' => 9611,
                'amount' => 1,
            ),
            147 => 
            array (
                'recipe_id' => 79,
                'item_id' => 9622,
                'amount' => 1,
            ),
            148 => 
            array (
                'recipe_id' => 79,
                'item_id' => 9581,
                'amount' => 1,
            ),
            149 => 
            array (
                'recipe_id' => 79,
                'item_id' => 9611,
                'amount' => 2,
            ),
            150 => 
            array (
                'recipe_id' => 80,
                'item_id' => 9622,
                'amount' => 1,
            ),
            151 => 
            array (
                'recipe_id' => 80,
                'item_id' => 9581,
                'amount' => 1,
            ),
            152 => 
            array (
                'recipe_id' => 80,
                'item_id' => 9598,
                'amount' => 1,
            ),
            153 => 
            array (
                'recipe_id' => 81,
                'item_id' => 9622,
                'amount' => 1,
            ),
            154 => 
            array (
                'recipe_id' => 81,
                'item_id' => 9621,
                'amount' => 1,
            ),
            155 => 
            array (
                'recipe_id' => 81,
                'item_id' => 9598,
                'amount' => 1,
            ),
            156 => 
            array (
                'recipe_id' => 82,
                'item_id' => 9622,
                'amount' => 1,
            ),
            157 => 
            array (
                'recipe_id' => 82,
                'item_id' => 9582,
                'amount' => 1,
            ),
            158 => 
            array (
                'recipe_id' => 82,
                'item_id' => 9621,
                'amount' => 1,
            ),
            159 => 
            array (
                'recipe_id' => 83,
                'item_id' => 9645,
                'amount' => 1,
            ),
            160 => 
            array (
                'recipe_id' => 83,
                'item_id' => 9581,
                'amount' => 1,
            ),
            161 => 
            array (
                'recipe_id' => 84,
                'item_id' => 9645,
                'amount' => 1,
            ),
            162 => 
            array (
                'recipe_id' => 84,
                'item_id' => 9611,
                'amount' => 1,
            ),
            163 => 
            array (
                'recipe_id' => 85,
                'item_id' => 9645,
                'amount' => 1,
            ),
            164 => 
            array (
                'recipe_id' => 85,
                'item_id' => 9598,
                'amount' => 1,
            ),
            165 => 
            array (
                'recipe_id' => 86,
                'item_id' => 9645,
                'amount' => 1,
            ),
            166 => 
            array (
                'recipe_id' => 86,
                'item_id' => 9582,
                'amount' => 1,
            ),
            167 => 
            array (
                'recipe_id' => 87,
                'item_id' => 9645,
                'amount' => 1,
            ),
            168 => 
            array (
                'recipe_id' => 87,
                'item_id' => 9621,
                'amount' => 1,
            ),
            169 => 
            array (
                'recipe_id' => 88,
                'item_id' => 9645,
                'amount' => 1,
            ),
            170 => 
            array (
                'recipe_id' => 88,
                'item_id' => 9574,
                'amount' => 1,
            ),
            171 => 
            array (
                'recipe_id' => 89,
                'item_id' => 9645,
                'amount' => 1,
            ),
            172 => 
            array (
                'recipe_id' => 89,
                'item_id' => 9581,
                'amount' => 2,
            ),
            173 => 
            array (
                'recipe_id' => 89,
                'item_id' => 9611,
                'amount' => 1,
            ),
            174 => 
            array (
                'recipe_id' => 90,
                'item_id' => 9645,
                'amount' => 1,
            ),
            175 => 
            array (
                'recipe_id' => 90,
                'item_id' => 9581,
                'amount' => 1,
            ),
            176 => 
            array (
                'recipe_id' => 90,
                'item_id' => 9611,
                'amount' => 2,
            ),
            177 => 
            array (
                'recipe_id' => 91,
                'item_id' => 9645,
                'amount' => 1,
            ),
            178 => 
            array (
                'recipe_id' => 91,
                'item_id' => 9581,
                'amount' => 1,
            ),
            179 => 
            array (
                'recipe_id' => 91,
                'item_id' => 9598,
                'amount' => 1,
            ),
            180 => 
            array (
                'recipe_id' => 92,
                'item_id' => 9645,
                'amount' => 1,
            ),
            181 => 
            array (
                'recipe_id' => 92,
                'item_id' => 9621,
                'amount' => 1,
            ),
            182 => 
            array (
                'recipe_id' => 92,
                'item_id' => 9598,
                'amount' => 1,
            ),
            183 => 
            array (
                'recipe_id' => 93,
                'item_id' => 9645,
                'amount' => 1,
            ),
            184 => 
            array (
                'recipe_id' => 93,
                'item_id' => 9582,
                'amount' => 1,
            ),
            185 => 
            array (
                'recipe_id' => 93,
                'item_id' => 9621,
                'amount' => 1,
            ),
            186 => 
            array (
                'recipe_id' => 94,
                'item_id' => 9793,
                'amount' => 1,
            ),
            187 => 
            array (
                'recipe_id' => 94,
                'item_id' => 9826,
                'amount' => 1,
            ),
            188 => 
            array (
                'recipe_id' => 94,
                'item_id' => 9838,
                'amount' => 2,
            ),
            189 => 
            array (
                'recipe_id' => 95,
                'item_id' => 9842,
                'amount' => 1,
            ),
            190 => 
            array (
                'recipe_id' => 95,
                'item_id' => 9826,
                'amount' => 1,
            ),
            191 => 
            array (
                'recipe_id' => 95,
                'item_id' => 9838,
                'amount' => 2,
            ),
            192 => 
            array (
                'recipe_id' => 96,
                'item_id' => 9892,
                'amount' => 1,
            ),
            193 => 
            array (
                'recipe_id' => 96,
                'item_id' => 9826,
                'amount' => 2,
            ),
            194 => 
            array (
                'recipe_id' => 96,
                'item_id' => 9838,
                'amount' => 4,
            ),
            195 => 
            array (
                'recipe_id' => 97,
                'item_id' => 9833,
                'amount' => 1,
            ),
            196 => 
            array (
                'recipe_id' => 97,
                'item_id' => 9826,
                'amount' => 2,
            ),
            197 => 
            array (
                'recipe_id' => 97,
                'item_id' => 9838,
                'amount' => 4,
            ),
            198 => 
            array (
                'recipe_id' => 98,
                'item_id' => 9790,
                'amount' => 1,
            ),
            199 => 
            array (
                'recipe_id' => 98,
                'item_id' => 9826,
                'amount' => 3,
            ),
            200 => 
            array (
                'recipe_id' => 98,
                'item_id' => 9838,
                'amount' => 6,
            ),
            201 => 
            array (
                'recipe_id' => 99,
                'item_id' => 9801,
                'amount' => 1,
            ),
            202 => 
            array (
                'recipe_id' => 99,
                'item_id' => 9826,
                'amount' => 3,
            ),
            203 => 
            array (
                'recipe_id' => 99,
                'item_id' => 9838,
                'amount' => 6,
            ),
            204 => 
            array (
                'recipe_id' => 100,
                'item_id' => 10133,
                'amount' => 2,
            ),
            205 => 
            array (
                'recipe_id' => 100,
                'item_id' => 10132,
                'amount' => 2,
            ),
            206 => 
            array (
                'recipe_id' => 101,
                'item_id' => 10152,
                'amount' => 2,
            ),
            207 => 
            array (
                'recipe_id' => 101,
                'item_id' => 10155,
                'amount' => 2,
            ),
            208 => 
            array (
                'recipe_id' => 102,
                'item_id' => 10139,
                'amount' => 2,
            ),
            209 => 
            array (
                'recipe_id' => 102,
                'item_id' => 10167,
                'amount' => 2,
            ),
            210 => 
            array (
                'recipe_id' => 103,
                'item_id' => 10171,
                'amount' => 2,
            ),
            211 => 
            array (
                'recipe_id' => 103,
                'item_id' => 10185,
                'amount' => 2,
            ),
            212 => 
            array (
                'recipe_id' => 104,
                'item_id' => 10144,
                'amount' => 2,
            ),
            213 => 
            array (
                'recipe_id' => 104,
                'item_id' => 10168,
                'amount' => 2,
            ),
            214 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10155,
                'amount' => 1,
            ),
            215 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10144,
                'amount' => 1,
            ),
            216 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10185,
                'amount' => 1,
            ),
            217 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10168,
                'amount' => 1,
            ),
            218 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10139,
                'amount' => 1,
            ),
            219 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10133,
                'amount' => 1,
            ),
            220 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10171,
                'amount' => 1,
            ),
            221 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10152,
                'amount' => 1,
            ),
            222 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10132,
                'amount' => 1,
            ),
            223 => 
            array (
                'recipe_id' => 105,
                'item_id' => 10167,
                'amount' => 1,
            ),
            224 => 
            array (
                'recipe_id' => 106,
                'item_id' => 10298,
                'amount' => 1,
            ),
            225 => 
            array (
                'recipe_id' => 106,
                'item_id' => 10265,
                'amount' => 2,
            ),
            226 => 
            array (
                'recipe_id' => 107,
                'item_id' => 10291,
                'amount' => 1,
            ),
            227 => 
            array (
                'recipe_id' => 107,
                'item_id' => 10265,
                'amount' => 2,
            ),
            228 => 
            array (
                'recipe_id' => 108,
                'item_id' => 10305,
                'amount' => 1,
            ),
            229 => 
            array (
                'recipe_id' => 108,
                'item_id' => 10284,
                'amount' => 2,
            ),
            230 => 
            array (
                'recipe_id' => 108,
                'item_id' => 10265,
                'amount' => 2,
            ),
            231 => 
            array (
                'recipe_id' => 109,
                'item_id' => 10245,
                'amount' => 1,
            ),
            232 => 
            array (
                'recipe_id' => 109,
                'item_id' => 10284,
                'amount' => 2,
            ),
            233 => 
            array (
                'recipe_id' => 109,
                'item_id' => 10265,
                'amount' => 2,
            ),
            234 => 
            array (
                'recipe_id' => 110,
                'item_id' => 10239,
                'amount' => 1,
            ),
            235 => 
            array (
                'recipe_id' => 110,
                'item_id' => 10284,
                'amount' => 2,
            ),
            236 => 
            array (
                'recipe_id' => 110,
                'item_id' => 10265,
                'amount' => 2,
            ),
            237 => 
            array (
                'recipe_id' => 111,
                'item_id' => 10276,
                'amount' => 1,
            ),
            238 => 
            array (
                'recipe_id' => 111,
                'item_id' => 10284,
                'amount' => 5,
            ),
            239 => 
            array (
                'recipe_id' => 112,
                'item_id' => 10301,
                'amount' => 1,
            ),
            240 => 
            array (
                'recipe_id' => 112,
                'item_id' => 10284,
                'amount' => 5,
            ),
            241 => 
            array (
                'recipe_id' => 113,
                'item_id' => 10303,
                'amount' => 1,
            ),
            242 => 
            array (
                'recipe_id' => 113,
                'item_id' => 10284,
                'amount' => 5,
            ),
            243 => 
            array (
                'recipe_id' => 113,
                'item_id' => 10265,
                'amount' => 2,
            ),
            244 => 
            array (
                'recipe_id' => 114,
                'item_id' => 10296,
                'amount' => 1,
            ),
            245 => 
            array (
                'recipe_id' => 114,
                'item_id' => 10284,
                'amount' => 5,
            ),
            246 => 
            array (
                'recipe_id' => 114,
                'item_id' => 10265,
                'amount' => 2,
            ),
            247 => 
            array (
                'recipe_id' => 115,
                'item_id' => 10287,
                'amount' => 1,
            ),
            248 => 
            array (
                'recipe_id' => 115,
                'item_id' => 10284,
                'amount' => 5,
            ),
            249 => 
            array (
                'recipe_id' => 115,
                'item_id' => 10265,
                'amount' => 2,
            ),
            250 => 
            array (
                'recipe_id' => 116,
                'item_id' => 10272,
                'amount' => 1,
            ),
            251 => 
            array (
                'recipe_id' => 116,
                'item_id' => 10265,
                'amount' => 5,
            ),
            252 => 
            array (
                'recipe_id' => 116,
                'item_id' => 10284,
                'amount' => 4,
            ),
            253 => 
            array (
                'recipe_id' => 117,
                'item_id' => 10371,
                'amount' => 2,
            ),
            254 => 
            array (
                'recipe_id' => 117,
                'item_id' => 10370,
                'amount' => 2,
            ),
            255 => 
            array (
                'recipe_id' => 118,
                'item_id' => 10370,
                'amount' => 2,
            ),
            256 => 
            array (
                'recipe_id' => 118,
                'item_id' => 10398,
                'amount' => 2,
            ),
            257 => 
            array (
                'recipe_id' => 119,
                'item_id' => 10352,
                'amount' => 3,
            ),
            258 => 
            array (
                'recipe_id' => 119,
                'item_id' => 10378,
                'amount' => 3,
            ),
            259 => 
            array (
                'recipe_id' => 120,
                'item_id' => 10378,
                'amount' => 2,
            ),
            260 => 
            array (
                'recipe_id' => 120,
                'item_id' => 10384,
                'amount' => 1,
            ),
            261 => 
            array (
                'recipe_id' => 120,
                'item_id' => 10341,
                'amount' => 1,
            ),
            262 => 
            array (
                'recipe_id' => 121,
                'item_id' => 10352,
                'amount' => 2,
            ),
            263 => 
            array (
                'recipe_id' => 121,
                'item_id' => 10349,
                'amount' => 1,
            ),
            264 => 
            array (
                'recipe_id' => 121,
                'item_id' => 10387,
                'amount' => 1,
            ),
            265 => 
            array (
                'recipe_id' => 122,
                'item_id' => 10371,
                'amount' => 2,
            ),
            266 => 
            array (
                'recipe_id' => 122,
                'item_id' => 10343,
                'amount' => 2,
            ),
            267 => 
            array (
                'recipe_id' => 122,
                'item_id' => 10384,
                'amount' => 2,
            ),
            268 => 
            array (
                'recipe_id' => 123,
                'item_id' => 10378,
                'amount' => 2,
            ),
            269 => 
            array (
                'recipe_id' => 123,
                'item_id' => 10371,
                'amount' => 2,
            ),
            270 => 
            array (
                'recipe_id' => 123,
                'item_id' => 10370,
                'amount' => 2,
            ),
            271 => 
            array (
                'recipe_id' => 123,
                'item_id' => 10398,
                'amount' => 1,
            ),
            272 => 
            array (
                'recipe_id' => 123,
                'item_id' => 10352,
                'amount' => 1,
            ),
            273 => 
            array (
                'recipe_id' => 123,
                'item_id' => 10349,
                'amount' => 1,
            ),
            274 => 
            array (
                'recipe_id' => 123,
                'item_id' => 10341,
                'amount' => 1,
            ),
            275 => 
            array (
                'recipe_id' => 124,
                'item_id' => 10595,
                'amount' => 1,
            ),
            276 => 
            array (
                'recipe_id' => 124,
                'item_id' => 10596,
                'amount' => 3,
            ),
            277 => 
            array (
                'recipe_id' => 125,
                'item_id' => 10595,
                'amount' => 1,
            ),
            278 => 
            array (
                'recipe_id' => 125,
                'item_id' => 10597,
                'amount' => 3,
            ),
            279 => 
            array (
                'recipe_id' => 126,
                'item_id' => 10621,
                'amount' => 1,
            ),
            280 => 
            array (
                'recipe_id' => 126,
                'item_id' => 10596,
                'amount' => 1,
            ),
            281 => 
            array (
                'recipe_id' => 127,
                'item_id' => 10621,
                'amount' => 1,
            ),
            282 => 
            array (
                'recipe_id' => 127,
                'item_id' => 10597,
                'amount' => 1,
            ),
            283 => 
            array (
                'recipe_id' => 128,
                'item_id' => 10638,
                'amount' => 1,
            ),
            284 => 
            array (
                'recipe_id' => 128,
                'item_id' => 10596,
                'amount' => 2,
            ),
            285 => 
            array (
                'recipe_id' => 129,
                'item_id' => 10638,
                'amount' => 1,
            ),
            286 => 
            array (
                'recipe_id' => 129,
                'item_id' => 10597,
                'amount' => 2,
            ),
            287 => 
            array (
                'recipe_id' => 130,
                'item_id' => 10574,
                'amount' => 1,
            ),
            288 => 
            array (
                'recipe_id' => 130,
                'item_id' => 10596,
                'amount' => 4,
            ),
            289 => 
            array (
                'recipe_id' => 131,
                'item_id' => 10574,
                'amount' => 1,
            ),
            290 => 
            array (
                'recipe_id' => 131,
                'item_id' => 10597,
                'amount' => 4,
            ),
            291 => 
            array (
                'recipe_id' => 132,
                'item_id' => 10600,
                'amount' => 1,
            ),
            292 => 
            array (
                'recipe_id' => 132,
                'item_id' => 10582,
                'amount' => 1,
            ),
            293 => 
            array (
                'recipe_id' => 133,
                'item_id' => 10629,
                'amount' => 5,
            ),
            294 => 
            array (
                'recipe_id' => 134,
                'item_id' => 10636,
                'amount' => 1,
            ),
            295 => 
            array (
                'recipe_id' => 134,
                'item_id' => 10582,
                'amount' => 2,
            ),
            296 => 
            array (
                'recipe_id' => 135,
                'item_id' => 10583,
                'amount' => 5,
            ),
            297 => 
            array (
                'recipe_id' => 136,
                'item_id' => 10614,
                'amount' => 1,
            ),
            298 => 
            array (
                'recipe_id' => 136,
                'item_id' => 10582,
                'amount' => 3,
            ),
            299 => 
            array (
                'recipe_id' => 137,
                'item_id' => 10618,
                'amount' => 5,
            ),
            300 => 
            array (
                'recipe_id' => 138,
                'item_id' => 10606,
                'amount' => 1,
            ),
            301 => 
            array (
                'recipe_id' => 138,
                'item_id' => 10582,
                'amount' => 4,
            ),
            302 => 
            array (
                'recipe_id' => 139,
                'item_id' => 10628,
                'amount' => 5,
            ),
            303 => 
            array (
                'recipe_id' => 140,
                'item_id' => 10597,
                'amount' => 5,
            ),
            304 => 
            array (
                'recipe_id' => 140,
                'item_id' => 10610,
                'amount' => 1,
            ),
            305 => 
            array (
                'recipe_id' => 141,
                'item_id' => 10720,
                'amount' => 2,
            ),
            306 => 
            array (
                'recipe_id' => 141,
                'item_id' => 10711,
                'amount' => 2,
            ),
            307 => 
            array (
                'recipe_id' => 142,
                'item_id' => 10720,
                'amount' => 3,
            ),
            308 => 
            array (
                'recipe_id' => 142,
                'item_id' => 10711,
                'amount' => 3,
            ),
            309 => 
            array (
                'recipe_id' => 143,
                'item_id' => 10720,
                'amount' => 2,
            ),
            310 => 
            array (
                'recipe_id' => 143,
                'item_id' => 10729,
                'amount' => 2,
            ),
            311 => 
            array (
                'recipe_id' => 144,
                'item_id' => 10720,
                'amount' => 3,
            ),
            312 => 
            array (
                'recipe_id' => 144,
                'item_id' => 10729,
                'amount' => 3,
            ),
            313 => 
            array (
                'recipe_id' => 145,
                'item_id' => 10711,
                'amount' => 2,
            ),
            314 => 
            array (
                'recipe_id' => 145,
                'item_id' => 10729,
                'amount' => 2,
            ),
            315 => 
            array (
                'recipe_id' => 146,
                'item_id' => 10711,
                'amount' => 3,
            ),
            316 => 
            array (
                'recipe_id' => 146,
                'item_id' => 10729,
                'amount' => 3,
            ),
            317 => 
            array (
                'recipe_id' => 147,
                'item_id' => 10711,
                'amount' => 4,
            ),
            318 => 
            array (
                'recipe_id' => 147,
                'item_id' => 10729,
                'amount' => 4,
            ),
            319 => 
            array (
                'recipe_id' => 148,
                'item_id' => 10711,
                'amount' => 5,
            ),
            320 => 
            array (
                'recipe_id' => 148,
                'item_id' => 10729,
                'amount' => 5,
            ),
            321 => 
            array (
                'recipe_id' => 177,
                'item_id' => 8955,
                'amount' => 1,
            ),
            322 => 
            array (
                'recipe_id' => 176,
                'item_id' => 8936,
                'amount' => 1,
            ),
            323 => 
            array (
                'recipe_id' => 176,
                'item_id' => 8963,
                'amount' => 1,
            ),
            324 => 
            array (
                'recipe_id' => 150,
                'item_id' => 10791,
                'amount' => 2,
            ),
            325 => 
            array (
                'recipe_id' => 150,
                'item_id' => 10824,
                'amount' => 2,
            ),
            326 => 
            array (
                'recipe_id' => 150,
                'item_id' => 10825,
                'amount' => 2,
            ),
            327 => 
            array (
                'recipe_id' => 151,
                'item_id' => 10825,
                'amount' => 2,
            ),
            328 => 
            array (
                'recipe_id' => 151,
                'item_id' => 10829,
                'amount' => 2,
            ),
            329 => 
            array (
                'recipe_id' => 151,
                'item_id' => 10826,
                'amount' => 2,
            ),
            330 => 
            array (
                'recipe_id' => 152,
                'item_id' => 10812,
                'amount' => 3,
            ),
            331 => 
            array (
                'recipe_id' => 152,
                'item_id' => 10824,
                'amount' => 3,
            ),
            332 => 
            array (
                'recipe_id' => 152,
                'item_id' => 10798,
                'amount' => 3,
            ),
            333 => 
            array (
                'recipe_id' => 153,
                'item_id' => 10829,
                'amount' => 3,
            ),
            334 => 
            array (
                'recipe_id' => 153,
                'item_id' => 10798,
                'amount' => 3,
            ),
            335 => 
            array (
                'recipe_id' => 153,
                'item_id' => 10824,
                'amount' => 3,
            ),
            336 => 
            array (
                'recipe_id' => 154,
                'item_id' => 10902,
                'amount' => 5,
            ),
            337 => 
            array (
                'recipe_id' => 155,
                'item_id' => 10907,
                'amount' => 5,
            ),
            338 => 
            array (
                'recipe_id' => 156,
                'item_id' => 10881,
                'amount' => 2,
            ),
            339 => 
            array (
                'recipe_id' => 156,
                'item_id' => 10884,
                'amount' => 5,
            ),
            340 => 
            array (
                'recipe_id' => 157,
                'item_id' => 10881,
                'amount' => 2,
            ),
            341 => 
            array (
                'recipe_id' => 157,
                'item_id' => 10940,
                'amount' => 3,
            ),
            342 => 
            array (
                'recipe_id' => 158,
                'item_id' => 10881,
                'amount' => 2,
            ),
            343 => 
            array (
                'recipe_id' => 158,
                'item_id' => 10930,
                'amount' => 3,
            ),
            344 => 
            array (
                'recipe_id' => 163,
                'item_id' => 10031,
                'amount' => 1,
            ),
            345 => 
            array (
                'recipe_id' => 163,
                'item_id' => 10033,
                'amount' => 1,
            ),
            346 => 
            array (
                'recipe_id' => 164,
                'item_id' => 10031,
                'amount' => 2,
            ),
            347 => 
            array (
                'recipe_id' => 164,
                'item_id' => 10033,
                'amount' => 2,
            ),
            348 => 
            array (
                'recipe_id' => 165,
                'item_id' => 10031,
                'amount' => 3,
            ),
            349 => 
            array (
                'recipe_id' => 165,
                'item_id' => 10033,
                'amount' => 3,
            ),
            350 => 
            array (
                'recipe_id' => 166,
                'item_id' => 10031,
                'amount' => 4,
            ),
            351 => 
            array (
                'recipe_id' => 166,
                'item_id' => 10033,
                'amount' => 4,
            ),
            352 => 
            array (
                'recipe_id' => 167,
                'item_id' => 8920,
                'amount' => 1,
            ),
            353 => 
            array (
                'recipe_id' => 167,
                'item_id' => 8936,
                'amount' => 1,
            ),
            354 => 
            array (
                'recipe_id' => 168,
                'item_id' => 8947,
                'amount' => 1,
            ),
            355 => 
            array (
                'recipe_id' => 168,
                'item_id' => 8936,
                'amount' => 1,
            ),
            356 => 
            array (
                'recipe_id' => 169,
                'item_id' => 8936,
                'amount' => 1,
            ),
            357 => 
            array (
                'recipe_id' => 169,
                'item_id' => 8927,
                'amount' => 1,
            ),
            358 => 
            array (
                'recipe_id' => 170,
                'item_id' => 8936,
                'amount' => 1,
            ),
            359 => 
            array (
                'recipe_id' => 170,
                'item_id' => 8922,
                'amount' => 1,
            ),
            360 => 
            array (
                'recipe_id' => 171,
                'item_id' => 8929,
                'amount' => 1,
            ),
            361 => 
            array (
                'recipe_id' => 171,
                'item_id' => 8936,
                'amount' => 1,
            ),
            362 => 
            array (
                'recipe_id' => 172,
                'item_id' => 8936,
                'amount' => 1,
            ),
            363 => 
            array (
                'recipe_id' => 173,
                'item_id' => 8936,
                'amount' => 1,
            ),
            364 => 
            array (
                'recipe_id' => 172,
                'item_id' => 8962,
                'amount' => 1,
            ),
            365 => 
            array (
                'recipe_id' => 173,
                'item_id' => 8935,
                'amount' => 1,
            ),
            366 => 
            array (
                'recipe_id' => 174,
                'item_id' => 8979,
                'amount' => 1,
            ),
            367 => 
            array (
                'recipe_id' => 174,
                'item_id' => 8936,
                'amount' => 1,
            ),
            368 => 
            array (
                'recipe_id' => 175,
                'item_id' => 8986,
                'amount' => 1,
            ),
            369 => 
            array (
                'recipe_id' => 175,
                'item_id' => 8936,
                'amount' => 1,
            ),
            370 => 
            array (
                'recipe_id' => 180,
                'item_id' => 8920,
                'amount' => 1,
            ),
            371 => 
            array (
                'recipe_id' => 180,
                'item_id' => 8921,
                'amount' => 1,
            ),
            372 => 
            array (
                'recipe_id' => 179,
                'item_id' => 8991,
                'amount' => 1,
            ),
            373 => 
            array (
                'recipe_id' => 179,
                'item_id' => 8936,
                'amount' => 1,
            ),
            374 => 
            array (
                'recipe_id' => 178,
                'item_id' => 8936,
                'amount' => 1,
            ),
            375 => 
            array (
                'recipe_id' => 178,
                'item_id' => 8967,
                'amount' => 1,
            ),
            376 => 
            array (
                'recipe_id' => 177,
                'item_id' => 8936,
                'amount' => 1,
            ),
            377 => 
            array (
                'recipe_id' => 209,
                'item_id' => 9191,
                'amount' => 5,
            ),
            378 => 
            array (
                'recipe_id' => 208,
                'item_id' => 9188,
                'amount' => 3,
            ),
            379 => 
            array (
                'recipe_id' => 207,
                'item_id' => 9158,
                'amount' => 3,
            ),
            380 => 
            array (
                'recipe_id' => 192,
                'item_id' => 8991,
                'amount' => 1,
            ),
            381 => 
            array (
                'recipe_id' => 192,
                'item_id' => 8921,
                'amount' => 1,
            ),
            382 => 
            array (
                'recipe_id' => 191,
                'item_id' => 8967,
                'amount' => 1,
            ),
            383 => 
            array (
                'recipe_id' => 191,
                'item_id' => 8921,
                'amount' => 1,
            ),
            384 => 
            array (
                'recipe_id' => 190,
                'item_id' => 8921,
                'amount' => 1,
            ),
            385 => 
            array (
                'recipe_id' => 190,
                'item_id' => 8955,
                'amount' => 1,
            ),
            386 => 
            array (
                'recipe_id' => 189,
                'item_id' => 8963,
                'amount' => 1,
            ),
            387 => 
            array (
                'recipe_id' => 189,
                'item_id' => 8921,
                'amount' => 1,
            ),
            388 => 
            array (
                'recipe_id' => 188,
                'item_id' => 8986,
                'amount' => 1,
            ),
            389 => 
            array (
                'recipe_id' => 188,
                'item_id' => 8921,
                'amount' => 1,
            ),
            390 => 
            array (
                'recipe_id' => 187,
                'item_id' => 8921,
                'amount' => 1,
            ),
            391 => 
            array (
                'recipe_id' => 187,
                'item_id' => 8979,
                'amount' => 1,
            ),
            392 => 
            array (
                'recipe_id' => 186,
                'item_id' => 8935,
                'amount' => 1,
            ),
            393 => 
            array (
                'recipe_id' => 186,
                'item_id' => 8921,
                'amount' => 1,
            ),
            394 => 
            array (
                'recipe_id' => 185,
                'item_id' => 8921,
                'amount' => 1,
            ),
            395 => 
            array (
                'recipe_id' => 185,
                'item_id' => 8962,
                'amount' => 1,
            ),
            396 => 
            array (
                'recipe_id' => 184,
                'item_id' => 8929,
                'amount' => 1,
            ),
            397 => 
            array (
                'recipe_id' => 184,
                'item_id' => 8921,
                'amount' => 1,
            ),
            398 => 
            array (
                'recipe_id' => 183,
                'item_id' => 8921,
                'amount' => 1,
            ),
            399 => 
            array (
                'recipe_id' => 183,
                'item_id' => 8922,
                'amount' => 1,
            ),
            400 => 
            array (
                'recipe_id' => 182,
                'item_id' => 8927,
                'amount' => 1,
            ),
            401 => 
            array (
                'recipe_id' => 182,
                'item_id' => 8921,
                'amount' => 1,
            ),
            402 => 
            array (
                'recipe_id' => 181,
                'item_id' => 8921,
                'amount' => 1,
            ),
            403 => 
            array (
                'recipe_id' => 181,
                'item_id' => 8947,
                'amount' => 1,
            ),
            404 => 
            array (
                'recipe_id' => 209,
                'item_id' => 9188,
                'amount' => 5,
            ),
            405 => 
            array (
                'recipe_id' => 210,
                'item_id' => 9191,
                'amount' => 10,
            ),
            406 => 
            array (
                'recipe_id' => 211,
                'item_id' => 9158,
                'amount' => 1,
            ),
            407 => 
            array (
                'recipe_id' => 211,
                'item_id' => 9194,
                'amount' => 1,
            ),
            408 => 
            array (
                'recipe_id' => 212,
                'item_id' => 9158,
                'amount' => 1,
            ),
            409 => 
            array (
                'recipe_id' => 212,
                'item_id' => 9150,
                'amount' => 1,
            ),
            410 => 
            array (
                'recipe_id' => 213,
                'item_id' => 9158,
                'amount' => 1,
            ),
            411 => 
            array (
                'recipe_id' => 213,
                'item_id' => 9149,
                'amount' => 1,
            ),
            412 => 
            array (
                'recipe_id' => 214,
                'item_id' => 9158,
                'amount' => 1,
            ),
            413 => 
            array (
                'recipe_id' => 214,
                'item_id' => 9161,
                'amount' => 1,
            ),
            414 => 
            array (
                'recipe_id' => 215,
                'item_id' => 9158,
                'amount' => 1,
            ),
            415 => 
            array (
                'recipe_id' => 215,
                'item_id' => 9190,
                'amount' => 1,
            ),
            416 => 
            array (
                'recipe_id' => 216,
                'item_id' => 9158,
                'amount' => 1,
            ),
            417 => 
            array (
                'recipe_id' => 216,
                'item_id' => 9174,
                'amount' => 1,
            ),
            418 => 
            array (
                'recipe_id' => 217,
                'item_id' => 9158,
                'amount' => 1,
            ),
            419 => 
            array (
                'recipe_id' => 217,
                'item_id' => 9176,
                'amount' => 1,
            ),
            420 => 
            array (
                'recipe_id' => 218,
                'item_id' => 9158,
                'amount' => 1,
            ),
            421 => 
            array (
                'recipe_id' => 218,
                'item_id' => 9185,
                'amount' => 1,
            ),
            422 => 
            array (
                'recipe_id' => 219,
                'item_id' => 9158,
                'amount' => 1,
            ),
            423 => 
            array (
                'recipe_id' => 219,
                'item_id' => 9182,
                'amount' => 1,
            ),
            424 => 
            array (
                'recipe_id' => 220,
                'item_id' => 9158,
                'amount' => 1,
            ),
            425 => 
            array (
                'recipe_id' => 220,
                'item_id' => 209,
                'amount' => 1,
            ),
            426 => 
            array (
                'recipe_id' => 221,
                'item_id' => 9158,
                'amount' => 1,
            ),
            427 => 
            array (
                'recipe_id' => 221,
                'item_id' => 5305,
                'amount' => 1,
            ),
            428 => 
            array (
                'recipe_id' => 222,
                'item_id' => 9158,
                'amount' => 1,
            ),
            429 => 
            array (
                'recipe_id' => 222,
                'item_id' => 5317,
                'amount' => 1,
            ),
            430 => 
            array (
                'recipe_id' => 223,
                'item_id' => 9158,
                'amount' => 1,
            ),
            431 => 
            array (
                'recipe_id' => 223,
                'item_id' => 207,
                'amount' => 1,
            ),
            432 => 
            array (
                'recipe_id' => 224,
                'item_id' => 9152,
                'amount' => 1,
            ),
            433 => 
            array (
                'recipe_id' => 224,
                'item_id' => 9158,
                'amount' => 1,
            ),
            434 => 
            array (
                'recipe_id' => 224,
                'item_id' => 9188,
                'amount' => 1,
            ),
            435 => 
            array (
                'recipe_id' => 225,
                'item_id' => 9186,
                'amount' => 1,
            ),
            436 => 
            array (
                'recipe_id' => 225,
                'item_id' => 9158,
                'amount' => 1,
            ),
            437 => 
            array (
                'recipe_id' => 225,
                'item_id' => 9188,
                'amount' => 1,
            ),
            438 => 
            array (
                'recipe_id' => 226,
                'item_id' => 9179,
                'amount' => 1,
            ),
            439 => 
            array (
                'recipe_id' => 226,
                'item_id' => 9158,
                'amount' => 1,
            ),
            440 => 
            array (
                'recipe_id' => 226,
                'item_id' => 9188,
                'amount' => 1,
            ),
            441 => 
            array (
                'recipe_id' => 227,
                'item_id' => 9187,
                'amount' => 1,
            ),
            442 => 
            array (
                'recipe_id' => 227,
                'item_id' => 9158,
                'amount' => 1,
            ),
            443 => 
            array (
                'recipe_id' => 227,
                'item_id' => 9188,
                'amount' => 1,
            ),
            444 => 
            array (
                'recipe_id' => 228,
                'item_id' => 9162,
                'amount' => 1,
            ),
            445 => 
            array (
                'recipe_id' => 228,
                'item_id' => 9158,
                'amount' => 1,
            ),
            446 => 
            array (
                'recipe_id' => 228,
                'item_id' => 9188,
                'amount' => 1,
            ),
            447 => 
            array (
                'recipe_id' => 229,
                'item_id' => 6218,
                'amount' => 1,
            ),
            448 => 
            array (
                'recipe_id' => 229,
                'item_id' => 9158,
                'amount' => 1,
            ),
            449 => 
            array (
                'recipe_id' => 229,
                'item_id' => 9188,
                'amount' => 1,
            ),
            450 => 
            array (
                'recipe_id' => 230,
                'item_id' => 9173,
                'amount' => 1,
            ),
            451 => 
            array (
                'recipe_id' => 230,
                'item_id' => 9158,
                'amount' => 1,
            ),
            452 => 
            array (
                'recipe_id' => 230,
                'item_id' => 9188,
                'amount' => 1,
            ),
            453 => 
            array (
                'recipe_id' => 230,
                'item_id' => 9191,
                'amount' => 1,
            ),
            454 => 
            array (
                'recipe_id' => 231,
                'item_id' => 9156,
                'amount' => 1,
            ),
            455 => 
            array (
                'recipe_id' => 231,
                'item_id' => 9158,
                'amount' => 1,
            ),
            456 => 
            array (
                'recipe_id' => 231,
                'item_id' => 9188,
                'amount' => 1,
            ),
            457 => 
            array (
                'recipe_id' => 231,
                'item_id' => 9191,
                'amount' => 1,
            ),
            458 => 
            array (
                'recipe_id' => 232,
                'item_id' => 9178,
                'amount' => 1,
            ),
            459 => 
            array (
                'recipe_id' => 232,
                'item_id' => 9158,
                'amount' => 1,
            ),
            460 => 
            array (
                'recipe_id' => 232,
                'item_id' => 9188,
                'amount' => 1,
            ),
            461 => 
            array (
                'recipe_id' => 232,
                'item_id' => 9191,
                'amount' => 1,
            ),
            462 => 
            array (
                'recipe_id' => 233,
                'item_id' => 9170,
                'amount' => 1,
            ),
            463 => 
            array (
                'recipe_id' => 233,
                'item_id' => 9158,
                'amount' => 1,
            ),
            464 => 
            array (
                'recipe_id' => 233,
                'item_id' => 9188,
                'amount' => 1,
            ),
            465 => 
            array (
                'recipe_id' => 233,
                'item_id' => 9191,
                'amount' => 1,
            ),
            466 => 
            array (
                'recipe_id' => 234,
                'item_id' => 9177,
                'amount' => 1,
            ),
            467 => 
            array (
                'recipe_id' => 234,
                'item_id' => 9158,
                'amount' => 1,
            ),
            468 => 
            array (
                'recipe_id' => 234,
                'item_id' => 9188,
                'amount' => 1,
            ),
            469 => 
            array (
                'recipe_id' => 234,
                'item_id' => 9191,
                'amount' => 1,
            ),
            470 => 
            array (
                'recipe_id' => 235,
                'item_id' => 9153,
                'amount' => 1,
            ),
            471 => 
            array (
                'recipe_id' => 235,
                'item_id' => 9158,
                'amount' => 1,
            ),
            472 => 
            array (
                'recipe_id' => 235,
                'item_id' => 9188,
                'amount' => 1,
            ),
            473 => 
            array (
                'recipe_id' => 235,
                'item_id' => 9191,
                'amount' => 1,
            ),
            474 => 
            array (
                'recipe_id' => 236,
                'item_id' => 6215,
                'amount' => 1,
            ),
            475 => 
            array (
                'recipe_id' => 236,
                'item_id' => 9158,
                'amount' => 1,
            ),
            476 => 
            array (
                'recipe_id' => 236,
                'item_id' => 9188,
                'amount' => 1,
            ),
            477 => 
            array (
                'recipe_id' => 236,
                'item_id' => 9191,
                'amount' => 1,
            ),
            478 => 
            array (
                'recipe_id' => 237,
                'item_id' => 6183,
                'amount' => 1,
            ),
            479 => 
            array (
                'recipe_id' => 237,
                'item_id' => 9158,
                'amount' => 1,
            ),
            480 => 
            array (
                'recipe_id' => 237,
                'item_id' => 9188,
                'amount' => 1,
            ),
            481 => 
            array (
                'recipe_id' => 237,
                'item_id' => 9191,
                'amount' => 1,
            ),
            482 => 
            array (
                'recipe_id' => 193,
                'item_id' => 3541,
                'amount' => 1,
            ),
            483 => 
            array (
                'recipe_id' => 193,
                'item_id' => 8936,
                'amount' => 1,
            ),
            484 => 
            array (
                'recipe_id' => 194,
                'item_id' => 3605,
                'amount' => 1,
            ),
            485 => 
            array (
                'recipe_id' => 194,
                'item_id' => 8936,
                'amount' => 1,
            ),
            486 => 
            array (
                'recipe_id' => 195,
                'item_id' => 3189,
                'amount' => 1,
            ),
            487 => 
            array (
                'recipe_id' => 195,
                'item_id' => 8936,
                'amount' => 1,
            ),
            488 => 
            array (
                'recipe_id' => 196,
                'item_id' => 3426,
                'amount' => 1,
            ),
            489 => 
            array (
                'recipe_id' => 196,
                'item_id' => 8936,
                'amount' => 1,
            ),
            490 => 
            array (
                'recipe_id' => 197,
                'item_id' => 4604,
                'amount' => 1,
            ),
            491 => 
            array (
                'recipe_id' => 197,
                'item_id' => 4580,
                'amount' => 1,
            ),
            492 => 
            array (
                'recipe_id' => 197,
                'item_id' => 8936,
                'amount' => 1,
            ),
            493 => 
            array (
                'recipe_id' => 198,
                'item_id' => 2757,
                'amount' => 1,
            ),
            494 => 
            array (
                'recipe_id' => 198,
                'item_id' => 3165,
                'amount' => 1,
            ),
            495 => 
            array (
                'recipe_id' => 198,
                'item_id' => 3984,
                'amount' => 1,
            ),
            496 => 
            array (
                'recipe_id' => 199,
                'item_id' => 3530,
                'amount' => 3,
            ),
            497 => 
            array (
                'recipe_id' => 199,
                'item_id' => 3123,
                'amount' => 1,
            ),
            498 => 
            array (
                'recipe_id' => 199,
                'item_id' => 8936,
                'amount' => 1,
            ),
            499 => 
            array (
                'recipe_id' => 200,
                'item_id' => 4103,
                'amount' => 1,
            ),
        ));
        \DB::table('crafting_recipes_ingredients')->insert(array (
            0 => 
            array (
                'recipe_id' => 200,
                'item_id' => 8921,
                'amount' => 1,
            ),
            1 => 
            array (
                'recipe_id' => 201,
                'item_id' => 8245,
                'amount' => 1,
            ),
            2 => 
            array (
                'recipe_id' => 201,
                'item_id' => 8921,
                'amount' => 1,
            ),
            3 => 
            array (
                'recipe_id' => 202,
                'item_id' => 3530,
                'amount' => 1,
            ),
            4 => 
            array (
                'recipe_id' => 202,
                'item_id' => 8119,
                'amount' => 1,
            ),
            5 => 
            array (
                'recipe_id' => 202,
                'item_id' => 8921,
                'amount' => 1,
            ),
            6 => 
            array (
                'recipe_id' => 203,
                'item_id' => 3162,
                'amount' => 1,
            ),
            7 => 
            array (
                'recipe_id' => 203,
                'item_id' => 3407,
                'amount' => 1,
            ),
            8 => 
            array (
                'recipe_id' => 203,
                'item_id' => 8921,
                'amount' => 1,
            ),
            9 => 
            array (
                'recipe_id' => 204,
                'item_id' => 3145,
                'amount' => 1,
            ),
            10 => 
            array (
                'recipe_id' => 204,
                'item_id' => 3153,
                'amount' => 1,
            ),
            11 => 
            array (
                'recipe_id' => 204,
                'item_id' => 8921,
                'amount' => 1,
            ),
            12 => 
            array (
                'recipe_id' => 205,
                'item_id' => 3541,
                'amount' => 1,
            ),
            13 => 
            array (
                'recipe_id' => 205,
                'item_id' => 4102,
                'amount' => 2,
            ),
            14 => 
            array (
                'recipe_id' => 205,
                'item_id' => 8921,
                'amount' => 1,
            ),
            15 => 
            array (
                'recipe_id' => 206,
                'item_id' => 3541,
                'amount' => 1,
            ),
            16 => 
            array (
                'recipe_id' => 206,
                'item_id' => 8101,
                'amount' => 3,
            ),
            17 => 
            array (
                'recipe_id' => 206,
                'item_id' => 8120,
                'amount' => 1,
            ),
            18 => 
            array (
                'recipe_id' => 206,
                'item_id' => 8921,
                'amount' => 1,
            ),
            19 => 
            array (
                'recipe_id' => 238,
                'item_id' => 11212,
                'amount' => 1,
            ),
            20 => 
            array (
                'recipe_id' => 238,
                'item_id' => 11182,
                'amount' => 2,
            ),
            21 => 
            array (
                'recipe_id' => 239,
                'item_id' => 11195,
                'amount' => 1,
            ),
            22 => 
            array (
                'recipe_id' => 239,
                'item_id' => 11199,
                'amount' => 3,
            ),
            23 => 
            array (
                'recipe_id' => 240,
                'item_id' => 11172,
                'amount' => 1,
            ),
            24 => 
            array (
                'recipe_id' => 240,
                'item_id' => 11199,
                'amount' => 4,
            ),
            25 => 
            array (
                'recipe_id' => 241,
                'item_id' => 11190,
                'amount' => 1,
            ),
            26 => 
            array (
                'recipe_id' => 241,
                'item_id' => 11199,
                'amount' => 5,
            ),
            27 => 
            array (
                'recipe_id' => 242,
                'item_id' => 11179,
                'amount' => 1,
            ),
            28 => 
            array (
                'recipe_id' => 242,
                'item_id' => 11199,
                'amount' => 6,
            ),
            29 => 
            array (
                'recipe_id' => 243,
                'item_id' => 11209,
                'amount' => 5,
            ),
            30 => 
            array (
                'recipe_id' => 244,
                'item_id' => 11178,
                'amount' => 5,
            ),
            31 => 
            array (
                'recipe_id' => 245,
                'item_id' => 11183,
                'amount' => 5,
            ),
            32 => 
            array (
                'recipe_id' => 246,
                'item_id' => 11215,
                'amount' => 5,
            ),
            33 => 
            array (
                'recipe_id' => 247,
                'item_id' => 11189,
                'amount' => 5,
            ),
            34 => 
            array (
                'recipe_id' => 293,
                'item_id' => 11586,
                'amount' => 1,
            ),
            35 => 
            array (
                'recipe_id' => 294,
                'item_id' => 11585,
                'amount' => 1,
            ),
            36 => 
            array (
                'recipe_id' => 296,
                'item_id' => 11592,
                'amount' => 1,
            ),
            37 => 
            array (
                'recipe_id' => 296,
                'item_id' => 11586,
                'amount' => 1,
            ),
            38 => 
            array (
                'recipe_id' => 298,
                'item_id' => 11592,
                'amount' => 1,
            ),
            39 => 
            array (
                'recipe_id' => 297,
                'item_id' => 11592,
                'amount' => 1,
            ),
            40 => 
            array (
                'recipe_id' => 297,
                'item_id' => 11591,
                'amount' => 1,
            ),
            41 => 
            array (
                'recipe_id' => 298,
                'item_id' => 11596,
                'amount' => 1,
            ),
            42 => 
            array (
                'recipe_id' => 295,
                'item_id' => 11596,
                'amount' => 1,
            ),
            43 => 
            array (
                'recipe_id' => 295,
                'item_id' => 11585,
                'amount' => 1,
            ),
            44 => 
            array (
                'recipe_id' => 294,
                'item_id' => 11591,
                'amount' => 1,
            ),
            45 => 
            array (
                'recipe_id' => 293,
                'item_id' => 11585,
                'amount' => 1,
            ),
            46 => 
            array (
                'recipe_id' => 291,
                'item_id' => 11591,
                'amount' => 1,
            ),
            47 => 
            array (
                'recipe_id' => 292,
                'item_id' => 11553,
                'amount' => 1,
            ),
            48 => 
            array (
                'recipe_id' => 292,
                'item_id' => 11596,
                'amount' => 1,
            ),
            49 => 
            array (
                'recipe_id' => 291,
                'item_id' => 11553,
                'amount' => 1,
            ),
            50 => 
            array (
                'recipe_id' => 290,
                'item_id' => 11586,
                'amount' => 1,
            ),
            51 => 
            array (
                'recipe_id' => 290,
                'item_id' => 11553,
                'amount' => 1,
            ),
            52 => 
            array (
                'recipe_id' => 289,
                'item_id' => 11596,
                'amount' => 1,
            ),
            53 => 
            array (
                'recipe_id' => 289,
                'item_id' => 11600,
                'amount' => 1,
            ),
            54 => 
            array (
                'recipe_id' => 288,
                'item_id' => 11600,
                'amount' => 1,
            ),
            55 => 
            array (
                'recipe_id' => 288,
                'item_id' => 11591,
                'amount' => 1,
            ),
            56 => 
            array (
                'recipe_id' => 284,
                'item_id' => 11563,
                'amount' => 2,
            ),
            57 => 
            array (
                'recipe_id' => 284,
                'item_id' => 11571,
                'amount' => 1,
            ),
            58 => 
            array (
                'recipe_id' => 287,
                'item_id' => 11586,
                'amount' => 1,
            ),
            59 => 
            array (
                'recipe_id' => 287,
                'item_id' => 11600,
                'amount' => 1,
            ),
            60 => 
            array (
                'recipe_id' => 286,
                'item_id' => 11563,
                'amount' => 2,
            ),
            61 => 
            array (
                'recipe_id' => 286,
                'item_id' => 11556,
                'amount' => 1,
            ),
            62 => 
            array (
                'recipe_id' => 286,
                'item_id' => 11557,
                'amount' => 1,
            ),
            63 => 
            array (
                'recipe_id' => 285,
                'item_id' => 11577,
                'amount' => 1,
            ),
            64 => 
            array (
                'recipe_id' => 285,
                'item_id' => 11563,
                'amount' => 2,
            ),
            65 => 
            array (
                'recipe_id' => 285,
                'item_id' => 11557,
                'amount' => 1,
            ),
            66 => 
            array (
                'recipe_id' => 284,
                'item_id' => 11557,
                'amount' => 1,
            ),
            67 => 
            array (
                'recipe_id' => 283,
                'item_id' => 11599,
                'amount' => 1,
            ),
            68 => 
            array (
                'recipe_id' => 283,
                'item_id' => 11563,
                'amount' => 2,
            ),
            69 => 
            array (
                'recipe_id' => 283,
                'item_id' => 11557,
                'amount' => 1,
            ),
            70 => 
            array (
                'recipe_id' => 282,
                'item_id' => 11596,
                'amount' => 1,
            ),
            71 => 
            array (
                'recipe_id' => 282,
                'item_id' => 11580,
                'amount' => 1,
            ),
            72 => 
            array (
                'recipe_id' => 281,
                'item_id' => 11580,
                'amount' => 1,
            ),
            73 => 
            array (
                'recipe_id' => 281,
                'item_id' => 11591,
                'amount' => 1,
            ),
            74 => 
            array (
                'recipe_id' => 280,
                'item_id' => 11586,
                'amount' => 1,
            ),
            75 => 
            array (
                'recipe_id' => 280,
                'item_id' => 11580,
                'amount' => 1,
            ),
            76 => 
            array (
                'recipe_id' => 279,
                'item_id' => 11596,
                'amount' => 1,
            ),
            77 => 
            array (
                'recipe_id' => 279,
                'item_id' => 11608,
                'amount' => 1,
            ),
            78 => 
            array (
                'recipe_id' => 278,
                'item_id' => 11591,
                'amount' => 1,
            ),
            79 => 
            array (
                'recipe_id' => 277,
                'item_id' => 11608,
                'amount' => 1,
            ),
            80 => 
            array (
                'recipe_id' => 277,
                'item_id' => 11586,
                'amount' => 1,
            ),
            81 => 
            array (
                'recipe_id' => 278,
                'item_id' => 11608,
                'amount' => 1,
            ),
            82 => 
            array (
                'recipe_id' => 276,
                'item_id' => 11596,
                'amount' => 1,
            ),
            83 => 
            array (
                'recipe_id' => 276,
                'item_id' => 11566,
                'amount' => 1,
            ),
            84 => 
            array (
                'recipe_id' => 275,
                'item_id' => 11591,
                'amount' => 1,
            ),
            85 => 
            array (
                'recipe_id' => 275,
                'item_id' => 11566,
                'amount' => 1,
            ),
            86 => 
            array (
                'recipe_id' => 274,
                'item_id' => 11586,
                'amount' => 1,
            ),
            87 => 
            array (
                'recipe_id' => 274,
                'item_id' => 11566,
                'amount' => 1,
            ),
            88 => 
            array (
                'recipe_id' => 272,
                'item_id' => 11591,
                'amount' => 1,
            ),
            89 => 
            array (
                'recipe_id' => 273,
                'item_id' => 11589,
                'amount' => 1,
            ),
            90 => 
            array (
                'recipe_id' => 273,
                'item_id' => 11596,
                'amount' => 1,
            ),
            91 => 
            array (
                'recipe_id' => 272,
                'item_id' => 11589,
                'amount' => 1,
            ),
            92 => 
            array (
                'recipe_id' => 271,
                'item_id' => 11586,
                'amount' => 1,
            ),
            93 => 
            array (
                'recipe_id' => 271,
                'item_id' => 11589,
                'amount' => 1,
            ),
            94 => 
            array (
                'recipe_id' => 270,
                'item_id' => 11556,
                'amount' => 1,
            ),
            95 => 
            array (
                'recipe_id' => 270,
                'item_id' => 11610,
                'amount' => 2,
            ),
            96 => 
            array (
                'recipe_id' => 270,
                'item_id' => 11557,
                'amount' => 1,
            ),
            97 => 
            array (
                'recipe_id' => 269,
                'item_id' => 11557,
                'amount' => 1,
            ),
            98 => 
            array (
                'recipe_id' => 269,
                'item_id' => 11610,
                'amount' => 2,
            ),
            99 => 
            array (
                'recipe_id' => 269,
                'item_id' => 11577,
                'amount' => 1,
            ),
            100 => 
            array (
                'recipe_id' => 258,
                'item_id' => 11583,
                'amount' => 1,
            ),
            101 => 
            array (
                'recipe_id' => 258,
                'item_id' => 11586,
                'amount' => 1,
            ),
            102 => 
            array (
                'recipe_id' => 267,
                'item_id' => 11610,
                'amount' => 2,
            ),
            103 => 
            array (
                'recipe_id' => 268,
                'item_id' => 11610,
                'amount' => 2,
            ),
            104 => 
            array (
                'recipe_id' => 268,
                'item_id' => 11571,
                'amount' => 1,
            ),
            105 => 
            array (
                'recipe_id' => 267,
                'item_id' => 11557,
                'amount' => 1,
            ),
            106 => 
            array (
                'recipe_id' => 267,
                'item_id' => 11599,
                'amount' => 1,
            ),
            107 => 
            array (
                'recipe_id' => 268,
                'item_id' => 11557,
                'amount' => 1,
            ),
            108 => 
            array (
                'recipe_id' => 266,
                'item_id' => 11573,
                'amount' => 1,
            ),
            109 => 
            array (
                'recipe_id' => 266,
                'item_id' => 11596,
                'amount' => 1,
            ),
            110 => 
            array (
                'recipe_id' => 265,
                'item_id' => 11591,
                'amount' => 1,
            ),
            111 => 
            array (
                'recipe_id' => 265,
                'item_id' => 11573,
                'amount' => 1,
            ),
            112 => 
            array (
                'recipe_id' => 264,
                'item_id' => 11586,
                'amount' => 1,
            ),
            113 => 
            array (
                'recipe_id' => 264,
                'item_id' => 11573,
                'amount' => 1,
            ),
            114 => 
            array (
                'recipe_id' => 263,
                'item_id' => 11578,
                'amount' => 1,
            ),
            115 => 
            array (
                'recipe_id' => 263,
                'item_id' => 11596,
                'amount' => 1,
            ),
            116 => 
            array (
                'recipe_id' => 262,
                'item_id' => 11591,
                'amount' => 1,
            ),
            117 => 
            array (
                'recipe_id' => 262,
                'item_id' => 11578,
                'amount' => 1,
            ),
            118 => 
            array (
                'recipe_id' => 261,
                'item_id' => 11586,
                'amount' => 1,
            ),
            119 => 
            array (
                'recipe_id' => 261,
                'item_id' => 11578,
                'amount' => 1,
            ),
            120 => 
            array (
                'recipe_id' => 260,
                'item_id' => 11596,
                'amount' => 1,
            ),
            121 => 
            array (
                'recipe_id' => 260,
                'item_id' => 11583,
                'amount' => 1,
            ),
            122 => 
            array (
                'recipe_id' => 259,
                'item_id' => 11591,
                'amount' => 1,
            ),
            123 => 
            array (
                'recipe_id' => 259,
                'item_id' => 11583,
                'amount' => 1,
            ),
            124 => 
            array (
                'recipe_id' => 257,
                'item_id' => 11596,
                'amount' => 1,
            ),
            125 => 
            array (
                'recipe_id' => 257,
                'item_id' => 11570,
                'amount' => 1,
            ),
            126 => 
            array (
                'recipe_id' => 256,
                'item_id' => 11591,
                'amount' => 1,
            ),
            127 => 
            array (
                'recipe_id' => 256,
                'item_id' => 11570,
                'amount' => 1,
            ),
            128 => 
            array (
                'recipe_id' => 248,
                'item_id' => 11571,
                'amount' => 1,
            ),
            129 => 
            array (
                'recipe_id' => 248,
                'item_id' => 11610,
                'amount' => 1,
            ),
            130 => 
            array (
                'recipe_id' => 255,
                'item_id' => 11570,
                'amount' => 1,
            ),
            131 => 
            array (
                'recipe_id' => 255,
                'item_id' => 11586,
                'amount' => 1,
            ),
            132 => 
            array (
                'recipe_id' => 254,
                'item_id' => 11556,
                'amount' => 1,
            ),
            133 => 
            array (
                'recipe_id' => 254,
                'item_id' => 11588,
                'amount' => 2,
            ),
            134 => 
            array (
                'recipe_id' => 254,
                'item_id' => 11557,
                'amount' => 1,
            ),
            135 => 
            array (
                'recipe_id' => 253,
                'item_id' => 11577,
                'amount' => 1,
            ),
            136 => 
            array (
                'recipe_id' => 253,
                'item_id' => 11557,
                'amount' => 1,
            ),
            137 => 
            array (
                'recipe_id' => 253,
                'item_id' => 11588,
                'amount' => 2,
            ),
            138 => 
            array (
                'recipe_id' => 252,
                'item_id' => 11571,
                'amount' => 1,
            ),
            139 => 
            array (
                'recipe_id' => 252,
                'item_id' => 11588,
                'amount' => 2,
            ),
            140 => 
            array (
                'recipe_id' => 252,
                'item_id' => 11557,
                'amount' => 1,
            ),
            141 => 
            array (
                'recipe_id' => 251,
                'item_id' => 11599,
                'amount' => 1,
            ),
            142 => 
            array (
                'recipe_id' => 251,
                'item_id' => 11588,
                'amount' => 2,
            ),
            143 => 
            array (
                'recipe_id' => 251,
                'item_id' => 11557,
                'amount' => 1,
            ),
            144 => 
            array (
                'recipe_id' => 250,
                'item_id' => 11563,
                'amount' => 1,
            ),
            145 => 
            array (
                'recipe_id' => 250,
                'item_id' => 11577,
                'amount' => 1,
            ),
            146 => 
            array (
                'recipe_id' => 249,
                'item_id' => 11599,
                'amount' => 1,
            ),
            147 => 
            array (
                'recipe_id' => 249,
                'item_id' => 11588,
                'amount' => 1,
            ),
            148 => 
            array (
                'recipe_id' => 299,
                'item_id' => 11659,
                'amount' => 2,
            ),
            149 => 
            array (
                'recipe_id' => 299,
                'item_id' => 11658,
                'amount' => 2,
            ),
            150 => 
            array (
                'recipe_id' => 300,
                'item_id' => 11619,
                'amount' => 2,
            ),
            151 => 
            array (
                'recipe_id' => 300,
                'item_id' => 11642,
                'amount' => 2,
            ),
            152 => 
            array (
                'recipe_id' => 301,
                'item_id' => 11664,
                'amount' => 2,
            ),
            153 => 
            array (
                'recipe_id' => 301,
                'item_id' => 11619,
                'amount' => 2,
            ),
            154 => 
            array (
                'recipe_id' => 302,
                'item_id' => 11659,
                'amount' => 3,
            ),
            155 => 
            array (
                'recipe_id' => 302,
                'item_id' => 11619,
                'amount' => 3,
            ),
            156 => 
            array (
                'recipe_id' => 302,
                'item_id' => 11622,
                'amount' => 1,
            ),
            157 => 
            array (
                'recipe_id' => 303,
                'item_id' => 11664,
                'amount' => 2,
            ),
            158 => 
            array (
                'recipe_id' => 303,
                'item_id' => 11658,
                'amount' => 2,
            ),
            159 => 
            array (
                'recipe_id' => 303,
                'item_id' => 11622,
                'amount' => 1,
            ),
            160 => 
            array (
                'recipe_id' => 304,
                'item_id' => 11659,
                'amount' => 2,
            ),
            161 => 
            array (
                'recipe_id' => 304,
                'item_id' => 11658,
                'amount' => 2,
            ),
            162 => 
            array (
                'recipe_id' => 304,
                'item_id' => 11619,
                'amount' => 2,
            ),
            163 => 
            array (
                'recipe_id' => 304,
                'item_id' => 11642,
                'amount' => 2,
            ),
            164 => 
            array (
                'recipe_id' => 304,
                'item_id' => 11622,
                'amount' => 1,
            ),
            165 => 
            array (
                'recipe_id' => 305,
                'item_id' => 11659,
                'amount' => 3,
            ),
            166 => 
            array (
                'recipe_id' => 305,
                'item_id' => 11642,
                'amount' => 3,
            ),
            167 => 
            array (
                'recipe_id' => 305,
                'item_id' => 11642,
                'amount' => 1,
            ),
            168 => 
            array (
                'recipe_id' => 304,
                'item_id' => 11664,
                'amount' => 1,
            ),
        ));
        
        
    }
}