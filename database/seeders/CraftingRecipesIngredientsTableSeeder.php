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
                'amount' => 4,
                'item_id' => 8373,
                'recipe_id' => 1,
            ),
            1 => 
            array (
                'amount' => 4,
                'item_id' => 8363,
                'recipe_id' => 2,
            ),
            2 => 
            array (
                'amount' => 4,
                'item_id' => 8373,
                'recipe_id' => 2,
            ),
            3 => 
            array (
                'amount' => 8,
                'item_id' => 8363,
                'recipe_id' => 3,
            ),
            4 => 
            array (
                'amount' => 4,
                'item_id' => 8404,
                'recipe_id' => 4,
            ),
            5 => 
            array (
                'amount' => 4,
                'item_id' => 8363,
                'recipe_id' => 4,
            ),
            6 => 
            array (
                'amount' => 3,
                'item_id' => 8404,
                'recipe_id' => 5,
            ),
            7 => 
            array (
                'amount' => 3,
                'item_id' => 8363,
                'recipe_id' => 6,
            ),
            8 => 
            array (
                'amount' => 3,
                'item_id' => 8370,
                'recipe_id' => 7,
            ),
            9 => 
            array (
                'amount' => 3,
                'item_id' => 8362,
                'recipe_id' => 8,
            ),
            10 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 15,
            ),
            11 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 15,
            ),
            12 => 
            array (
                'amount' => 2,
                'item_id' => 9621,
                'recipe_id' => 14,
            ),
            13 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 14,
            ),
            14 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 14,
            ),
            15 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 14,
            ),
            16 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 13,
            ),
            17 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 13,
            ),
            18 => 
            array (
                'amount' => 4,
                'item_id' => 8362,
                'recipe_id' => 12,
            ),
            19 => 
            array (
                'amount' => 4,
                'item_id' => 8370,
                'recipe_id' => 12,
            ),
            20 => 
            array (
                'amount' => 8,
                'item_id' => 8365,
                'recipe_id' => 11,
            ),
            21 => 
            array (
                'amount' => 8,
                'item_id' => 8362,
                'recipe_id' => 10,
            ),
            22 => 
            array (
                'amount' => 4,
                'item_id' => 8365,
                'recipe_id' => 9,
            ),
            23 => 
            array (
                'amount' => 4,
                'item_id' => 8362,
                'recipe_id' => 9,
            ),
            24 => 
            array (
                'amount' => 2,
                'item_id' => 11153,
                'recipe_id' => 159,
            ),
            25 => 
            array (
                'amount' => 2,
                'item_id' => 11147,
                'recipe_id' => 160,
            ),
            26 => 
            array (
                'amount' => 2,
                'item_id' => 11162,
                'recipe_id' => 161,
            ),
            27 => 
            array (
                'amount' => 2,
                'item_id' => 11154,
                'recipe_id' => 162,
            ),
            28 => 
            array (
                'amount' => 3,
                'item_id' => 9431,
                'recipe_id' => 25,
            ),
            29 => 
            array (
                'amount' => 3,
                'item_id' => 9444,
                'recipe_id' => 26,
            ),
            30 => 
            array (
                'amount' => 3,
                'item_id' => 9434,
                'recipe_id' => 27,
            ),
            31 => 
            array (
                'amount' => 1,
                'item_id' => 9411,
                'recipe_id' => 28,
            ),
            32 => 
            array (
                'amount' => 1,
                'item_id' => 9435,
                'recipe_id' => 28,
            ),
            33 => 
            array (
                'amount' => 3,
                'item_id' => 9436,
                'recipe_id' => 29,
            ),
            34 => 
            array (
                'amount' => 1,
                'item_id' => 9411,
                'recipe_id' => 29,
            ),
            35 => 
            array (
                'amount' => 1,
                'item_id' => 9455,
                'recipe_id' => 30,
            ),
            36 => 
            array (
                'amount' => 1,
                'item_id' => 9411,
                'recipe_id' => 30,
            ),
            37 => 
            array (
                'amount' => 1,
                'item_id' => 9444,
                'recipe_id' => 31,
            ),
            38 => 
            array (
                'amount' => 1,
                'item_id' => 9431,
                'recipe_id' => 31,
            ),
            39 => 
            array (
                'amount' => 1,
                'item_id' => 9434,
                'recipe_id' => 31,
            ),
            40 => 
            array (
                'amount' => 10,
                'item_id' => 9457,
                'recipe_id' => 32,
            ),
            41 => 
            array (
                'amount' => 3,
                'item_id' => 9411,
                'recipe_id' => 33,
            ),
            42 => 
            array (
                'amount' => 1,
                'item_id' => 9411,
                'recipe_id' => 34,
            ),
            43 => 
            array (
                'amount' => 3,
                'item_id' => 9457,
                'recipe_id' => 34,
            ),
            44 => 
            array (
                'amount' => 3,
                'item_id' => 9411,
                'recipe_id' => 35,
            ),
            45 => 
            array (
                'amount' => 1,
                'item_id' => 9457,
                'recipe_id' => 35,
            ),
            46 => 
            array (
                'amount' => 1,
                'item_id' => 9411,
                'recipe_id' => 36,
            ),
            47 => 
            array (
                'amount' => 1,
                'item_id' => 9421,
                'recipe_id' => 36,
            ),
            48 => 
            array (
                'amount' => 1,
                'item_id' => 9457,
                'recipe_id' => 37,
            ),
            49 => 
            array (
                'amount' => 1,
                'item_id' => 9435,
                'recipe_id' => 37,
            ),
            50 => 
            array (
                'amount' => 3,
                'item_id' => 9411,
                'recipe_id' => 37,
            ),
            51 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 39,
            ),
            52 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 39,
            ),
            53 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 40,
            ),
            54 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 40,
            ),
            55 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 41,
            ),
            56 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 41,
            ),
            57 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 42,
            ),
            58 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 42,
            ),
            59 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 43,
            ),
            60 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 43,
            ),
            61 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 44,
            ),
            62 => 
            array (
                'amount' => 1,
                'item_id' => 9574,
                'recipe_id' => 44,
            ),
            63 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 45,
            ),
            64 => 
            array (
                'amount' => 2,
                'item_id' => 9581,
                'recipe_id' => 45,
            ),
            65 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 45,
            ),
            66 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 46,
            ),
            67 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 46,
            ),
            68 => 
            array (
                'amount' => 2,
                'item_id' => 9611,
                'recipe_id' => 46,
            ),
            69 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 47,
            ),
            70 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 47,
            ),
            71 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 47,
            ),
            72 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 48,
            ),
            73 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 48,
            ),
            74 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 48,
            ),
            75 => 
            array (
                'amount' => 1,
                'item_id' => 9585,
                'recipe_id' => 49,
            ),
            76 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 49,
            ),
            77 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 49,
            ),
            78 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 50,
            ),
            79 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 50,
            ),
            80 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 51,
            ),
            81 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 51,
            ),
            82 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 52,
            ),
            83 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 52,
            ),
            84 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 53,
            ),
            85 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 53,
            ),
            86 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 54,
            ),
            87 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 54,
            ),
            88 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 55,
            ),
            89 => 
            array (
                'amount' => 1,
                'item_id' => 9574,
                'recipe_id' => 55,
            ),
            90 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 56,
            ),
            91 => 
            array (
                'amount' => 2,
                'item_id' => 9581,
                'recipe_id' => 56,
            ),
            92 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 56,
            ),
            93 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 57,
            ),
            94 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 57,
            ),
            95 => 
            array (
                'amount' => 2,
                'item_id' => 9611,
                'recipe_id' => 57,
            ),
            96 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 58,
            ),
            97 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 58,
            ),
            98 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 58,
            ),
            99 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 59,
            ),
            100 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 59,
            ),
            101 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 59,
            ),
            102 => 
            array (
                'amount' => 1,
                'item_id' => 9627,
                'recipe_id' => 60,
            ),
            103 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 60,
            ),
            104 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 60,
            ),
            105 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 61,
            ),
            106 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 61,
            ),
            107 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 62,
            ),
            108 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 62,
            ),
            109 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 63,
            ),
            110 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 63,
            ),
            111 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 64,
            ),
            112 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 64,
            ),
            113 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 65,
            ),
            114 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 65,
            ),
            115 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 66,
            ),
            116 => 
            array (
                'amount' => 1,
                'item_id' => 9574,
                'recipe_id' => 66,
            ),
            117 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 67,
            ),
            118 => 
            array (
                'amount' => 2,
                'item_id' => 9581,
                'recipe_id' => 67,
            ),
            119 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 67,
            ),
            120 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 68,
            ),
            121 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 68,
            ),
            122 => 
            array (
                'amount' => 2,
                'item_id' => 9611,
                'recipe_id' => 68,
            ),
            123 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 69,
            ),
            124 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 69,
            ),
            125 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 69,
            ),
            126 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 70,
            ),
            127 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 70,
            ),
            128 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 70,
            ),
            129 => 
            array (
                'amount' => 1,
                'item_id' => 9632,
                'recipe_id' => 71,
            ),
            130 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 71,
            ),
            131 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 71,
            ),
            132 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 72,
            ),
            133 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 72,
            ),
            134 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 73,
            ),
            135 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 73,
            ),
            136 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 74,
            ),
            137 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 74,
            ),
            138 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 75,
            ),
            139 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 75,
            ),
            140 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 76,
            ),
            141 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 76,
            ),
            142 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 77,
            ),
            143 => 
            array (
                'amount' => 1,
                'item_id' => 9574,
                'recipe_id' => 77,
            ),
            144 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 78,
            ),
            145 => 
            array (
                'amount' => 2,
                'item_id' => 9581,
                'recipe_id' => 78,
            ),
            146 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 78,
            ),
            147 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 79,
            ),
            148 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 79,
            ),
            149 => 
            array (
                'amount' => 2,
                'item_id' => 9611,
                'recipe_id' => 79,
            ),
            150 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 80,
            ),
            151 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 80,
            ),
            152 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 80,
            ),
            153 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 81,
            ),
            154 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 81,
            ),
            155 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 81,
            ),
            156 => 
            array (
                'amount' => 1,
                'item_id' => 9622,
                'recipe_id' => 82,
            ),
            157 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 82,
            ),
            158 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 82,
            ),
            159 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 83,
            ),
            160 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 83,
            ),
            161 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 84,
            ),
            162 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 84,
            ),
            163 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 85,
            ),
            164 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 85,
            ),
            165 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 86,
            ),
            166 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 86,
            ),
            167 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 87,
            ),
            168 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 87,
            ),
            169 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 88,
            ),
            170 => 
            array (
                'amount' => 1,
                'item_id' => 9574,
                'recipe_id' => 88,
            ),
            171 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 89,
            ),
            172 => 
            array (
                'amount' => 2,
                'item_id' => 9581,
                'recipe_id' => 89,
            ),
            173 => 
            array (
                'amount' => 1,
                'item_id' => 9611,
                'recipe_id' => 89,
            ),
            174 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 90,
            ),
            175 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 90,
            ),
            176 => 
            array (
                'amount' => 2,
                'item_id' => 9611,
                'recipe_id' => 90,
            ),
            177 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 91,
            ),
            178 => 
            array (
                'amount' => 1,
                'item_id' => 9581,
                'recipe_id' => 91,
            ),
            179 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 91,
            ),
            180 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 92,
            ),
            181 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 92,
            ),
            182 => 
            array (
                'amount' => 1,
                'item_id' => 9598,
                'recipe_id' => 92,
            ),
            183 => 
            array (
                'amount' => 1,
                'item_id' => 9645,
                'recipe_id' => 93,
            ),
            184 => 
            array (
                'amount' => 1,
                'item_id' => 9582,
                'recipe_id' => 93,
            ),
            185 => 
            array (
                'amount' => 1,
                'item_id' => 9621,
                'recipe_id' => 93,
            ),
            186 => 
            array (
                'amount' => 1,
                'item_id' => 9793,
                'recipe_id' => 94,
            ),
            187 => 
            array (
                'amount' => 1,
                'item_id' => 9826,
                'recipe_id' => 94,
            ),
            188 => 
            array (
                'amount' => 2,
                'item_id' => 9838,
                'recipe_id' => 94,
            ),
            189 => 
            array (
                'amount' => 1,
                'item_id' => 9842,
                'recipe_id' => 95,
            ),
            190 => 
            array (
                'amount' => 1,
                'item_id' => 9826,
                'recipe_id' => 95,
            ),
            191 => 
            array (
                'amount' => 2,
                'item_id' => 9838,
                'recipe_id' => 95,
            ),
            192 => 
            array (
                'amount' => 1,
                'item_id' => 9892,
                'recipe_id' => 96,
            ),
            193 => 
            array (
                'amount' => 2,
                'item_id' => 9826,
                'recipe_id' => 96,
            ),
            194 => 
            array (
                'amount' => 4,
                'item_id' => 9838,
                'recipe_id' => 96,
            ),
            195 => 
            array (
                'amount' => 1,
                'item_id' => 9833,
                'recipe_id' => 97,
            ),
            196 => 
            array (
                'amount' => 2,
                'item_id' => 9826,
                'recipe_id' => 97,
            ),
            197 => 
            array (
                'amount' => 4,
                'item_id' => 9838,
                'recipe_id' => 97,
            ),
            198 => 
            array (
                'amount' => 1,
                'item_id' => 9790,
                'recipe_id' => 98,
            ),
            199 => 
            array (
                'amount' => 3,
                'item_id' => 9826,
                'recipe_id' => 98,
            ),
            200 => 
            array (
                'amount' => 6,
                'item_id' => 9838,
                'recipe_id' => 98,
            ),
            201 => 
            array (
                'amount' => 1,
                'item_id' => 9801,
                'recipe_id' => 99,
            ),
            202 => 
            array (
                'amount' => 3,
                'item_id' => 9826,
                'recipe_id' => 99,
            ),
            203 => 
            array (
                'amount' => 6,
                'item_id' => 9838,
                'recipe_id' => 99,
            ),
            204 => 
            array (
                'amount' => 2,
                'item_id' => 10133,
                'recipe_id' => 100,
            ),
            205 => 
            array (
                'amount' => 2,
                'item_id' => 10132,
                'recipe_id' => 100,
            ),
            206 => 
            array (
                'amount' => 2,
                'item_id' => 10152,
                'recipe_id' => 101,
            ),
            207 => 
            array (
                'amount' => 2,
                'item_id' => 10155,
                'recipe_id' => 101,
            ),
            208 => 
            array (
                'amount' => 2,
                'item_id' => 10139,
                'recipe_id' => 102,
            ),
            209 => 
            array (
                'amount' => 2,
                'item_id' => 10167,
                'recipe_id' => 102,
            ),
            210 => 
            array (
                'amount' => 2,
                'item_id' => 10171,
                'recipe_id' => 103,
            ),
            211 => 
            array (
                'amount' => 2,
                'item_id' => 10185,
                'recipe_id' => 103,
            ),
            212 => 
            array (
                'amount' => 2,
                'item_id' => 10144,
                'recipe_id' => 104,
            ),
            213 => 
            array (
                'amount' => 2,
                'item_id' => 10168,
                'recipe_id' => 104,
            ),
            214 => 
            array (
                'amount' => 1,
                'item_id' => 10155,
                'recipe_id' => 105,
            ),
            215 => 
            array (
                'amount' => 1,
                'item_id' => 10144,
                'recipe_id' => 105,
            ),
            216 => 
            array (
                'amount' => 1,
                'item_id' => 10185,
                'recipe_id' => 105,
            ),
            217 => 
            array (
                'amount' => 1,
                'item_id' => 10168,
                'recipe_id' => 105,
            ),
            218 => 
            array (
                'amount' => 1,
                'item_id' => 10139,
                'recipe_id' => 105,
            ),
            219 => 
            array (
                'amount' => 1,
                'item_id' => 10133,
                'recipe_id' => 105,
            ),
            220 => 
            array (
                'amount' => 1,
                'item_id' => 10171,
                'recipe_id' => 105,
            ),
            221 => 
            array (
                'amount' => 1,
                'item_id' => 10152,
                'recipe_id' => 105,
            ),
            222 => 
            array (
                'amount' => 1,
                'item_id' => 10132,
                'recipe_id' => 105,
            ),
            223 => 
            array (
                'amount' => 1,
                'item_id' => 10167,
                'recipe_id' => 105,
            ),
            224 => 
            array (
                'amount' => 1,
                'item_id' => 10298,
                'recipe_id' => 106,
            ),
            225 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 106,
            ),
            226 => 
            array (
                'amount' => 1,
                'item_id' => 10291,
                'recipe_id' => 107,
            ),
            227 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 107,
            ),
            228 => 
            array (
                'amount' => 1,
                'item_id' => 10305,
                'recipe_id' => 108,
            ),
            229 => 
            array (
                'amount' => 2,
                'item_id' => 10284,
                'recipe_id' => 108,
            ),
            230 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 108,
            ),
            231 => 
            array (
                'amount' => 1,
                'item_id' => 10245,
                'recipe_id' => 109,
            ),
            232 => 
            array (
                'amount' => 2,
                'item_id' => 10284,
                'recipe_id' => 109,
            ),
            233 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 109,
            ),
            234 => 
            array (
                'amount' => 1,
                'item_id' => 10239,
                'recipe_id' => 110,
            ),
            235 => 
            array (
                'amount' => 2,
                'item_id' => 10284,
                'recipe_id' => 110,
            ),
            236 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 110,
            ),
            237 => 
            array (
                'amount' => 1,
                'item_id' => 10276,
                'recipe_id' => 111,
            ),
            238 => 
            array (
                'amount' => 5,
                'item_id' => 10284,
                'recipe_id' => 111,
            ),
            239 => 
            array (
                'amount' => 1,
                'item_id' => 10301,
                'recipe_id' => 112,
            ),
            240 => 
            array (
                'amount' => 5,
                'item_id' => 10284,
                'recipe_id' => 112,
            ),
            241 => 
            array (
                'amount' => 1,
                'item_id' => 10303,
                'recipe_id' => 113,
            ),
            242 => 
            array (
                'amount' => 5,
                'item_id' => 10284,
                'recipe_id' => 113,
            ),
            243 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 113,
            ),
            244 => 
            array (
                'amount' => 1,
                'item_id' => 10296,
                'recipe_id' => 114,
            ),
            245 => 
            array (
                'amount' => 5,
                'item_id' => 10284,
                'recipe_id' => 114,
            ),
            246 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 114,
            ),
            247 => 
            array (
                'amount' => 1,
                'item_id' => 10287,
                'recipe_id' => 115,
            ),
            248 => 
            array (
                'amount' => 5,
                'item_id' => 10284,
                'recipe_id' => 115,
            ),
            249 => 
            array (
                'amount' => 2,
                'item_id' => 10265,
                'recipe_id' => 115,
            ),
            250 => 
            array (
                'amount' => 1,
                'item_id' => 10272,
                'recipe_id' => 116,
            ),
            251 => 
            array (
                'amount' => 5,
                'item_id' => 10265,
                'recipe_id' => 116,
            ),
            252 => 
            array (
                'amount' => 4,
                'item_id' => 10284,
                'recipe_id' => 116,
            ),
            253 => 
            array (
                'amount' => 2,
                'item_id' => 10371,
                'recipe_id' => 117,
            ),
            254 => 
            array (
                'amount' => 2,
                'item_id' => 10370,
                'recipe_id' => 117,
            ),
            255 => 
            array (
                'amount' => 2,
                'item_id' => 10370,
                'recipe_id' => 118,
            ),
            256 => 
            array (
                'amount' => 2,
                'item_id' => 10398,
                'recipe_id' => 118,
            ),
            257 => 
            array (
                'amount' => 3,
                'item_id' => 10352,
                'recipe_id' => 119,
            ),
            258 => 
            array (
                'amount' => 3,
                'item_id' => 10378,
                'recipe_id' => 119,
            ),
            259 => 
            array (
                'amount' => 2,
                'item_id' => 10378,
                'recipe_id' => 120,
            ),
            260 => 
            array (
                'amount' => 1,
                'item_id' => 10384,
                'recipe_id' => 120,
            ),
            261 => 
            array (
                'amount' => 1,
                'item_id' => 10341,
                'recipe_id' => 120,
            ),
            262 => 
            array (
                'amount' => 2,
                'item_id' => 10352,
                'recipe_id' => 121,
            ),
            263 => 
            array (
                'amount' => 1,
                'item_id' => 10349,
                'recipe_id' => 121,
            ),
            264 => 
            array (
                'amount' => 1,
                'item_id' => 10387,
                'recipe_id' => 121,
            ),
            265 => 
            array (
                'amount' => 2,
                'item_id' => 10371,
                'recipe_id' => 122,
            ),
            266 => 
            array (
                'amount' => 2,
                'item_id' => 10343,
                'recipe_id' => 122,
            ),
            267 => 
            array (
                'amount' => 2,
                'item_id' => 10384,
                'recipe_id' => 122,
            ),
            268 => 
            array (
                'amount' => 2,
                'item_id' => 10378,
                'recipe_id' => 123,
            ),
            269 => 
            array (
                'amount' => 2,
                'item_id' => 10371,
                'recipe_id' => 123,
            ),
            270 => 
            array (
                'amount' => 2,
                'item_id' => 10370,
                'recipe_id' => 123,
            ),
            271 => 
            array (
                'amount' => 1,
                'item_id' => 10398,
                'recipe_id' => 123,
            ),
            272 => 
            array (
                'amount' => 1,
                'item_id' => 10352,
                'recipe_id' => 123,
            ),
            273 => 
            array (
                'amount' => 1,
                'item_id' => 10349,
                'recipe_id' => 123,
            ),
            274 => 
            array (
                'amount' => 1,
                'item_id' => 10341,
                'recipe_id' => 123,
            ),
            275 => 
            array (
                'amount' => 1,
                'item_id' => 10595,
                'recipe_id' => 124,
            ),
            276 => 
            array (
                'amount' => 3,
                'item_id' => 10596,
                'recipe_id' => 124,
            ),
            277 => 
            array (
                'amount' => 1,
                'item_id' => 10595,
                'recipe_id' => 125,
            ),
            278 => 
            array (
                'amount' => 3,
                'item_id' => 10597,
                'recipe_id' => 125,
            ),
            279 => 
            array (
                'amount' => 1,
                'item_id' => 10621,
                'recipe_id' => 126,
            ),
            280 => 
            array (
                'amount' => 1,
                'item_id' => 10596,
                'recipe_id' => 126,
            ),
            281 => 
            array (
                'amount' => 1,
                'item_id' => 10621,
                'recipe_id' => 127,
            ),
            282 => 
            array (
                'amount' => 1,
                'item_id' => 10597,
                'recipe_id' => 127,
            ),
            283 => 
            array (
                'amount' => 1,
                'item_id' => 10638,
                'recipe_id' => 128,
            ),
            284 => 
            array (
                'amount' => 2,
                'item_id' => 10596,
                'recipe_id' => 128,
            ),
            285 => 
            array (
                'amount' => 1,
                'item_id' => 10638,
                'recipe_id' => 129,
            ),
            286 => 
            array (
                'amount' => 2,
                'item_id' => 10597,
                'recipe_id' => 129,
            ),
            287 => 
            array (
                'amount' => 1,
                'item_id' => 10574,
                'recipe_id' => 130,
            ),
            288 => 
            array (
                'amount' => 4,
                'item_id' => 10596,
                'recipe_id' => 130,
            ),
            289 => 
            array (
                'amount' => 1,
                'item_id' => 10574,
                'recipe_id' => 131,
            ),
            290 => 
            array (
                'amount' => 4,
                'item_id' => 10597,
                'recipe_id' => 131,
            ),
            291 => 
            array (
                'amount' => 1,
                'item_id' => 10600,
                'recipe_id' => 132,
            ),
            292 => 
            array (
                'amount' => 1,
                'item_id' => 10582,
                'recipe_id' => 132,
            ),
            293 => 
            array (
                'amount' => 5,
                'item_id' => 10629,
                'recipe_id' => 133,
            ),
            294 => 
            array (
                'amount' => 1,
                'item_id' => 10636,
                'recipe_id' => 134,
            ),
            295 => 
            array (
                'amount' => 2,
                'item_id' => 10582,
                'recipe_id' => 134,
            ),
            296 => 
            array (
                'amount' => 5,
                'item_id' => 10583,
                'recipe_id' => 135,
            ),
            297 => 
            array (
                'amount' => 1,
                'item_id' => 10614,
                'recipe_id' => 136,
            ),
            298 => 
            array (
                'amount' => 3,
                'item_id' => 10582,
                'recipe_id' => 136,
            ),
            299 => 
            array (
                'amount' => 5,
                'item_id' => 10618,
                'recipe_id' => 137,
            ),
            300 => 
            array (
                'amount' => 1,
                'item_id' => 10606,
                'recipe_id' => 138,
            ),
            301 => 
            array (
                'amount' => 4,
                'item_id' => 10582,
                'recipe_id' => 138,
            ),
            302 => 
            array (
                'amount' => 5,
                'item_id' => 10628,
                'recipe_id' => 139,
            ),
            303 => 
            array (
                'amount' => 5,
                'item_id' => 10597,
                'recipe_id' => 140,
            ),
            304 => 
            array (
                'amount' => 1,
                'item_id' => 10610,
                'recipe_id' => 140,
            ),
            305 => 
            array (
                'amount' => 2,
                'item_id' => 10720,
                'recipe_id' => 141,
            ),
            306 => 
            array (
                'amount' => 2,
                'item_id' => 10711,
                'recipe_id' => 141,
            ),
            307 => 
            array (
                'amount' => 3,
                'item_id' => 10720,
                'recipe_id' => 142,
            ),
            308 => 
            array (
                'amount' => 3,
                'item_id' => 10711,
                'recipe_id' => 142,
            ),
            309 => 
            array (
                'amount' => 2,
                'item_id' => 10720,
                'recipe_id' => 143,
            ),
            310 => 
            array (
                'amount' => 2,
                'item_id' => 10729,
                'recipe_id' => 143,
            ),
            311 => 
            array (
                'amount' => 3,
                'item_id' => 10720,
                'recipe_id' => 144,
            ),
            312 => 
            array (
                'amount' => 3,
                'item_id' => 10729,
                'recipe_id' => 144,
            ),
            313 => 
            array (
                'amount' => 2,
                'item_id' => 10711,
                'recipe_id' => 145,
            ),
            314 => 
            array (
                'amount' => 2,
                'item_id' => 10729,
                'recipe_id' => 145,
            ),
            315 => 
            array (
                'amount' => 3,
                'item_id' => 10711,
                'recipe_id' => 146,
            ),
            316 => 
            array (
                'amount' => 3,
                'item_id' => 10729,
                'recipe_id' => 146,
            ),
            317 => 
            array (
                'amount' => 4,
                'item_id' => 10711,
                'recipe_id' => 147,
            ),
            318 => 
            array (
                'amount' => 4,
                'item_id' => 10729,
                'recipe_id' => 147,
            ),
            319 => 
            array (
                'amount' => 5,
                'item_id' => 10711,
                'recipe_id' => 148,
            ),
            320 => 
            array (
                'amount' => 5,
                'item_id' => 10729,
                'recipe_id' => 148,
            ),
            321 => 
            array (
                'amount' => 1,
                'item_id' => 8955,
                'recipe_id' => 177,
            ),
            322 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 176,
            ),
            323 => 
            array (
                'amount' => 1,
                'item_id' => 8963,
                'recipe_id' => 176,
            ),
            324 => 
            array (
                'amount' => 2,
                'item_id' => 10791,
                'recipe_id' => 150,
            ),
            325 => 
            array (
                'amount' => 2,
                'item_id' => 10824,
                'recipe_id' => 150,
            ),
            326 => 
            array (
                'amount' => 2,
                'item_id' => 10825,
                'recipe_id' => 150,
            ),
            327 => 
            array (
                'amount' => 2,
                'item_id' => 10825,
                'recipe_id' => 151,
            ),
            328 => 
            array (
                'amount' => 2,
                'item_id' => 10829,
                'recipe_id' => 151,
            ),
            329 => 
            array (
                'amount' => 2,
                'item_id' => 10826,
                'recipe_id' => 151,
            ),
            330 => 
            array (
                'amount' => 3,
                'item_id' => 10812,
                'recipe_id' => 152,
            ),
            331 => 
            array (
                'amount' => 3,
                'item_id' => 10824,
                'recipe_id' => 152,
            ),
            332 => 
            array (
                'amount' => 3,
                'item_id' => 10798,
                'recipe_id' => 152,
            ),
            333 => 
            array (
                'amount' => 3,
                'item_id' => 10829,
                'recipe_id' => 153,
            ),
            334 => 
            array (
                'amount' => 3,
                'item_id' => 10798,
                'recipe_id' => 153,
            ),
            335 => 
            array (
                'amount' => 3,
                'item_id' => 10824,
                'recipe_id' => 153,
            ),
            336 => 
            array (
                'amount' => 5,
                'item_id' => 10902,
                'recipe_id' => 154,
            ),
            337 => 
            array (
                'amount' => 5,
                'item_id' => 10907,
                'recipe_id' => 155,
            ),
            338 => 
            array (
                'amount' => 2,
                'item_id' => 10881,
                'recipe_id' => 156,
            ),
            339 => 
            array (
                'amount' => 5,
                'item_id' => 10884,
                'recipe_id' => 156,
            ),
            340 => 
            array (
                'amount' => 2,
                'item_id' => 10881,
                'recipe_id' => 157,
            ),
            341 => 
            array (
                'amount' => 3,
                'item_id' => 10940,
                'recipe_id' => 157,
            ),
            342 => 
            array (
                'amount' => 2,
                'item_id' => 10881,
                'recipe_id' => 158,
            ),
            343 => 
            array (
                'amount' => 3,
                'item_id' => 10930,
                'recipe_id' => 158,
            ),
            344 => 
            array (
                'amount' => 1,
                'item_id' => 10031,
                'recipe_id' => 163,
            ),
            345 => 
            array (
                'amount' => 1,
                'item_id' => 10033,
                'recipe_id' => 163,
            ),
            346 => 
            array (
                'amount' => 2,
                'item_id' => 10031,
                'recipe_id' => 164,
            ),
            347 => 
            array (
                'amount' => 2,
                'item_id' => 10033,
                'recipe_id' => 164,
            ),
            348 => 
            array (
                'amount' => 3,
                'item_id' => 10031,
                'recipe_id' => 165,
            ),
            349 => 
            array (
                'amount' => 3,
                'item_id' => 10033,
                'recipe_id' => 165,
            ),
            350 => 
            array (
                'amount' => 4,
                'item_id' => 10031,
                'recipe_id' => 166,
            ),
            351 => 
            array (
                'amount' => 4,
                'item_id' => 10033,
                'recipe_id' => 166,
            ),
            352 => 
            array (
                'amount' => 1,
                'item_id' => 8920,
                'recipe_id' => 167,
            ),
            353 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 167,
            ),
            354 => 
            array (
                'amount' => 1,
                'item_id' => 8947,
                'recipe_id' => 168,
            ),
            355 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 168,
            ),
            356 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 169,
            ),
            357 => 
            array (
                'amount' => 1,
                'item_id' => 8927,
                'recipe_id' => 169,
            ),
            358 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 170,
            ),
            359 => 
            array (
                'amount' => 1,
                'item_id' => 8922,
                'recipe_id' => 170,
            ),
            360 => 
            array (
                'amount' => 1,
                'item_id' => 8929,
                'recipe_id' => 171,
            ),
            361 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 171,
            ),
            362 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 172,
            ),
            363 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 173,
            ),
            364 => 
            array (
                'amount' => 1,
                'item_id' => 8962,
                'recipe_id' => 172,
            ),
            365 => 
            array (
                'amount' => 1,
                'item_id' => 8935,
                'recipe_id' => 173,
            ),
            366 => 
            array (
                'amount' => 1,
                'item_id' => 8979,
                'recipe_id' => 174,
            ),
            367 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 174,
            ),
            368 => 
            array (
                'amount' => 1,
                'item_id' => 8986,
                'recipe_id' => 175,
            ),
            369 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 175,
            ),
            370 => 
            array (
                'amount' => 1,
                'item_id' => 8920,
                'recipe_id' => 180,
            ),
            371 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 180,
            ),
            372 => 
            array (
                'amount' => 1,
                'item_id' => 8991,
                'recipe_id' => 179,
            ),
            373 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 179,
            ),
            374 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 178,
            ),
            375 => 
            array (
                'amount' => 1,
                'item_id' => 8967,
                'recipe_id' => 178,
            ),
            376 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 177,
            ),
            377 => 
            array (
                'amount' => 5,
                'item_id' => 9191,
                'recipe_id' => 209,
            ),
            378 => 
            array (
                'amount' => 3,
                'item_id' => 9188,
                'recipe_id' => 208,
            ),
            379 => 
            array (
                'amount' => 3,
                'item_id' => 9158,
                'recipe_id' => 207,
            ),
            380 => 
            array (
                'amount' => 1,
                'item_id' => 8991,
                'recipe_id' => 192,
            ),
            381 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 192,
            ),
            382 => 
            array (
                'amount' => 1,
                'item_id' => 8967,
                'recipe_id' => 191,
            ),
            383 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 191,
            ),
            384 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 190,
            ),
            385 => 
            array (
                'amount' => 1,
                'item_id' => 8955,
                'recipe_id' => 190,
            ),
            386 => 
            array (
                'amount' => 1,
                'item_id' => 8963,
                'recipe_id' => 189,
            ),
            387 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 189,
            ),
            388 => 
            array (
                'amount' => 1,
                'item_id' => 8986,
                'recipe_id' => 188,
            ),
            389 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 188,
            ),
            390 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 187,
            ),
            391 => 
            array (
                'amount' => 1,
                'item_id' => 8979,
                'recipe_id' => 187,
            ),
            392 => 
            array (
                'amount' => 1,
                'item_id' => 8935,
                'recipe_id' => 186,
            ),
            393 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 186,
            ),
            394 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 185,
            ),
            395 => 
            array (
                'amount' => 1,
                'item_id' => 8962,
                'recipe_id' => 185,
            ),
            396 => 
            array (
                'amount' => 1,
                'item_id' => 8929,
                'recipe_id' => 184,
            ),
            397 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 184,
            ),
            398 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 183,
            ),
            399 => 
            array (
                'amount' => 1,
                'item_id' => 8922,
                'recipe_id' => 183,
            ),
            400 => 
            array (
                'amount' => 1,
                'item_id' => 8927,
                'recipe_id' => 182,
            ),
            401 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 182,
            ),
            402 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 181,
            ),
            403 => 
            array (
                'amount' => 1,
                'item_id' => 8947,
                'recipe_id' => 181,
            ),
            404 => 
            array (
                'amount' => 5,
                'item_id' => 9188,
                'recipe_id' => 209,
            ),
            405 => 
            array (
                'amount' => 10,
                'item_id' => 9191,
                'recipe_id' => 210,
            ),
            406 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 211,
            ),
            407 => 
            array (
                'amount' => 1,
                'item_id' => 9194,
                'recipe_id' => 211,
            ),
            408 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 212,
            ),
            409 => 
            array (
                'amount' => 1,
                'item_id' => 9150,
                'recipe_id' => 212,
            ),
            410 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 213,
            ),
            411 => 
            array (
                'amount' => 1,
                'item_id' => 9149,
                'recipe_id' => 213,
            ),
            412 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 214,
            ),
            413 => 
            array (
                'amount' => 1,
                'item_id' => 9161,
                'recipe_id' => 214,
            ),
            414 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 215,
            ),
            415 => 
            array (
                'amount' => 1,
                'item_id' => 9190,
                'recipe_id' => 215,
            ),
            416 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 216,
            ),
            417 => 
            array (
                'amount' => 1,
                'item_id' => 9174,
                'recipe_id' => 216,
            ),
            418 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 217,
            ),
            419 => 
            array (
                'amount' => 1,
                'item_id' => 9176,
                'recipe_id' => 217,
            ),
            420 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 218,
            ),
            421 => 
            array (
                'amount' => 1,
                'item_id' => 9185,
                'recipe_id' => 218,
            ),
            422 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 219,
            ),
            423 => 
            array (
                'amount' => 1,
                'item_id' => 9182,
                'recipe_id' => 219,
            ),
            424 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 220,
            ),
            425 => 
            array (
                'amount' => 1,
                'item_id' => 209,
                'recipe_id' => 220,
            ),
            426 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 221,
            ),
            427 => 
            array (
                'amount' => 1,
                'item_id' => 5305,
                'recipe_id' => 221,
            ),
            428 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 222,
            ),
            429 => 
            array (
                'amount' => 1,
                'item_id' => 5317,
                'recipe_id' => 222,
            ),
            430 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 223,
            ),
            431 => 
            array (
                'amount' => 1,
                'item_id' => 207,
                'recipe_id' => 223,
            ),
            432 => 
            array (
                'amount' => 1,
                'item_id' => 9152,
                'recipe_id' => 224,
            ),
            433 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 224,
            ),
            434 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 224,
            ),
            435 => 
            array (
                'amount' => 1,
                'item_id' => 9186,
                'recipe_id' => 225,
            ),
            436 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 225,
            ),
            437 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 225,
            ),
            438 => 
            array (
                'amount' => 1,
                'item_id' => 9179,
                'recipe_id' => 226,
            ),
            439 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 226,
            ),
            440 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 226,
            ),
            441 => 
            array (
                'amount' => 1,
                'item_id' => 9187,
                'recipe_id' => 227,
            ),
            442 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 227,
            ),
            443 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 227,
            ),
            444 => 
            array (
                'amount' => 1,
                'item_id' => 9162,
                'recipe_id' => 228,
            ),
            445 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 228,
            ),
            446 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 228,
            ),
            447 => 
            array (
                'amount' => 1,
                'item_id' => 6218,
                'recipe_id' => 229,
            ),
            448 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 229,
            ),
            449 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 229,
            ),
            450 => 
            array (
                'amount' => 1,
                'item_id' => 9173,
                'recipe_id' => 230,
            ),
            451 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 230,
            ),
            452 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 230,
            ),
            453 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 230,
            ),
            454 => 
            array (
                'amount' => 1,
                'item_id' => 9156,
                'recipe_id' => 231,
            ),
            455 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 231,
            ),
            456 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 231,
            ),
            457 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 231,
            ),
            458 => 
            array (
                'amount' => 1,
                'item_id' => 9178,
                'recipe_id' => 232,
            ),
            459 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 232,
            ),
            460 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 232,
            ),
            461 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 232,
            ),
            462 => 
            array (
                'amount' => 1,
                'item_id' => 9170,
                'recipe_id' => 233,
            ),
            463 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 233,
            ),
            464 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 233,
            ),
            465 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 233,
            ),
            466 => 
            array (
                'amount' => 1,
                'item_id' => 9177,
                'recipe_id' => 234,
            ),
            467 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 234,
            ),
            468 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 234,
            ),
            469 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 234,
            ),
            470 => 
            array (
                'amount' => 1,
                'item_id' => 9153,
                'recipe_id' => 235,
            ),
            471 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 235,
            ),
            472 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 235,
            ),
            473 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 235,
            ),
            474 => 
            array (
                'amount' => 1,
                'item_id' => 6215,
                'recipe_id' => 236,
            ),
            475 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 236,
            ),
            476 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 236,
            ),
            477 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 236,
            ),
            478 => 
            array (
                'amount' => 1,
                'item_id' => 6183,
                'recipe_id' => 237,
            ),
            479 => 
            array (
                'amount' => 1,
                'item_id' => 9158,
                'recipe_id' => 237,
            ),
            480 => 
            array (
                'amount' => 1,
                'item_id' => 9188,
                'recipe_id' => 237,
            ),
            481 => 
            array (
                'amount' => 1,
                'item_id' => 9191,
                'recipe_id' => 237,
            ),
            482 => 
            array (
                'amount' => 1,
                'item_id' => 3541,
                'recipe_id' => 193,
            ),
            483 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 193,
            ),
            484 => 
            array (
                'amount' => 1,
                'item_id' => 3605,
                'recipe_id' => 194,
            ),
            485 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 194,
            ),
            486 => 
            array (
                'amount' => 1,
                'item_id' => 3189,
                'recipe_id' => 195,
            ),
            487 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 195,
            ),
            488 => 
            array (
                'amount' => 1,
                'item_id' => 3426,
                'recipe_id' => 196,
            ),
            489 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 196,
            ),
            490 => 
            array (
                'amount' => 1,
                'item_id' => 4604,
                'recipe_id' => 197,
            ),
            491 => 
            array (
                'amount' => 1,
                'item_id' => 4580,
                'recipe_id' => 197,
            ),
            492 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 197,
            ),
            493 => 
            array (
                'amount' => 1,
                'item_id' => 2757,
                'recipe_id' => 198,
            ),
            494 => 
            array (
                'amount' => 1,
                'item_id' => 3165,
                'recipe_id' => 198,
            ),
            495 => 
            array (
                'amount' => 1,
                'item_id' => 3984,
                'recipe_id' => 198,
            ),
            496 => 
            array (
                'amount' => 3,
                'item_id' => 3530,
                'recipe_id' => 199,
            ),
            497 => 
            array (
                'amount' => 1,
                'item_id' => 3123,
                'recipe_id' => 199,
            ),
            498 => 
            array (
                'amount' => 1,
                'item_id' => 8936,
                'recipe_id' => 199,
            ),
            499 => 
            array (
                'amount' => 1,
                'item_id' => 4103,
                'recipe_id' => 200,
            ),
        ));
        \DB::table('crafting_recipes_ingredients')->insert(array (
            0 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 200,
            ),
            1 => 
            array (
                'amount' => 1,
                'item_id' => 8245,
                'recipe_id' => 201,
            ),
            2 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 201,
            ),
            3 => 
            array (
                'amount' => 1,
                'item_id' => 3530,
                'recipe_id' => 202,
            ),
            4 => 
            array (
                'amount' => 1,
                'item_id' => 8119,
                'recipe_id' => 202,
            ),
            5 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 202,
            ),
            6 => 
            array (
                'amount' => 1,
                'item_id' => 3162,
                'recipe_id' => 203,
            ),
            7 => 
            array (
                'amount' => 1,
                'item_id' => 3407,
                'recipe_id' => 203,
            ),
            8 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 203,
            ),
            9 => 
            array (
                'amount' => 1,
                'item_id' => 3145,
                'recipe_id' => 204,
            ),
            10 => 
            array (
                'amount' => 1,
                'item_id' => 3153,
                'recipe_id' => 204,
            ),
            11 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 204,
            ),
            12 => 
            array (
                'amount' => 1,
                'item_id' => 3541,
                'recipe_id' => 205,
            ),
            13 => 
            array (
                'amount' => 2,
                'item_id' => 4102,
                'recipe_id' => 205,
            ),
            14 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 205,
            ),
            15 => 
            array (
                'amount' => 1,
                'item_id' => 3541,
                'recipe_id' => 206,
            ),
            16 => 
            array (
                'amount' => 3,
                'item_id' => 8101,
                'recipe_id' => 206,
            ),
            17 => 
            array (
                'amount' => 1,
                'item_id' => 8120,
                'recipe_id' => 206,
            ),
            18 => 
            array (
                'amount' => 1,
                'item_id' => 8921,
                'recipe_id' => 206,
            ),
            19 => 
            array (
                'amount' => 1,
                'item_id' => 11212,
                'recipe_id' => 238,
            ),
            20 => 
            array (
                'amount' => 2,
                'item_id' => 11182,
                'recipe_id' => 238,
            ),
            21 => 
            array (
                'amount' => 1,
                'item_id' => 11195,
                'recipe_id' => 239,
            ),
            22 => 
            array (
                'amount' => 3,
                'item_id' => 11199,
                'recipe_id' => 239,
            ),
            23 => 
            array (
                'amount' => 1,
                'item_id' => 11172,
                'recipe_id' => 240,
            ),
            24 => 
            array (
                'amount' => 4,
                'item_id' => 11199,
                'recipe_id' => 240,
            ),
            25 => 
            array (
                'amount' => 1,
                'item_id' => 11190,
                'recipe_id' => 241,
            ),
            26 => 
            array (
                'amount' => 5,
                'item_id' => 11199,
                'recipe_id' => 241,
            ),
            27 => 
            array (
                'amount' => 1,
                'item_id' => 11179,
                'recipe_id' => 242,
            ),
            28 => 
            array (
                'amount' => 6,
                'item_id' => 11199,
                'recipe_id' => 242,
            ),
            29 => 
            array (
                'amount' => 5,
                'item_id' => 11209,
                'recipe_id' => 243,
            ),
            30 => 
            array (
                'amount' => 5,
                'item_id' => 11178,
                'recipe_id' => 244,
            ),
            31 => 
            array (
                'amount' => 5,
                'item_id' => 11183,
                'recipe_id' => 245,
            ),
            32 => 
            array (
                'amount' => 5,
                'item_id' => 11215,
                'recipe_id' => 246,
            ),
            33 => 
            array (
                'amount' => 5,
                'item_id' => 11189,
                'recipe_id' => 247,
            ),
            34 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 293,
            ),
            35 => 
            array (
                'amount' => 1,
                'item_id' => 11585,
                'recipe_id' => 294,
            ),
            36 => 
            array (
                'amount' => 1,
                'item_id' => 11592,
                'recipe_id' => 296,
            ),
            37 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 296,
            ),
            38 => 
            array (
                'amount' => 1,
                'item_id' => 11592,
                'recipe_id' => 298,
            ),
            39 => 
            array (
                'amount' => 1,
                'item_id' => 11592,
                'recipe_id' => 297,
            ),
            40 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 297,
            ),
            41 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 298,
            ),
            42 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 295,
            ),
            43 => 
            array (
                'amount' => 1,
                'item_id' => 11585,
                'recipe_id' => 295,
            ),
            44 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 294,
            ),
            45 => 
            array (
                'amount' => 1,
                'item_id' => 11585,
                'recipe_id' => 293,
            ),
            46 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 291,
            ),
            47 => 
            array (
                'amount' => 1,
                'item_id' => 11553,
                'recipe_id' => 292,
            ),
            48 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 292,
            ),
            49 => 
            array (
                'amount' => 1,
                'item_id' => 11553,
                'recipe_id' => 291,
            ),
            50 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 290,
            ),
            51 => 
            array (
                'amount' => 1,
                'item_id' => 11553,
                'recipe_id' => 290,
            ),
            52 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 289,
            ),
            53 => 
            array (
                'amount' => 1,
                'item_id' => 11600,
                'recipe_id' => 289,
            ),
            54 => 
            array (
                'amount' => 1,
                'item_id' => 11600,
                'recipe_id' => 288,
            ),
            55 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 288,
            ),
            56 => 
            array (
                'amount' => 2,
                'item_id' => 11563,
                'recipe_id' => 284,
            ),
            57 => 
            array (
                'amount' => 1,
                'item_id' => 11571,
                'recipe_id' => 284,
            ),
            58 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 287,
            ),
            59 => 
            array (
                'amount' => 1,
                'item_id' => 11600,
                'recipe_id' => 287,
            ),
            60 => 
            array (
                'amount' => 2,
                'item_id' => 11563,
                'recipe_id' => 286,
            ),
            61 => 
            array (
                'amount' => 1,
                'item_id' => 11556,
                'recipe_id' => 286,
            ),
            62 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 286,
            ),
            63 => 
            array (
                'amount' => 1,
                'item_id' => 11577,
                'recipe_id' => 285,
            ),
            64 => 
            array (
                'amount' => 2,
                'item_id' => 11563,
                'recipe_id' => 285,
            ),
            65 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 285,
            ),
            66 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 284,
            ),
            67 => 
            array (
                'amount' => 1,
                'item_id' => 11599,
                'recipe_id' => 283,
            ),
            68 => 
            array (
                'amount' => 2,
                'item_id' => 11563,
                'recipe_id' => 283,
            ),
            69 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 283,
            ),
            70 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 282,
            ),
            71 => 
            array (
                'amount' => 1,
                'item_id' => 11580,
                'recipe_id' => 282,
            ),
            72 => 
            array (
                'amount' => 1,
                'item_id' => 11580,
                'recipe_id' => 281,
            ),
            73 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 281,
            ),
            74 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 280,
            ),
            75 => 
            array (
                'amount' => 1,
                'item_id' => 11580,
                'recipe_id' => 280,
            ),
            76 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 279,
            ),
            77 => 
            array (
                'amount' => 1,
                'item_id' => 11608,
                'recipe_id' => 279,
            ),
            78 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 278,
            ),
            79 => 
            array (
                'amount' => 1,
                'item_id' => 11608,
                'recipe_id' => 277,
            ),
            80 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 277,
            ),
            81 => 
            array (
                'amount' => 1,
                'item_id' => 11608,
                'recipe_id' => 278,
            ),
            82 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 276,
            ),
            83 => 
            array (
                'amount' => 1,
                'item_id' => 11566,
                'recipe_id' => 276,
            ),
            84 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 275,
            ),
            85 => 
            array (
                'amount' => 1,
                'item_id' => 11566,
                'recipe_id' => 275,
            ),
            86 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 274,
            ),
            87 => 
            array (
                'amount' => 1,
                'item_id' => 11566,
                'recipe_id' => 274,
            ),
            88 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 272,
            ),
            89 => 
            array (
                'amount' => 1,
                'item_id' => 11589,
                'recipe_id' => 273,
            ),
            90 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 273,
            ),
            91 => 
            array (
                'amount' => 1,
                'item_id' => 11589,
                'recipe_id' => 272,
            ),
            92 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 271,
            ),
            93 => 
            array (
                'amount' => 1,
                'item_id' => 11589,
                'recipe_id' => 271,
            ),
            94 => 
            array (
                'amount' => 1,
                'item_id' => 11556,
                'recipe_id' => 270,
            ),
            95 => 
            array (
                'amount' => 2,
                'item_id' => 11610,
                'recipe_id' => 270,
            ),
            96 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 270,
            ),
            97 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 269,
            ),
            98 => 
            array (
                'amount' => 2,
                'item_id' => 11610,
                'recipe_id' => 269,
            ),
            99 => 
            array (
                'amount' => 1,
                'item_id' => 11577,
                'recipe_id' => 269,
            ),
            100 => 
            array (
                'amount' => 1,
                'item_id' => 11583,
                'recipe_id' => 258,
            ),
            101 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 258,
            ),
            102 => 
            array (
                'amount' => 2,
                'item_id' => 11610,
                'recipe_id' => 267,
            ),
            103 => 
            array (
                'amount' => 2,
                'item_id' => 11610,
                'recipe_id' => 268,
            ),
            104 => 
            array (
                'amount' => 1,
                'item_id' => 11571,
                'recipe_id' => 268,
            ),
            105 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 267,
            ),
            106 => 
            array (
                'amount' => 1,
                'item_id' => 11599,
                'recipe_id' => 267,
            ),
            107 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 268,
            ),
            108 => 
            array (
                'amount' => 1,
                'item_id' => 11573,
                'recipe_id' => 266,
            ),
            109 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 266,
            ),
            110 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 265,
            ),
            111 => 
            array (
                'amount' => 1,
                'item_id' => 11573,
                'recipe_id' => 265,
            ),
            112 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 264,
            ),
            113 => 
            array (
                'amount' => 1,
                'item_id' => 11573,
                'recipe_id' => 264,
            ),
            114 => 
            array (
                'amount' => 1,
                'item_id' => 11578,
                'recipe_id' => 263,
            ),
            115 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 263,
            ),
            116 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 262,
            ),
            117 => 
            array (
                'amount' => 1,
                'item_id' => 11578,
                'recipe_id' => 262,
            ),
            118 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 261,
            ),
            119 => 
            array (
                'amount' => 1,
                'item_id' => 11578,
                'recipe_id' => 261,
            ),
            120 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 260,
            ),
            121 => 
            array (
                'amount' => 1,
                'item_id' => 11583,
                'recipe_id' => 260,
            ),
            122 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 259,
            ),
            123 => 
            array (
                'amount' => 1,
                'item_id' => 11583,
                'recipe_id' => 259,
            ),
            124 => 
            array (
                'amount' => 1,
                'item_id' => 11596,
                'recipe_id' => 257,
            ),
            125 => 
            array (
                'amount' => 1,
                'item_id' => 11570,
                'recipe_id' => 257,
            ),
            126 => 
            array (
                'amount' => 1,
                'item_id' => 11591,
                'recipe_id' => 256,
            ),
            127 => 
            array (
                'amount' => 1,
                'item_id' => 11570,
                'recipe_id' => 256,
            ),
            128 => 
            array (
                'amount' => 1,
                'item_id' => 11571,
                'recipe_id' => 248,
            ),
            129 => 
            array (
                'amount' => 1,
                'item_id' => 11610,
                'recipe_id' => 248,
            ),
            130 => 
            array (
                'amount' => 1,
                'item_id' => 11570,
                'recipe_id' => 255,
            ),
            131 => 
            array (
                'amount' => 1,
                'item_id' => 11586,
                'recipe_id' => 255,
            ),
            132 => 
            array (
                'amount' => 1,
                'item_id' => 11556,
                'recipe_id' => 254,
            ),
            133 => 
            array (
                'amount' => 2,
                'item_id' => 11588,
                'recipe_id' => 254,
            ),
            134 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 254,
            ),
            135 => 
            array (
                'amount' => 1,
                'item_id' => 11577,
                'recipe_id' => 253,
            ),
            136 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 253,
            ),
            137 => 
            array (
                'amount' => 2,
                'item_id' => 11588,
                'recipe_id' => 253,
            ),
            138 => 
            array (
                'amount' => 1,
                'item_id' => 11571,
                'recipe_id' => 252,
            ),
            139 => 
            array (
                'amount' => 2,
                'item_id' => 11588,
                'recipe_id' => 252,
            ),
            140 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 252,
            ),
            141 => 
            array (
                'amount' => 1,
                'item_id' => 11599,
                'recipe_id' => 251,
            ),
            142 => 
            array (
                'amount' => 2,
                'item_id' => 11588,
                'recipe_id' => 251,
            ),
            143 => 
            array (
                'amount' => 1,
                'item_id' => 11557,
                'recipe_id' => 251,
            ),
            144 => 
            array (
                'amount' => 1,
                'item_id' => 11563,
                'recipe_id' => 250,
            ),
            145 => 
            array (
                'amount' => 1,
                'item_id' => 11577,
                'recipe_id' => 250,
            ),
            146 => 
            array (
                'amount' => 1,
                'item_id' => 11599,
                'recipe_id' => 249,
            ),
            147 => 
            array (
                'amount' => 1,
                'item_id' => 11588,
                'recipe_id' => 249,
            ),
            148 => 
            array (
                'amount' => 2,
                'item_id' => 11659,
                'recipe_id' => 299,
            ),
            149 => 
            array (
                'amount' => 2,
                'item_id' => 11658,
                'recipe_id' => 299,
            ),
            150 => 
            array (
                'amount' => 2,
                'item_id' => 11619,
                'recipe_id' => 300,
            ),
            151 => 
            array (
                'amount' => 2,
                'item_id' => 11642,
                'recipe_id' => 300,
            ),
            152 => 
            array (
                'amount' => 2,
                'item_id' => 11664,
                'recipe_id' => 301,
            ),
            153 => 
            array (
                'amount' => 2,
                'item_id' => 11619,
                'recipe_id' => 301,
            ),
            154 => 
            array (
                'amount' => 3,
                'item_id' => 11659,
                'recipe_id' => 302,
            ),
            155 => 
            array (
                'amount' => 3,
                'item_id' => 11619,
                'recipe_id' => 302,
            ),
            156 => 
            array (
                'amount' => 1,
                'item_id' => 11622,
                'recipe_id' => 302,
            ),
            157 => 
            array (
                'amount' => 2,
                'item_id' => 11664,
                'recipe_id' => 303,
            ),
            158 => 
            array (
                'amount' => 2,
                'item_id' => 11658,
                'recipe_id' => 303,
            ),
            159 => 
            array (
                'amount' => 1,
                'item_id' => 11622,
                'recipe_id' => 303,
            ),
            160 => 
            array (
                'amount' => 2,
                'item_id' => 11659,
                'recipe_id' => 304,
            ),
            161 => 
            array (
                'amount' => 2,
                'item_id' => 11658,
                'recipe_id' => 304,
            ),
            162 => 
            array (
                'amount' => 2,
                'item_id' => 11619,
                'recipe_id' => 304,
            ),
            163 => 
            array (
                'amount' => 2,
                'item_id' => 11642,
                'recipe_id' => 304,
            ),
            164 => 
            array (
                'amount' => 1,
                'item_id' => 11622,
                'recipe_id' => 304,
            ),
            165 => 
            array (
                'amount' => 3,
                'item_id' => 11659,
                'recipe_id' => 305,
            ),
            166 => 
            array (
                'amount' => 3,
                'item_id' => 11642,
                'recipe_id' => 305,
            ),
            167 => 
            array (
                'amount' => 1,
                'item_id' => 11642,
                'recipe_id' => 305,
            ),
            168 => 
            array (
                'amount' => 1,
                'item_id' => 11664,
                'recipe_id' => 304,
            ),
        ));
        
        
    }
}