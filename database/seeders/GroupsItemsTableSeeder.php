<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups_items')->delete();
        
        \DB::table('groups_items')->insert(array (
            0 => 
            array (
                'type' => 'base',
                'id' => 1,
                'firstvalue' => 'base_basic_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            1 => 
            array (
                'type' => 'symbol',
                'id' => 1,
                'firstvalue' => 'symbol_background_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            2 => 
            array (
                'type' => 'color',
                'id' => 1,
                'firstvalue' => 'ffd601',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            3 => 
            array (
                'type' => 'color2',
                'id' => 1,
                'firstvalue' => 'ffffff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            4 => 
            array (
                'type' => 'color3',
                'id' => 1,
                'firstvalue' => 'ffffff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            5 => 
            array (
                'type' => 'base',
                'id' => 2,
                'firstvalue' => 'base_basic_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            6 => 
            array (
                'type' => 'symbol',
                'id' => 2,
                'firstvalue' => 'symbol_background_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            7 => 
            array (
                'type' => 'color',
                'id' => 2,
                'firstvalue' => 'ec7600',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            8 => 
            array (
                'type' => 'color2',
                'id' => 2,
                'firstvalue' => 'ebebeb',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            9 => 
            array (
                'type' => 'color3',
                'id' => 2,
                'firstvalue' => 'e5e5e5',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            10 => 
            array (
                'type' => 'base',
                'id' => 3,
                'firstvalue' => 'base_basic_3.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            11 => 
            array (
                'type' => 'symbol',
                'id' => 3,
                'firstvalue' => 'symbol_background_3_part2.gif',
                'secondvalue' => 'symbol_background_3_part1.gif',
                'enabled' => '1',
            ),
            12 => 
            array (
                'type' => 'color',
                'id' => 3,
                'firstvalue' => '84de00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            13 => 
            array (
                'type' => 'color2',
                'id' => 3,
                'firstvalue' => 'd4d4d4',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            14 => 
            array (
                'type' => 'color3',
                'id' => 3,
                'firstvalue' => 'bfbfbf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            15 => 
            array (
                'type' => 'base',
                'id' => 4,
                'firstvalue' => 'base_basic_4.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            16 => 
            array (
                'type' => 'symbol',
                'id' => 4,
                'firstvalue' => 'symbol_ball_1_part2.gif',
                'secondvalue' => 'symbol_ball_1_part1.gif',
                'enabled' => '1',
            ),
            17 => 
            array (
                'type' => 'color',
                'id' => 4,
                'firstvalue' => '589a00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            18 => 
            array (
                'type' => 'color2',
                'id' => 4,
                'firstvalue' => 'bdbdbd',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            19 => 
            array (
                'type' => 'color3',
                'id' => 4,
                'firstvalue' => '999999',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            20 => 
            array (
                'type' => 'base',
                'id' => 5,
                'firstvalue' => 'base_basic_5.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            21 => 
            array (
                'type' => 'symbol',
                'id' => 5,
                'firstvalue' => 'symbol_ball_2_part2.gif',
                'secondvalue' => 'symbol_ball_2_part1.gif',
                'enabled' => '1',
            ),
            22 => 
            array (
                'type' => 'color',
                'id' => 5,
                'firstvalue' => '50c1fb',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            23 => 
            array (
                'type' => 'color2',
                'id' => 5,
                'firstvalue' => 'a6a6a6',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            24 => 
            array (
                'type' => 'color3',
                'id' => 5,
                'firstvalue' => '737373',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            25 => 
            array (
                'type' => 'base',
                'id' => 6,
                'firstvalue' => 'base_advanced_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            26 => 
            array (
                'type' => 'symbol',
                'id' => 6,
                'firstvalue' => 'symbol_bobba.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            27 => 
            array (
                'type' => 'color',
                'id' => 6,
                'firstvalue' => '006fcf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            28 => 
            array (
                'type' => 'color2',
                'id' => 6,
                'firstvalue' => '8f8f8f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            29 => 
            array (
                'type' => 'color3',
                'id' => 6,
                'firstvalue' => '4c4c4c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            30 => 
            array (
                'type' => 'base',
                'id' => 7,
                'firstvalue' => 'base_advanced_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            31 => 
            array (
                'type' => 'symbol',
                'id' => 7,
                'firstvalue' => 'symbol_bomb_part2.gif',
                'secondvalue' => 'symbol_bomb_part1.gif',
                'enabled' => '1',
            ),
            32 => 
            array (
                'type' => 'color',
                'id' => 7,
                'firstvalue' => 'ff98e3',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            33 => 
            array (
                'type' => 'color2',
                'id' => 7,
                'firstvalue' => '787878',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            34 => 
            array (
                'type' => 'color3',
                'id' => 7,
                'firstvalue' => '589a00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            35 => 
            array (
                'type' => 'base',
                'id' => 8,
                'firstvalue' => 'base_advanced_3.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            36 => 
            array (
                'type' => 'symbol',
                'id' => 8,
                'firstvalue' => 'symbol_bow.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            37 => 
            array (
                'type' => 'color',
                'id' => 8,
                'firstvalue' => 'f334bf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            38 => 
            array (
                'type' => 'color2',
                'id' => 8,
                'firstvalue' => '616161',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            39 => 
            array (
                'type' => 'color3',
                'id' => 8,
                'firstvalue' => '4f8a00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            40 => 
            array (
                'type' => 'base',
                'id' => 9,
                'firstvalue' => 'base_advanced_4.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            41 => 
            array (
                'type' => 'symbol',
                'id' => 9,
                'firstvalue' => 'symbol_box_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            42 => 
            array (
                'type' => 'color',
                'id' => 9,
                'firstvalue' => 'ff2d2d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            43 => 
            array (
                'type' => 'color2',
                'id' => 9,
                'firstvalue' => '4c4c4c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            44 => 
            array (
                'type' => 'color3',
                'id' => 9,
                'firstvalue' => '427300',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            45 => 
            array (
                'type' => 'base',
                'id' => 10,
                'firstvalue' => 'base_gold_1_part2.gif',
                'secondvalue' => 'base_gold_1_part1.gif',
                'enabled' => '1',
            ),
            46 => 
            array (
                'type' => 'symbol',
                'id' => 10,
                'firstvalue' => 'symbol_box_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            47 => 
            array (
                'type' => 'color',
                'id' => 10,
                'firstvalue' => 'af0a0a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            48 => 
            array (
                'type' => 'color2',
                'id' => 10,
                'firstvalue' => '589a00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            49 => 
            array (
                'type' => 'color3',
                'id' => 10,
                'firstvalue' => '355c00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            50 => 
            array (
                'type' => 'base',
                'id' => 11,
                'firstvalue' => 'base_gold_2_part2.gif',
                'secondvalue' => 'base_gold_2_part1.gif',
                'enabled' => '1',
            ),
            51 => 
            array (
                'type' => 'symbol',
                'id' => 11,
                'firstvalue' => 'symbol_bunting_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            52 => 
            array (
                'type' => 'color',
                'id' => 11,
                'firstvalue' => 'ffffff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            53 => 
            array (
                'type' => 'color2',
                'id' => 11,
                'firstvalue' => '518e00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            54 => 
            array (
                'type' => 'color3',
                'id' => 11,
                'firstvalue' => '284500',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            55 => 
            array (
                'type' => 'base',
                'id' => 12,
                'firstvalue' => 'base_pin_part2.gif',
                'secondvalue' => 'base_pin_part1.gif',
                'enabled' => '1',
            ),
            56 => 
            array (
                'type' => 'symbol',
                'id' => 12,
                'firstvalue' => 'symbol_bunting_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            57 => 
            array (
                'type' => 'color',
                'id' => 12,
                'firstvalue' => 'c0c0c0',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            58 => 
            array (
                'type' => 'color2',
                'id' => 12,
                'firstvalue' => '498000',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            59 => 
            array (
                'type' => 'color3',
                'id' => 12,
                'firstvalue' => '1a2e00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            60 => 
            array (
                'type' => 'base',
                'id' => 13,
                'firstvalue' => 'base_gradient_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            61 => 
            array (
                'type' => 'symbol',
                'id' => 13,
                'firstvalue' => 'symbol_butterfly_part2.gif',
                'secondvalue' => 'symbol_butterfly_part1.gif',
                'enabled' => '1',
            ),
            62 => 
            array (
                'type' => 'color',
                'id' => 13,
                'firstvalue' => '373737',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            63 => 
            array (
                'type' => 'color2',
                'id' => 13,
                'firstvalue' => '417200',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            64 => 
            array (
                'type' => 'color3',
                'id' => 13,
                'firstvalue' => '84de00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            65 => 
            array (
                'type' => 'base',
                'id' => 14,
                'firstvalue' => 'base_gradient_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            66 => 
            array (
                'type' => 'symbol',
                'id' => 14,
                'firstvalue' => 'symbol_cowskull_part2.gif',
                'secondvalue' => 'symbol_cowskull_part1.gif',
                'enabled' => '1',
            ),
            67 => 
            array (
                'type' => 'color',
                'id' => 14,
                'firstvalue' => 'fbe7ac',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            68 => 
            array (
                'type' => 'color2',
                'id' => 14,
                'firstvalue' => '396400',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            69 => 
            array (
                'type' => 'color3',
                'id' => 14,
                'firstvalue' => '77c700',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            70 => 
            array (
                'type' => 'base',
                'id' => 15,
                'firstvalue' => 'base_circles_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            71 => 
            array (
                'type' => 'symbol',
                'id' => 15,
                'firstvalue' => 'symbol_cross.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            72 => 
            array (
                'type' => 'color',
                'id' => 15,
                'firstvalue' => '977641',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            73 => 
            array (
                'type' => 'color2',
                'id' => 15,
                'firstvalue' => '315600',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            74 => 
            array (
                'type' => 'color3',
                'id' => 15,
                'firstvalue' => '63a600',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            75 => 
            array (
                'type' => 'base',
                'id' => 16,
                'firstvalue' => 'base_circles_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            76 => 
            array (
                'type' => 'symbol',
                'id' => 16,
                'firstvalue' => 'symbol_diamond.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            77 => 
            array (
                'type' => 'color',
                'id' => 16,
                'firstvalue' => 'c2eaff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            78 => 
            array (
                'type' => 'color2',
                'id' => 16,
                'firstvalue' => '294800',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            79 => 
            array (
                'type' => 'color3',
                'id' => 16,
                'firstvalue' => '4f8500',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            80 => 
            array (
                'type' => 'base',
                'id' => 17,
                'firstvalue' => 'base_ornament_1_part2.gif',
                'secondvalue' => 'base_ornament_1_part1.gif',
                'enabled' => '1',
            ),
            81 => 
            array (
                'type' => 'symbol',
                'id' => 17,
                'firstvalue' => 'symbol_diploma_part2.gif',
                'secondvalue' => 'symbol_diploma_part1.gif',
                'enabled' => '1',
            ),
            82 => 
            array (
                'type' => 'color',
                'id' => 17,
                'firstvalue' => 'fff165',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            83 => 
            array (
                'type' => 'color2',
                'id' => 17,
                'firstvalue' => '213b00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            84 => 
            array (
                'type' => 'color3',
                'id' => 17,
                'firstvalue' => '3c6400',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            85 => 
            array (
                'type' => 'base',
                'id' => 18,
                'firstvalue' => 'base_ornament_2_part2.gif',
                'secondvalue' => 'base_ornament_2_part1.gif',
                'enabled' => '1',
            ),
            86 => 
            array (
                'type' => 'symbol',
                'id' => 18,
                'firstvalue' => 'symbol_eyeball_part2.gif',
                'secondvalue' => 'symbol_eyeball_part1.gif',
                'enabled' => '1',
            ),
            87 => 
            array (
                'type' => 'color',
                'id' => 18,
                'firstvalue' => 'aaff7d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            88 => 
            array (
                'type' => 'color2',
                'id' => 18,
                'firstvalue' => '1a2e00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            89 => 
            array (
                'type' => 'color3',
                'id' => 18,
                'firstvalue' => '274200',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            90 => 
            array (
                'type' => 'base',
                'id' => 19,
                'firstvalue' => 'base_misc_1_part2.gif',
                'secondvalue' => 'base_misc_1_part1.gif',
                'enabled' => '1',
            ),
            91 => 
            array (
                'type' => 'symbol',
                'id' => 19,
                'firstvalue' => 'symbol_fist.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            92 => 
            array (
                'type' => 'color',
                'id' => 19,
                'firstvalue' => '87e6c8',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            93 => 
            array (
                'type' => 'color2',
                'id' => 19,
                'firstvalue' => '84de00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            94 => 
            array (
                'type' => 'color3',
                'id' => 19,
                'firstvalue' => 'c2eaff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            95 => 
            array (
                'type' => 'base',
                'id' => 20,
                'firstvalue' => 'base_misc_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            96 => 
            array (
                'type' => 'symbol',
                'id' => 20,
                'firstvalue' => 'symbol_flame_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            97 => 
            array (
                'type' => 'color',
                'id' => 20,
                'firstvalue' => '9844e7',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            98 => 
            array (
                'type' => 'color2',
                'id' => 20,
                'firstvalue' => '7acd00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            99 => 
            array (
                'type' => 'color3',
                'id' => 20,
                'firstvalue' => 'aed2e5',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            100 => 
            array (
                'type' => 'base',
                'id' => 21,
                'firstvalue' => 'base_beams_part2.gif',
                'secondvalue' => 'base_beams_part1.gif',
                'enabled' => '1',
            ),
            101 => 
            array (
                'type' => 'symbol',
                'id' => 21,
                'firstvalue' => 'symbol_flame_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            102 => 
            array (
                'type' => 'color',
                'id' => 21,
                'firstvalue' => 'dea9ff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            103 => 
            array (
                'type' => 'color2',
                'id' => 21,
                'firstvalue' => '6eb900',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            104 => 
            array (
                'type' => 'color3',
                'id' => 21,
                'firstvalue' => '91afbf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            105 => 
            array (
                'type' => 'base',
                'id' => 22,
                'firstvalue' => 'base_ring.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            106 => 
            array (
                'type' => 'symbol',
                'id' => 22,
                'firstvalue' => 'symbol_flash.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            107 => 
            array (
                'type' => 'color',
                'id' => 22,
                'firstvalue' => 'ffb579',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            108 => 
            array (
                'type' => 'color2',
                'id' => 22,
                'firstvalue' => '62a500',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            109 => 
            array (
                'type' => 'color3',
                'id' => 22,
                'firstvalue' => '748c99',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            110 => 
            array (
                'type' => 'base',
                'id' => 23,
                'firstvalue' => 'base_simplestar_part2.gif',
                'secondvalue' => 'base_simplestar_part1.gif',
                'enabled' => '1',
            ),
            111 => 
            array (
                'type' => 'symbol',
                'id' => 23,
                'firstvalue' => 'symbol_flower_1_part2.gif',
                'secondvalue' => 'symbol_flower_1_part1.gif',
                'enabled' => '1',
            ),
            112 => 
            array (
                'type' => 'color',
                'id' => 23,
                'firstvalue' => 'c3aa6e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            113 => 
            array (
                'type' => 'color2',
                'id' => 23,
                'firstvalue' => '569100',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            114 => 
            array (
                'type' => 'color3',
                'id' => 23,
                'firstvalue' => '576a73',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            115 => 
            array (
                'type' => 'base',
                'id' => 24,
                'firstvalue' => 'base_spiral.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            116 => 
            array (
                'type' => 'symbol',
                'id' => 24,
                'firstvalue' => 'symbol_flower_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            117 => 
            array (
                'type' => 'color',
                'id' => 24,
                'firstvalue' => '7a7a7a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            118 => 
            array (
                'type' => 'color2',
                'id' => 24,
                'firstvalue' => '4a7c00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            119 => 
            array (
                'type' => 'color3',
                'id' => 24,
                'firstvalue' => '3a464c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            120 => 
            array (
                'type' => 'base',
                'id' => 25,
                'firstvalue' => 'base_book.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            121 => 
            array (
                'type' => 'symbol',
                'id' => 25,
                'firstvalue' => 'symbol_flower_3.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            122 => 
            array (
                'type' => 'color2',
                'id' => 25,
                'firstvalue' => '3e6800',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            123 => 
            array (
                'type' => 'color3',
                'id' => 25,
                'firstvalue' => '50c1fb',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            124 => 
            array (
                'type' => 'base',
                'id' => 26,
                'firstvalue' => 'base_egg.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            125 => 
            array (
                'type' => 'symbol',
                'id' => 26,
                'firstvalue' => 'symbol_flower_4.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            126 => 
            array (
                'type' => 'color2',
                'id' => 26,
                'firstvalue' => '325400',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            127 => 
            array (
                'type' => 'color3',
                'id' => 26,
                'firstvalue' => '48ade1',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            128 => 
            array (
                'type' => 'base',
                'id' => 27,
                'firstvalue' => 'base_ornament.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            129 => 
            array (
                'type' => 'symbol',
                'id' => 27,
                'firstvalue' => 'symbol_football.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            130 => 
            array (
                'type' => 'color2',
                'id' => 27,
                'firstvalue' => '274200',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            131 => 
            array (
                'type' => 'color3',
                'id' => 27,
                'firstvalue' => '3c91bc',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            132 => 
            array (
                'type' => 'base',
                'id' => 28,
                'firstvalue' => 'base_shield_part2.gif',
                'secondvalue' => 'base_shield_part1.gif',
                'enabled' => '1',
            ),
            133 => 
            array (
                'type' => 'symbol',
                'id' => 28,
                'firstvalue' => 'symbol_heart_1_part2.gif',
                'secondvalue' => 'symbol_heart_1_part1.gif',
                'enabled' => '1',
            ),
            134 => 
            array (
                'type' => 'color2',
                'id' => 28,
                'firstvalue' => 'c2eaff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            135 => 
            array (
                'type' => 'color3',
                'id' => 28,
                'firstvalue' => '307497',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            136 => 
            array (
                'type' => 'symbol',
                'id' => 29,
                'firstvalue' => 'symbol_heart_2_part2.gif',
                'secondvalue' => 'symbol_heart_2_part1.gif',
                'enabled' => '1',
            ),
            137 => 
            array (
                'type' => 'color2',
                'id' => 29,
                'firstvalue' => 'b3d8eb',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            138 => 
            array (
                'type' => 'color3',
                'id' => 29,
                'firstvalue' => '245771',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            139 => 
            array (
                'type' => 'symbol',
                'id' => 30,
                'firstvalue' => 'symbol_jingjang_part2.gif',
                'secondvalue' => 'symbol_jingjang_part1.gif',
                'enabled' => '1',
            ),
            140 => 
            array (
                'type' => 'color2',
                'id' => 30,
                'firstvalue' => 'a1c3d4',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            141 => 
            array (
                'type' => 'color3',
                'id' => 30,
                'firstvalue' => '183a4b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            142 => 
            array (
                'type' => 'symbol',
                'id' => 31,
                'firstvalue' => 'symbol_lips_part2.gif',
                'secondvalue' => 'symbol_lips_part1.gif',
                'enabled' => '1',
            ),
            143 => 
            array (
                'type' => 'color2',
                'id' => 31,
                'firstvalue' => '90adbd',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            144 => 
            array (
                'type' => 'color3',
                'id' => 31,
                'firstvalue' => '006fcf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            145 => 
            array (
                'type' => 'symbol',
                'id' => 32,
                'firstvalue' => 'symbol_note.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            146 => 
            array (
                'type' => 'color2',
                'id' => 32,
                'firstvalue' => '7e98a6',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            147 => 
            array (
                'type' => 'color3',
                'id' => 32,
                'firstvalue' => '0064ba',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            148 => 
            array (
                'type' => 'symbol',
                'id' => 33,
                'firstvalue' => 'symbol_peace.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            149 => 
            array (
                'type' => 'color2',
                'id' => 33,
                'firstvalue' => '6d838f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            150 => 
            array (
                'type' => 'color3',
                'id' => 33,
                'firstvalue' => '00539b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            151 => 
            array (
                'type' => 'symbol',
                'id' => 34,
                'firstvalue' => 'symbol_planet_part2.gif',
                'secondvalue' => 'symbol_planet_part1.gif',
                'enabled' => '1',
            ),
            152 => 
            array (
                'type' => 'color2',
                'id' => 34,
                'firstvalue' => '5b6e78',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            153 => 
            array (
                'type' => 'color3',
                'id' => 34,
                'firstvalue' => '00437c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            154 => 
            array (
                'type' => 'symbol',
                'id' => 35,
                'firstvalue' => 'symbol_rainbow_part2.gif',
                'secondvalue' => 'symbol_rainbow_part1.gif',
                'enabled' => '1',
            ),
            155 => 
            array (
                'type' => 'color2',
                'id' => 35,
                'firstvalue' => '4a5961',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            156 => 
            array (
                'type' => 'color3',
                'id' => 35,
                'firstvalue' => '00325d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            157 => 
            array (
                'type' => 'symbol',
                'id' => 36,
                'firstvalue' => 'symbol_rosete.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            158 => 
            array (
                'type' => 'color2',
                'id' => 36,
                'firstvalue' => '3a464c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            159 => 
            array (
                'type' => 'color3',
                'id' => 36,
                'firstvalue' => '00213e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            160 => 
            array (
                'type' => 'symbol',
                'id' => 37,
                'firstvalue' => 'symbol_shape.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            161 => 
            array (
                'type' => 'color2',
                'id' => 37,
                'firstvalue' => '50c1fb',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            162 => 
            array (
                'type' => 'color3',
                'id' => 37,
                'firstvalue' => '9844e7',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            163 => 
            array (
                'type' => 'symbol',
                'id' => 38,
                'firstvalue' => 'symbol_star_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            164 => 
            array (
                'type' => 'color2',
                'id' => 38,
                'firstvalue' => '4ab2e7',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            165 => 
            array (
                'type' => 'color3',
                'id' => 38,
                'firstvalue' => '893dcf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            166 => 
            array (
                'type' => 'symbol',
                'id' => 39,
                'firstvalue' => 'symbol_star_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            167 => 
            array (
                'type' => 'color2',
                'id' => 39,
                'firstvalue' => '43a0d1',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            168 => 
            array (
                'type' => 'color3',
                'id' => 39,
                'firstvalue' => '7233ad',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            169 => 
            array (
                'type' => 'symbol',
                'id' => 40,
                'firstvalue' => 'symbol_sword_1_part2.gif',
                'secondvalue' => 'symbol_sword_1_part1.gif',
                'enabled' => '1',
            ),
            170 => 
            array (
                'type' => 'color2',
                'id' => 40,
                'firstvalue' => '3b8fba',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            171 => 
            array (
                'type' => 'color3',
                'id' => 40,
                'firstvalue' => '5b298b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            172 => 
            array (
                'type' => 'symbol',
                'id' => 41,
                'firstvalue' => 'symbol_sword_2_part2.gif',
                'secondvalue' => 'symbol_sword_2_part1.gif',
                'enabled' => '1',
            ),
            173 => 
            array (
                'type' => 'color2',
                'id' => 41,
                'firstvalue' => '347ea3',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            174 => 
            array (
                'type' => 'color3',
                'id' => 41,
                'firstvalue' => '451f68',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            175 => 
            array (
                'type' => 'symbol',
                'id' => 42,
                'firstvalue' => 'symbol_sword_3_part2.gif',
                'secondvalue' => 'symbol_sword_3_part1.gif',
                'enabled' => '1',
            ),
            176 => 
            array (
                'type' => 'color2',
                'id' => 42,
                'firstvalue' => '2d6c8d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            177 => 
            array (
                'type' => 'color3',
                'id' => 42,
                'firstvalue' => '2d1445',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            178 => 
            array (
                'type' => 'symbol',
                'id' => 43,
                'firstvalue' => 'symbol_wings_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            179 => 
            array (
                'type' => 'color2',
                'id' => 43,
                'firstvalue' => '265b76',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            180 => 
            array (
                'type' => 'color3',
                'id' => 43,
                'firstvalue' => 'dea9ff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            181 => 
            array (
                'type' => 'symbol',
                'id' => 44,
                'firstvalue' => 'symbol_wings_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            182 => 
            array (
                'type' => 'color2',
                'id' => 44,
                'firstvalue' => '1e495f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            183 => 
            array (
                'type' => 'color3',
                'id' => 44,
                'firstvalue' => 'c798e5',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            184 => 
            array (
                'type' => 'symbol',
                'id' => 45,
                'firstvalue' => 'symbol_arrow_down.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            185 => 
            array (
                'type' => 'color2',
                'id' => 45,
                'firstvalue' => '183a4b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            186 => 
            array (
                'type' => 'color3',
                'id' => 45,
                'firstvalue' => 'a67fbf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            187 => 
            array (
                'type' => 'symbol',
                'id' => 46,
                'firstvalue' => 'symbol_arrow_left.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            188 => 
            array (
                'type' => 'color2',
                'id' => 46,
                'firstvalue' => '006fcf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            189 => 
            array (
                'type' => 'color3',
                'id' => 46,
                'firstvalue' => '856599',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            190 => 
            array (
                'type' => 'symbol',
                'id' => 47,
                'firstvalue' => 'symbol_arrow_right.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            191 => 
            array (
                'type' => 'color2',
                'id' => 47,
                'firstvalue' => '0066bf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            192 => 
            array (
                'type' => 'color3',
                'id' => 47,
                'firstvalue' => '644c73',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            193 => 
            array (
                'type' => 'symbol',
                'id' => 48,
                'firstvalue' => 'symbol_arrow_up.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            194 => 
            array (
                'type' => 'color2',
                'id' => 48,
                'firstvalue' => '005cac',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            195 => 
            array (
                'type' => 'color3',
                'id' => 48,
                'firstvalue' => '42324c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            196 => 
            array (
                'type' => 'symbol',
                'id' => 49,
                'firstvalue' => 'symbol_arrowbig_up.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            197 => 
            array (
                'type' => 'color2',
                'id' => 49,
                'firstvalue' => '005299',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            198 => 
            array (
                'type' => 'color3',
                'id' => 49,
                'firstvalue' => 'ff98e3',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            199 => 
            array (
                'type' => 'symbol',
                'id' => 50,
                'firstvalue' => 'symbol_axe_part2.gif',
                'secondvalue' => 'symbol_axe_part1.gif',
                'enabled' => '1',
            ),
            200 => 
            array (
                'type' => 'color2',
                'id' => 50,
                'firstvalue' => '004887',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            201 => 
            array (
                'type' => 'color3',
                'id' => 50,
                'firstvalue' => 'e589cc',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            202 => 
            array (
                'type' => 'symbol',
                'id' => 51,
                'firstvalue' => 'symbol_bug_part2.gif',
                'secondvalue' => 'symbol_bug_part1.gif',
                'enabled' => '1',
            ),
            203 => 
            array (
                'type' => 'color2',
                'id' => 51,
                'firstvalue' => '003e74',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            204 => 
            array (
                'type' => 'color3',
                'id' => 51,
                'firstvalue' => 'bf72aa',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            205 => 
            array (
                'type' => 'symbol',
                'id' => 52,
                'firstvalue' => 'symbol_capsbig_part2.gif',
                'secondvalue' => 'symbol_capsbig_part1.gif',
                'enabled' => '1',
            ),
            206 => 
            array (
                'type' => 'color2',
                'id' => 52,
                'firstvalue' => '003461',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            207 => 
            array (
                'type' => 'color3',
                'id' => 52,
                'firstvalue' => '995b88',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            208 => 
            array (
                'type' => 'symbol',
                'id' => 53,
                'firstvalue' => 'symbol_capssmall_part2.gif',
                'secondvalue' => 'symbol_capssmall_part1.gif',
                'enabled' => '1',
            ),
            209 => 
            array (
                'type' => 'color2',
                'id' => 53,
                'firstvalue' => '002a4f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            210 => 
            array (
                'type' => 'color3',
                'id' => 53,
                'firstvalue' => '734566',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            211 => 
            array (
                'type' => 'symbol',
                'id' => 54,
                'firstvalue' => 'symbol_cloud.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            212 => 
            array (
                'type' => 'color2',
                'id' => 54,
                'firstvalue' => '00213e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            213 => 
            array (
                'type' => 'color3',
                'id' => 54,
                'firstvalue' => '4c2d44',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            214 => 
            array (
                'type' => 'symbol',
                'id' => 55,
                'firstvalue' => 'symbol_crown_part2.gif',
                'secondvalue' => 'symbol_crown_part1.gif',
                'enabled' => '1',
            ),
            215 => 
            array (
                'type' => 'color2',
                'id' => 55,
                'firstvalue' => '9844e7',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            216 => 
            array (
                'type' => 'color3',
                'id' => 55,
                'firstvalue' => 'f334bf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            217 => 
            array (
                'type' => 'symbol',
                'id' => 56,
                'firstvalue' => 'symbol_diamsmall2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            218 => 
            array (
                'type' => 'color2',
                'id' => 56,
                'firstvalue' => '8c3fd5',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            219 => 
            array (
                'type' => 'color3',
                'id' => 56,
                'firstvalue' => 'da2fac',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            220 => 
            array (
                'type' => 'symbol',
                'id' => 57,
                'firstvalue' => 'symbol_diamsmall.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            221 => 
            array (
                'type' => 'color2',
                'id' => 57,
                'firstvalue' => '7e39c0',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            222 => 
            array (
                'type' => 'color3',
                'id' => 57,
                'firstvalue' => 'b6278f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            223 => 
            array (
                'type' => 'symbol',
                'id' => 58,
                'firstvalue' => 'symbol_drop.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            224 => 
            array (
                'type' => 'color2',
                'id' => 58,
                'firstvalue' => '7132ab',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            225 => 
            array (
                'type' => 'color3',
                'id' => 58,
                'firstvalue' => '921f73',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            226 => 
            array (
                'type' => 'symbol',
                'id' => 59,
                'firstvalue' => 'symbol_fingersheavy.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            227 => 
            array (
                'type' => 'color2',
                'id' => 59,
                'firstvalue' => '632c96',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            228 => 
            array (
                'type' => 'color3',
                'id' => 59,
                'firstvalue' => '6e1756',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            229 => 
            array (
                'type' => 'symbol',
                'id' => 60,
                'firstvalue' => 'symbol_fingersv.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            230 => 
            array (
                'type' => 'color2',
                'id' => 60,
                'firstvalue' => '552682',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            231 => 
            array (
                'type' => 'color3',
                'id' => 60,
                'firstvalue' => '480f39',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            232 => 
            array (
                'type' => 'symbol',
                'id' => 61,
                'firstvalue' => 'symbol_gtr_part2.gif',
                'secondvalue' => 'symbol_gtr_part1.gif',
                'enabled' => '1',
            ),
            233 => 
            array (
                'type' => 'color2',
                'id' => 61,
                'firstvalue' => '48206d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            234 => 
            array (
                'type' => 'color3',
                'id' => 61,
                'firstvalue' => 'ff2d2d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            235 => 
            array (
                'type' => 'symbol',
                'id' => 62,
                'firstvalue' => 'symbol_hat.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            236 => 
            array (
                'type' => 'color2',
                'id' => 62,
                'firstvalue' => '3a1a58',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            237 => 
            array (
                'type' => 'color3',
                'id' => 62,
                'firstvalue' => 'e52828',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            238 => 
            array (
                'type' => 'symbol',
                'id' => 63,
                'firstvalue' => 'symbol_oval_part2.gif',
                'secondvalue' => 'symbol_oval_part1.gif',
                'enabled' => '1',
            ),
            239 => 
            array (
                'type' => 'color2',
                'id' => 63,
                'firstvalue' => '2d1445',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            240 => 
            array (
                'type' => 'color3',
                'id' => 63,
                'firstvalue' => 'bf2222',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            241 => 
            array (
                'type' => 'symbol',
                'id' => 64,
                'firstvalue' => 'symbol_pawprint.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            242 => 
            array (
                'type' => 'color2',
                'id' => 64,
                'firstvalue' => 'dea9ff',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            243 => 
            array (
                'type' => 'color3',
                'id' => 64,
                'firstvalue' => '991b1b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            244 => 
            array (
                'type' => 'symbol',
                'id' => 65,
                'firstvalue' => 'symbol_screw.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            245 => 
            array (
                'type' => 'color2',
                'id' => 65,
                'firstvalue' => 'cd9ceb',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            246 => 
            array (
                'type' => 'color3',
                'id' => 65,
                'firstvalue' => '731414',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            247 => 
            array (
                'type' => 'symbol',
                'id' => 66,
                'firstvalue' => 'symbol_stickL_part2.gif',
                'secondvalue' => 'symbol_stickL_part1.gif',
                'enabled' => '1',
            ),
            248 => 
            array (
                'type' => 'color2',
                'id' => 66,
                'firstvalue' => 'b98dd4',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            249 => 
            array (
                'type' => 'color3',
                'id' => 66,
                'firstvalue' => '4c0d0d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            250 => 
            array (
                'type' => 'symbol',
                'id' => 67,
                'firstvalue' => 'symbol_stickR_part2.gif',
                'secondvalue' => 'symbol_stickR_part1.gif',
                'enabled' => '1',
            ),
            251 => 
            array (
                'type' => 'color2',
                'id' => 67,
                'firstvalue' => 'a57dbd',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            252 => 
            array (
                'type' => 'color3',
                'id' => 67,
                'firstvalue' => 'ffb579',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            253 => 
            array (
                'type' => 'symbol',
                'id' => 68,
                'firstvalue' => 'symbol_alligator.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            254 => 
            array (
                'type' => 'color2',
                'id' => 68,
                'firstvalue' => '916ea6',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            255 => 
            array (
                'type' => 'color3',
                'id' => 68,
                'firstvalue' => 'e5a36d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            256 => 
            array (
                'type' => 'symbol',
                'id' => 69,
                'firstvalue' => 'symbol_americanfootball_part2.gif',
                'secondvalue' => 'symbol_americanfootball_part1.gif',
                'enabled' => '1',
            ),
            257 => 
            array (
                'type' => 'color2',
                'id' => 69,
                'firstvalue' => '7c5f8f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            258 => 
            array (
                'type' => 'color3',
                'id' => 69,
                'firstvalue' => 'bf885b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            259 => 
            array (
                'type' => 'symbol',
                'id' => 70,
                'firstvalue' => 'symbol_award_part2.gif',
                'secondvalue' => 'symbol_award_part1.gif',
                'enabled' => '1',
            ),
            260 => 
            array (
                'type' => 'color2',
                'id' => 70,
                'firstvalue' => '685078',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            261 => 
            array (
                'type' => 'color3',
                'id' => 70,
                'firstvalue' => '996d49',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            262 => 
            array (
                'type' => 'symbol',
                'id' => 71,
                'firstvalue' => 'symbol_bananapeel.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            263 => 
            array (
                'type' => 'color2',
                'id' => 71,
                'firstvalue' => '544061',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            264 => 
            array (
                'type' => 'color3',
                'id' => 71,
                'firstvalue' => '735237',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            265 => 
            array (
                'type' => 'symbol',
                'id' => 72,
                'firstvalue' => 'symbol_battleball.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            266 => 
            array (
                'type' => 'color2',
                'id' => 72,
                'firstvalue' => '42324c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            267 => 
            array (
                'type' => 'color3',
                'id' => 72,
                'firstvalue' => '4c3624',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            268 => 
            array (
                'type' => 'symbol',
                'id' => 73,
                'firstvalue' => 'symbol_biohazard.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            269 => 
            array (
                'type' => 'color2',
                'id' => 73,
                'firstvalue' => 'ff98e3',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            270 => 
            array (
                'type' => 'color3',
                'id' => 73,
                'firstvalue' => 'ec7600',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            271 => 
            array (
                'type' => 'symbol',
                'id' => 74,
                'firstvalue' => 'symbol_bird.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            272 => 
            array (
                'type' => 'color2',
                'id' => 74,
                'firstvalue' => 'eb8cd1',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            273 => 
            array (
                'type' => 'color3',
                'id' => 74,
                'firstvalue' => 'd46a00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            274 => 
            array (
                'type' => 'symbol',
                'id' => 75,
                'firstvalue' => 'symbol_bishop.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            275 => 
            array (
                'type' => 'color2',
                'id' => 75,
                'firstvalue' => 'd47ebd',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            276 => 
            array (
                'type' => 'color3',
                'id' => 75,
                'firstvalue' => 'b15800',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            277 => 
            array (
                'type' => 'symbol',
                'id' => 76,
                'firstvalue' => 'symbol_coalion.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            278 => 
            array (
                'type' => 'color2',
                'id' => 76,
                'firstvalue' => 'bd71a8',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            279 => 
            array (
                'type' => 'color3',
                'id' => 76,
                'firstvalue' => '8e4700',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            280 => 
            array (
                'type' => 'symbol',
                'id' => 77,
                'firstvalue' => 'symbol_cocoamug.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            281 => 
            array (
                'type' => 'color2',
                'id' => 77,
                'firstvalue' => 'a66394',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            282 => 
            array (
                'type' => 'color3',
                'id' => 77,
                'firstvalue' => '6a3500',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            283 => 
            array (
                'type' => 'symbol',
                'id' => 78,
                'firstvalue' => 'symbol_dashflag.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            284 => 
            array (
                'type' => 'color2',
                'id' => 78,
                'firstvalue' => '8f557f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            285 => 
            array (
                'type' => 'color3',
                'id' => 78,
                'firstvalue' => '462300',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            286 => 
            array (
                'type' => 'symbol',
                'id' => 79,
                'firstvalue' => 'symbol_diamondring_part2.gif',
                'secondvalue' => 'symbol_diamondring_part1.gif',
                'enabled' => '1',
            ),
            287 => 
            array (
                'type' => 'color2',
                'id' => 79,
                'firstvalue' => '78486b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            288 => 
            array (
                'type' => 'color3',
                'id' => 79,
                'firstvalue' => 'ffd601',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            289 => 
            array (
                'type' => 'symbol',
                'id' => 80,
                'firstvalue' => 'symbol_discoball_part2.gif',
                'secondvalue' => 'symbol_discoball_part1.gif',
                'enabled' => '1',
            ),
            290 => 
            array (
                'type' => 'color2',
                'id' => 80,
                'firstvalue' => '613a56',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            291 => 
            array (
                'type' => 'color3',
                'id' => 80,
                'firstvalue' => 'e5c001',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            292 => 
            array (
                'type' => 'symbol',
                'id' => 81,
                'firstvalue' => 'symbol_dog.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            293 => 
            array (
                'type' => 'color2',
                'id' => 81,
                'firstvalue' => '4c2d44',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            294 => 
            array (
                'type' => 'color3',
                'id' => 81,
                'firstvalue' => 'bfa001',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            295 => 
            array (
                'type' => 'symbol',
                'id' => 82,
                'firstvalue' => 'symbol_electricguitarh_part2.gif',
                'secondvalue' => 'symbol_electricguitarh_part1.gif',
                'enabled' => '1',
            ),
            296 => 
            array (
                'type' => 'color2',
                'id' => 82,
                'firstvalue' => 'f334bf',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            297 => 
            array (
                'type' => 'color3',
                'id' => 82,
                'firstvalue' => '998001',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            298 => 
            array (
                'type' => 'symbol',
                'id' => 83,
                'firstvalue' => 'symbol_electricguitarv_part2.gif',
                'secondvalue' => 'symbol_electricguitarv_part1.gif',
                'enabled' => '1',
            ),
            299 => 
            array (
                'type' => 'color2',
                'id' => 83,
                'firstvalue' => 'e030b0',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            300 => 
            array (
                'type' => 'color3',
                'id' => 83,
                'firstvalue' => '736100',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            301 => 
            array (
                'type' => 'symbol',
                'id' => 84,
                'firstvalue' => 'symbol_film.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            302 => 
            array (
                'type' => 'color2',
                'id' => 84,
                'firstvalue' => 'ca2b9f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            303 => 
            array (
                'type' => 'color3',
                'id' => 84,
                'firstvalue' => '4c4000',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            304 => 
            array (
                'type' => 'symbol',
                'id' => 85,
                'firstvalue' => 'symbol_flame_part2.gif',
                'secondvalue' => 'symbol_flame_part1.gif',
                'enabled' => '1',
            ),
            305 => 
            array (
                'type' => 'color2',
                'id' => 85,
                'firstvalue' => 'b4278e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            306 => 
            array (
                'type' => 'color3',
                'id' => 85,
                'firstvalue' => 'c3aa6e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            307 => 
            array (
                'type' => 'symbol',
                'id' => 86,
                'firstvalue' => 'symbol_gamepad.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            308 => 
            array (
                'type' => 'color2',
                'id' => 86,
                'firstvalue' => '9e227c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            309 => 
            array (
                'type' => 'color3',
                'id' => 86,
                'firstvalue' => 'af9963',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            310 => 
            array (
                'type' => 'symbol',
                'id' => 87,
                'firstvalue' => 'symbol_gem1_part2.gif',
                'secondvalue' => 'symbol_gem1_part1.gif',
                'enabled' => '1',
            ),
            311 => 
            array (
                'type' => 'color2',
                'id' => 87,
                'firstvalue' => '881d6b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            312 => 
            array (
                'type' => 'color3',
                'id' => 87,
                'firstvalue' => '927f52',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            313 => 
            array (
                'type' => 'symbol',
                'id' => 88,
                'firstvalue' => 'symbol_gem2_part2.gif',
                'secondvalue' => 'symbol_gem2_part1.gif',
                'enabled' => '1',
            ),
            314 => 
            array (
                'type' => 'color2',
                'id' => 88,
                'firstvalue' => '72185a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            315 => 
            array (
                'type' => 'color3',
                'id' => 88,
                'firstvalue' => '756642',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            316 => 
            array (
                'type' => 'symbol',
                'id' => 89,
                'firstvalue' => 'symbol_gem3_part2.gif',
                'secondvalue' => 'symbol_gem3_part1.gif',
                'enabled' => '1',
            ),
            317 => 
            array (
                'type' => 'color2',
                'id' => 89,
                'firstvalue' => '5c1449',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            318 => 
            array (
                'type' => 'color3',
                'id' => 89,
                'firstvalue' => '584d32',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            319 => 
            array (
                'type' => 'symbol',
                'id' => 90,
                'firstvalue' => 'symbol_hawk.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            320 => 
            array (
                'type' => 'color2',
                'id' => 90,
                'firstvalue' => '480f39',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            321 => 
            array (
                'type' => 'color3',
                'id' => 90,
                'firstvalue' => '3a3321',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            322 => 
            array (
                'type' => 'symbol',
                'id' => 91,
                'firstvalue' => 'symbol_hearts_down.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            323 => 
            array (
                'type' => 'color2',
                'id' => 91,
                'firstvalue' => 'ff2d2d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            324 => 
            array (
                'type' => 'color3',
                'id' => 91,
                'firstvalue' => '977641',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            325 => 
            array (
                'type' => 'symbol',
                'id' => 92,
                'firstvalue' => 'symbol_hearts_up.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            326 => 
            array (
                'type' => 'color2',
                'id' => 92,
                'firstvalue' => 'eb2929',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            327 => 
            array (
                'type' => 'color3',
                'id' => 92,
                'firstvalue' => '886a3a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            328 => 
            array (
                'type' => 'symbol',
                'id' => 93,
                'firstvalue' => 'symbol_horseshoe.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            329 => 
            array (
                'type' => 'color2',
                'id' => 93,
                'firstvalue' => 'd42525',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            330 => 
            array (
                'type' => 'color3',
                'id' => 93,
                'firstvalue' => '715831',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            331 => 
            array (
                'type' => 'symbol',
                'id' => 94,
                'firstvalue' => 'symbol_inksplatter.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            332 => 
            array (
                'type' => 'color2',
                'id' => 94,
                'firstvalue' => 'bd2121',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            333 => 
            array (
                'type' => 'color3',
                'id' => 94,
                'firstvalue' => '5b4727',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            334 => 
            array (
                'type' => 'symbol',
                'id' => 95,
                'firstvalue' => 'symbol_leaf.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            335 => 
            array (
                'type' => 'color2',
                'id' => 95,
                'firstvalue' => 'a61d1d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            336 => 
            array (
                'type' => 'color3',
                'id' => 95,
                'firstvalue' => '44351d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            337 => 
            array (
                'type' => 'symbol',
                'id' => 96,
                'firstvalue' => 'symbol_micstand.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            338 => 
            array (
                'type' => 'color2',
                'id' => 96,
                'firstvalue' => '8f1919',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            339 => 
            array (
                'type' => 'color3',
                'id' => 96,
                'firstvalue' => '2d2313',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            340 => 
            array (
                'type' => 'symbol',
                'id' => 97,
                'firstvalue' => 'symbol_mirror_part2.gif',
                'secondvalue' => 'symbol_mirror_part1.gif',
                'enabled' => '1',
            ),
            341 => 
            array (
                'type' => 'color2',
                'id' => 97,
                'firstvalue' => '781515',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            342 => 
            array (
                'type' => 'color3',
                'id' => 97,
                'firstvalue' => 'c0c0c0',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            343 => 
            array (
                'type' => 'symbol',
                'id' => 98,
                'firstvalue' => 'symbol_monkeywrench.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            344 => 
            array (
                'type' => 'color2',
                'id' => 98,
                'firstvalue' => '611111',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            345 => 
            array (
                'type' => 'color3',
                'id' => 98,
                'firstvalue' => 'acacac',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            346 => 
            array (
                'type' => 'symbol',
                'id' => 99,
                'firstvalue' => 'symbol_note1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            347 => 
            array (
                'type' => 'color2',
                'id' => 99,
                'firstvalue' => '4c0d0d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            348 => 
            array (
                'type' => 'color3',
                'id' => 99,
                'firstvalue' => '909090',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            349 => 
            array (
                'type' => 'color2',
                'id' => 100,
                'firstvalue' => 'ffb579',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            350 => 
            array (
                'type' => 'color3',
                'id' => 100,
                'firstvalue' => '737373',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            351 => 
            array (
                'type' => 'color2',
                'id' => 101,
                'firstvalue' => 'eba770',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            352 => 
            array (
                'type' => 'color3',
                'id' => 101,
                'firstvalue' => '575757',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            353 => 
            array (
                'type' => 'color2',
                'id' => 102,
                'firstvalue' => 'd49665',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            354 => 
            array (
                'type' => 'color3',
                'id' => 102,
                'firstvalue' => '393939',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            355 => 
            array (
                'type' => 'color2',
                'id' => 103,
                'firstvalue' => 'bd865a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            356 => 
            array (
                'type' => 'color3',
                'id' => 103,
                'firstvalue' => '7a7a7a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            357 => 
            array (
                'type' => 'color2',
                'id' => 104,
                'firstvalue' => 'a6764f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            358 => 
            array (
                'type' => 'color3',
                'id' => 104,
                'firstvalue' => '6e6e6e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            359 => 
            array (
                'type' => 'color2',
                'id' => 105,
                'firstvalue' => '8f6644',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            360 => 
            array (
                'type' => 'color3',
                'id' => 105,
                'firstvalue' => '5b5b5b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            361 => 
            array (
                'type' => 'color2',
                'id' => 106,
                'firstvalue' => '785539',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            362 => 
            array (
                'type' => 'color3',
                'id' => 106,
                'firstvalue' => '494949',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            363 => 
            array (
                'type' => 'color2',
                'id' => 107,
                'firstvalue' => '61452e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            364 => 
            array (
                'type' => 'color3',
                'id' => 107,
                'firstvalue' => '373737',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            365 => 
            array (
                'type' => 'color2',
                'id' => 108,
                'firstvalue' => '4c3624',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            366 => 
            array (
                'type' => 'color3',
                'id' => 108,
                'firstvalue' => '242424',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            367 => 
            array (
                'type' => 'color2',
                'id' => 109,
                'firstvalue' => 'ec7600',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            368 => 
            array (
                'type' => 'color2',
                'id' => 110,
                'firstvalue' => 'd96d00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            369 => 
            array (
                'type' => 'color2',
                'id' => 111,
                'firstvalue' => 'c46200',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            370 => 
            array (
                'type' => 'color2',
                'id' => 112,
                'firstvalue' => 'af5700',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            371 => 
            array (
                'type' => 'color2',
                'id' => 113,
                'firstvalue' => '9a4d00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            372 => 
            array (
                'type' => 'color2',
                'id' => 114,
                'firstvalue' => '844200',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            373 => 
            array (
                'type' => 'color2',
                'id' => 115,
                'firstvalue' => '6f3800',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            374 => 
            array (
                'type' => 'color2',
                'id' => 116,
                'firstvalue' => '5a2d00',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            375 => 
            array (
                'type' => 'color2',
                'id' => 117,
                'firstvalue' => '462300',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            376 => 
            array (
                'type' => 'color2',
                'id' => 118,
                'firstvalue' => 'ffd601',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            377 => 
            array (
                'type' => 'color2',
                'id' => 119,
                'firstvalue' => 'ebc501',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            378 => 
            array (
                'type' => 'color2',
                'id' => 120,
                'firstvalue' => 'd4b201',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            379 => 
            array (
                'type' => 'color2',
                'id' => 121,
                'firstvalue' => 'bd9f01',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            380 => 
            array (
                'type' => 'color2',
                'id' => 122,
                'firstvalue' => 'a68b01',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            381 => 
            array (
                'type' => 'color2',
                'id' => 123,
                'firstvalue' => '8f7801',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            382 => 
            array (
                'type' => 'color2',
                'id' => 124,
                'firstvalue' => '786500',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            383 => 
            array (
                'type' => 'color2',
                'id' => 125,
                'firstvalue' => '615100',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            384 => 
            array (
                'type' => 'color2',
                'id' => 126,
                'firstvalue' => '4c4000',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            385 => 
            array (
                'type' => 'color2',
                'id' => 127,
                'firstvalue' => 'c3aa6e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            386 => 
            array (
                'type' => 'color2',
                'id' => 128,
                'firstvalue' => 'b49d65',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            387 => 
            array (
                'type' => 'color2',
                'id' => 129,
                'firstvalue' => 'a28d5b',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            388 => 
            array (
                'type' => 'color2',
                'id' => 130,
                'firstvalue' => '917e52',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            389 => 
            array (
                'type' => 'color2',
                'id' => 131,
                'firstvalue' => '7f6f48',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            390 => 
            array (
                'type' => 'color2',
                'id' => 132,
                'firstvalue' => '6d5f3e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            391 => 
            array (
                'type' => 'color2',
                'id' => 133,
                'firstvalue' => '5c5034',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            392 => 
            array (
                'type' => 'color2',
                'id' => 134,
                'firstvalue' => '4a412a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            393 => 
            array (
                'type' => 'color2',
                'id' => 135,
                'firstvalue' => '3a3321',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            394 => 
            array (
                'type' => 'color2',
                'id' => 136,
                'firstvalue' => '977641',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            395 => 
            array (
                'type' => 'color2',
                'id' => 137,
                'firstvalue' => '8b6d3c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            396 => 
            array (
                'type' => 'color2',
                'id' => 138,
                'firstvalue' => '7e6236',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            397 => 
            array (
                'type' => 'color2',
                'id' => 139,
                'firstvalue' => '705730',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            398 => 
            array (
                'type' => 'color2',
                'id' => 140,
                'firstvalue' => '624d2a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            399 => 
            array (
                'type' => 'color2',
                'id' => 141,
                'firstvalue' => '554224',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            400 => 
            array (
                'type' => 'color2',
                'id' => 142,
                'firstvalue' => '47381f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            401 => 
            array (
                'type' => 'color2',
                'id' => 143,
                'firstvalue' => '392d19',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            402 => 
            array (
                'type' => 'color2',
                'id' => 144,
                'firstvalue' => '2d2313',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            403 => 
            array (
                'type' => 'color2',
                'id' => 145,
                'firstvalue' => 'c0c0c0',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            404 => 
            array (
                'type' => 'color2',
                'id' => 146,
                'firstvalue' => 'b1b1b1',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            405 => 
            array (
                'type' => 'color2',
                'id' => 147,
                'firstvalue' => 'a0a0a0',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            406 => 
            array (
                'type' => 'color2',
                'id' => 148,
                'firstvalue' => '8e8e8e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            407 => 
            array (
                'type' => 'color2',
                'id' => 149,
                'firstvalue' => '7d7d7d',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            408 => 
            array (
                'type' => 'color2',
                'id' => 150,
                'firstvalue' => '6c6c6c',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            409 => 
            array (
                'type' => 'color2',
                'id' => 151,
                'firstvalue' => '5a5a5a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            410 => 
            array (
                'type' => 'color2',
                'id' => 152,
                'firstvalue' => '494949',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            411 => 
            array (
                'type' => 'color2',
                'id' => 153,
                'firstvalue' => '393939',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            412 => 
            array (
                'type' => 'symbol',
                'id' => 154,
                'firstvalue' => 'symbol_note2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            413 => 
            array (
                'type' => 'color2',
                'id' => 154,
                'firstvalue' => '7a7a7a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            414 => 
            array (
                'type' => 'symbol',
                'id' => 155,
                'firstvalue' => 'symbol_note3.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            415 => 
            array (
                'type' => 'color2',
                'id' => 155,
                'firstvalue' => '707070',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            416 => 
            array (
                'type' => 'symbol',
                'id' => 156,
                'firstvalue' => 'symbol_nursecross.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            417 => 
            array (
                'type' => 'color2',
                'id' => 156,
                'firstvalue' => '656565',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            418 => 
            array (
                'type' => 'symbol',
                'id' => 157,
                'firstvalue' => 'symbol_pencil_part2.gif',
                'secondvalue' => 'symbol_pencil_part1.gif',
                'enabled' => '1',
            ),
            419 => 
            array (
                'type' => 'color2',
                'id' => 157,
                'firstvalue' => '5a5a5a',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            420 => 
            array (
                'type' => 'symbol',
                'id' => 158,
                'firstvalue' => 'symbol_queen.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            421 => 
            array (
                'type' => 'color2',
                'id' => 158,
                'firstvalue' => '4f4f4f',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            422 => 
            array (
                'type' => 'symbol',
                'id' => 159,
                'firstvalue' => 'symbol_rock.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            423 => 
            array (
                'type' => 'color2',
                'id' => 159,
                'firstvalue' => '444444',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            424 => 
            array (
                'type' => 'symbol',
                'id' => 160,
                'firstvalue' => 'symbol_rook.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            425 => 
            array (
                'type' => 'color2',
                'id' => 160,
                'firstvalue' => '393939',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            426 => 
            array (
                'type' => 'symbol',
                'id' => 161,
                'firstvalue' => 'symbol_skate.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            427 => 
            array (
                'type' => 'color2',
                'id' => 161,
                'firstvalue' => '2e2e2e',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            428 => 
            array (
                'type' => 'symbol',
                'id' => 162,
                'firstvalue' => 'symbol_smallring_part2.gif',
                'secondvalue' => 'symbol_smallring_part1.gif',
                'enabled' => '1',
            ),
            429 => 
            array (
                'type' => 'color2',
                'id' => 162,
                'firstvalue' => '242424',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            430 => 
            array (
                'type' => 'symbol',
                'id' => 163,
                'firstvalue' => 'symbol_snowstorm_part2.gif',
                'secondvalue' => 'symbol_snowstorm_part1.gif',
                'enabled' => '1',
            ),
            431 => 
            array (
                'type' => 'symbol',
                'id' => 164,
                'firstvalue' => 'symbol_sphere.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            432 => 
            array (
                'type' => 'symbol',
                'id' => 165,
                'firstvalue' => 'symbol_spraycan_part2.gif',
                'secondvalue' => 'symbol_spraycan_part1.gif',
                'enabled' => '1',
            ),
            433 => 
            array (
                'type' => 'symbol',
                'id' => 166,
                'firstvalue' => 'symbol_stars1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            434 => 
            array (
                'type' => 'symbol',
                'id' => 167,
                'firstvalue' => 'symbol_stars2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            435 => 
            array (
                'type' => 'symbol',
                'id' => 168,
                'firstvalue' => 'symbol_stars3.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            436 => 
            array (
                'type' => 'symbol',
                'id' => 169,
                'firstvalue' => 'symbol_stars4.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            437 => 
            array (
                'type' => 'symbol',
                'id' => 170,
                'firstvalue' => 'symbol_stars5.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            438 => 
            array (
                'type' => 'symbol',
                'id' => 171,
                'firstvalue' => 'symbol_waterdrop_part2.gif',
                'secondvalue' => 'symbol_waterdrop_part1.gif',
                'enabled' => '1',
            ),
            439 => 
            array (
                'type' => 'symbol',
                'id' => 172,
                'firstvalue' => 'symbol_wolverine.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            440 => 
            array (
                'type' => 'symbol',
                'id' => 173,
                'firstvalue' => 'symbol_0.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            441 => 
            array (
                'type' => 'symbol',
                'id' => 174,
                'firstvalue' => 'symbol_1.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            442 => 
            array (
                'type' => 'symbol',
                'id' => 175,
                'firstvalue' => 'symbol_2.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            443 => 
            array (
                'type' => 'symbol',
                'id' => 176,
                'firstvalue' => 'symbol_3.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            444 => 
            array (
                'type' => 'symbol',
                'id' => 177,
                'firstvalue' => 'symbol_4.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            445 => 
            array (
                'type' => 'symbol',
                'id' => 178,
                'firstvalue' => 'symbol_5.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            446 => 
            array (
                'type' => 'symbol',
                'id' => 179,
                'firstvalue' => 'symbol_6.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            447 => 
            array (
                'type' => 'symbol',
                'id' => 180,
                'firstvalue' => 'symbol_7.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            448 => 
            array (
                'type' => 'symbol',
                'id' => 181,
                'firstvalue' => 'symbol_8.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            449 => 
            array (
                'type' => 'symbol',
                'id' => 182,
                'firstvalue' => 'symbol_9.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            450 => 
            array (
                'type' => 'symbol',
                'id' => 183,
                'firstvalue' => 'symbol_a.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            451 => 
            array (
                'type' => 'symbol',
                'id' => 184,
                'firstvalue' => 'symbol_b.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            452 => 
            array (
                'type' => 'symbol',
                'id' => 185,
                'firstvalue' => 'symbol_c.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            453 => 
            array (
                'type' => 'symbol',
                'id' => 186,
                'firstvalue' => 'symbol_d.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            454 => 
            array (
                'type' => 'symbol',
                'id' => 187,
                'firstvalue' => 'symbol_e.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            455 => 
            array (
                'type' => 'symbol',
                'id' => 188,
                'firstvalue' => 'symbol_f.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            456 => 
            array (
                'type' => 'symbol',
                'id' => 189,
                'firstvalue' => 'symbol_g.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            457 => 
            array (
                'type' => 'symbol',
                'id' => 190,
                'firstvalue' => 'symbol_h.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            458 => 
            array (
                'type' => 'symbol',
                'id' => 191,
                'firstvalue' => 'symbol_i.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            459 => 
            array (
                'type' => 'symbol',
                'id' => 192,
                'firstvalue' => 'symbol_j.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            460 => 
            array (
                'type' => 'symbol',
                'id' => 193,
                'firstvalue' => 'symbol_k.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            461 => 
            array (
                'type' => 'symbol',
                'id' => 194,
                'firstvalue' => 'symbol_l.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            462 => 
            array (
                'type' => 'symbol',
                'id' => 195,
                'firstvalue' => 'symbol_m.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            463 => 
            array (
                'type' => 'symbol',
                'id' => 196,
                'firstvalue' => 'symbol_n.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            464 => 
            array (
                'type' => 'symbol',
                'id' => 197,
                'firstvalue' => 'symbol_o.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            465 => 
            array (
                'type' => 'symbol',
                'id' => 198,
                'firstvalue' => 'symbol_p.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            466 => 
            array (
                'type' => 'symbol',
                'id' => 199,
                'firstvalue' => 'symbol_q.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            467 => 
            array (
                'type' => 'symbol',
                'id' => 200,
                'firstvalue' => 'symbol_r.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            468 => 
            array (
                'type' => 'symbol',
                'id' => 201,
                'firstvalue' => 'symbol_s.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            469 => 
            array (
                'type' => 'symbol',
                'id' => 202,
                'firstvalue' => 'symbol_t.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            470 => 
            array (
                'type' => 'symbol',
                'id' => 203,
                'firstvalue' => 'symbol_u.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            471 => 
            array (
                'type' => 'symbol',
                'id' => 204,
                'firstvalue' => 'symbol_v.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            472 => 
            array (
                'type' => 'symbol',
                'id' => 205,
                'firstvalue' => 'symbol_w.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            473 => 
            array (
                'type' => 'symbol',
                'id' => 206,
                'firstvalue' => 'symbol_x.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            474 => 
            array (
                'type' => 'symbol',
                'id' => 207,
                'firstvalue' => 'symbol_y.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            475 => 
            array (
                'type' => 'symbol',
                'id' => 208,
                'firstvalue' => 'symbol_z.gif',
                'secondvalue' => '',
                'enabled' => '1',
            ),
            476 => 
            array (
                'type' => 'symbol',
                'id' => 209,
                'firstvalue' => 'symbol_pixel_part2.gif',
                'secondvalue' => 'symbol_pixel_part1.gif',
                'enabled' => '1',
            ),
            477 => 
            array (
                'type' => 'symbol',
                'id' => 210,
                'firstvalue' => 'symbol_credit_part2.gif',
                'secondvalue' => 'symbol_credit_part1.gif',
                'enabled' => '1',
            ),
            478 => 
            array (
                'type' => 'symbol',
                'id' => 211,
                'firstvalue' => 'symbol_hc_part2.gif',
                'secondvalue' => 'symbol_hc_part1.gif',
                'enabled' => '1',
            ),
            479 => 
            array (
                'type' => 'symbol',
                'id' => 212,
                'firstvalue' => 'symbol_vip_part2.gif',
                'secondvalue' => 'symbol_vip_part1.gif',
                'enabled' => '1',
            ),
        ));
        
        
    }
}