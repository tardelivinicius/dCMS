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
                'enabled' => '1',
                'firstvalue' => 'base_basic_1.gif',
                'id' => 1,
                'secondvalue' => '',
                'type' => 'base',
            ),
            1 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_background_1.gif',
                'id' => 1,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            2 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffd601',
                'id' => 1,
                'secondvalue' => '',
                'type' => 'color',
            ),
            3 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffffff',
                'id' => 1,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            4 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffffff',
                'id' => 1,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            5 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_basic_2.gif',
                'id' => 2,
                'secondvalue' => '',
                'type' => 'base',
            ),
            6 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_background_2.gif',
                'id' => 2,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            7 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ec7600',
                'id' => 2,
                'secondvalue' => '',
                'type' => 'color',
            ),
            8 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ebebeb',
                'id' => 2,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            9 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'e5e5e5',
                'id' => 2,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            10 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_basic_3.gif',
                'id' => 3,
                'secondvalue' => '',
                'type' => 'base',
            ),
            11 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_background_3_part2.gif',
                'id' => 3,
                'secondvalue' => 'symbol_background_3_part1.gif',
                'type' => 'symbol',
            ),
            12 => 
            array (
                'enabled' => '1',
                'firstvalue' => '84de00',
                'id' => 3,
                'secondvalue' => '',
                'type' => 'color',
            ),
            13 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'd4d4d4',
                'id' => 3,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            14 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bfbfbf',
                'id' => 3,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            15 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_basic_4.gif',
                'id' => 4,
                'secondvalue' => '',
                'type' => 'base',
            ),
            16 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_ball_1_part2.gif',
                'id' => 4,
                'secondvalue' => 'symbol_ball_1_part1.gif',
                'type' => 'symbol',
            ),
            17 => 
            array (
                'enabled' => '1',
                'firstvalue' => '589a00',
                'id' => 4,
                'secondvalue' => '',
                'type' => 'color',
            ),
            18 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bdbdbd',
                'id' => 4,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            19 => 
            array (
                'enabled' => '1',
                'firstvalue' => '999999',
                'id' => 4,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            20 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_basic_5.gif',
                'id' => 5,
                'secondvalue' => '',
                'type' => 'base',
            ),
            21 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_ball_2_part2.gif',
                'id' => 5,
                'secondvalue' => 'symbol_ball_2_part1.gif',
                'type' => 'symbol',
            ),
            22 => 
            array (
                'enabled' => '1',
                'firstvalue' => '50c1fb',
                'id' => 5,
                'secondvalue' => '',
                'type' => 'color',
            ),
            23 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a6a6a6',
                'id' => 5,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            24 => 
            array (
                'enabled' => '1',
                'firstvalue' => '737373',
                'id' => 5,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            25 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_advanced_1.gif',
                'id' => 6,
                'secondvalue' => '',
                'type' => 'base',
            ),
            26 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bobba.gif',
                'id' => 6,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            27 => 
            array (
                'enabled' => '1',
                'firstvalue' => '006fcf',
                'id' => 6,
                'secondvalue' => '',
                'type' => 'color',
            ),
            28 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8f8f8f',
                'id' => 6,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            29 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c4c4c',
                'id' => 6,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            30 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_advanced_2.gif',
                'id' => 7,
                'secondvalue' => '',
                'type' => 'base',
            ),
            31 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bomb_part2.gif',
                'id' => 7,
                'secondvalue' => 'symbol_bomb_part1.gif',
                'type' => 'symbol',
            ),
            32 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ff98e3',
                'id' => 7,
                'secondvalue' => '',
                'type' => 'color',
            ),
            33 => 
            array (
                'enabled' => '1',
                'firstvalue' => '787878',
                'id' => 7,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            34 => 
            array (
                'enabled' => '1',
                'firstvalue' => '589a00',
                'id' => 7,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            35 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_advanced_3.gif',
                'id' => 8,
                'secondvalue' => '',
                'type' => 'base',
            ),
            36 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bow.gif',
                'id' => 8,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            37 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'f334bf',
                'id' => 8,
                'secondvalue' => '',
                'type' => 'color',
            ),
            38 => 
            array (
                'enabled' => '1',
                'firstvalue' => '616161',
                'id' => 8,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            39 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4f8a00',
                'id' => 8,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            40 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_advanced_4.gif',
                'id' => 9,
                'secondvalue' => '',
                'type' => 'base',
            ),
            41 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_box_1.gif',
                'id' => 9,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            42 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ff2d2d',
                'id' => 9,
                'secondvalue' => '',
                'type' => 'color',
            ),
            43 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c4c4c',
                'id' => 9,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            44 => 
            array (
                'enabled' => '1',
                'firstvalue' => '427300',
                'id' => 9,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            45 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_gold_1_part2.gif',
                'id' => 10,
                'secondvalue' => 'base_gold_1_part1.gif',
                'type' => 'base',
            ),
            46 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_box_2.gif',
                'id' => 10,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            47 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'af0a0a',
                'id' => 10,
                'secondvalue' => '',
                'type' => 'color',
            ),
            48 => 
            array (
                'enabled' => '1',
                'firstvalue' => '589a00',
                'id' => 10,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            49 => 
            array (
                'enabled' => '1',
                'firstvalue' => '355c00',
                'id' => 10,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            50 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_gold_2_part2.gif',
                'id' => 11,
                'secondvalue' => 'base_gold_2_part1.gif',
                'type' => 'base',
            ),
            51 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bunting_1.gif',
                'id' => 11,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            52 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffffff',
                'id' => 11,
                'secondvalue' => '',
                'type' => 'color',
            ),
            53 => 
            array (
                'enabled' => '1',
                'firstvalue' => '518e00',
                'id' => 11,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            54 => 
            array (
                'enabled' => '1',
                'firstvalue' => '284500',
                'id' => 11,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            55 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_pin_part2.gif',
                'id' => 12,
                'secondvalue' => 'base_pin_part1.gif',
                'type' => 'base',
            ),
            56 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bunting_2.gif',
                'id' => 12,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            57 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c0c0c0',
                'id' => 12,
                'secondvalue' => '',
                'type' => 'color',
            ),
            58 => 
            array (
                'enabled' => '1',
                'firstvalue' => '498000',
                'id' => 12,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            59 => 
            array (
                'enabled' => '1',
                'firstvalue' => '1a2e00',
                'id' => 12,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            60 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_gradient_1.gif',
                'id' => 13,
                'secondvalue' => '',
                'type' => 'base',
            ),
            61 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_butterfly_part2.gif',
                'id' => 13,
                'secondvalue' => 'symbol_butterfly_part1.gif',
                'type' => 'symbol',
            ),
            62 => 
            array (
                'enabled' => '1',
                'firstvalue' => '373737',
                'id' => 13,
                'secondvalue' => '',
                'type' => 'color',
            ),
            63 => 
            array (
                'enabled' => '1',
                'firstvalue' => '417200',
                'id' => 13,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            64 => 
            array (
                'enabled' => '1',
                'firstvalue' => '84de00',
                'id' => 13,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            65 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_gradient_2.gif',
                'id' => 14,
                'secondvalue' => '',
                'type' => 'base',
            ),
            66 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_cowskull_part2.gif',
                'id' => 14,
                'secondvalue' => 'symbol_cowskull_part1.gif',
                'type' => 'symbol',
            ),
            67 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'fbe7ac',
                'id' => 14,
                'secondvalue' => '',
                'type' => 'color',
            ),
            68 => 
            array (
                'enabled' => '1',
                'firstvalue' => '396400',
                'id' => 14,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            69 => 
            array (
                'enabled' => '1',
                'firstvalue' => '77c700',
                'id' => 14,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            70 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_circles_1.gif',
                'id' => 15,
                'secondvalue' => '',
                'type' => 'base',
            ),
            71 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_cross.gif',
                'id' => 15,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            72 => 
            array (
                'enabled' => '1',
                'firstvalue' => '977641',
                'id' => 15,
                'secondvalue' => '',
                'type' => 'color',
            ),
            73 => 
            array (
                'enabled' => '1',
                'firstvalue' => '315600',
                'id' => 15,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            74 => 
            array (
                'enabled' => '1',
                'firstvalue' => '63a600',
                'id' => 15,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            75 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_circles_2.gif',
                'id' => 16,
                'secondvalue' => '',
                'type' => 'base',
            ),
            76 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_diamond.gif',
                'id' => 16,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            77 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c2eaff',
                'id' => 16,
                'secondvalue' => '',
                'type' => 'color',
            ),
            78 => 
            array (
                'enabled' => '1',
                'firstvalue' => '294800',
                'id' => 16,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            79 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4f8500',
                'id' => 16,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            80 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_ornament_1_part2.gif',
                'id' => 17,
                'secondvalue' => 'base_ornament_1_part1.gif',
                'type' => 'base',
            ),
            81 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_diploma_part2.gif',
                'id' => 17,
                'secondvalue' => 'symbol_diploma_part1.gif',
                'type' => 'symbol',
            ),
            82 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'fff165',
                'id' => 17,
                'secondvalue' => '',
                'type' => 'color',
            ),
            83 => 
            array (
                'enabled' => '1',
                'firstvalue' => '213b00',
                'id' => 17,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            84 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3c6400',
                'id' => 17,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            85 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_ornament_2_part2.gif',
                'id' => 18,
                'secondvalue' => 'base_ornament_2_part1.gif',
                'type' => 'base',
            ),
            86 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_eyeball_part2.gif',
                'id' => 18,
                'secondvalue' => 'symbol_eyeball_part1.gif',
                'type' => 'symbol',
            ),
            87 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'aaff7d',
                'id' => 18,
                'secondvalue' => '',
                'type' => 'color',
            ),
            88 => 
            array (
                'enabled' => '1',
                'firstvalue' => '1a2e00',
                'id' => 18,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            89 => 
            array (
                'enabled' => '1',
                'firstvalue' => '274200',
                'id' => 18,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            90 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_misc_1_part2.gif',
                'id' => 19,
                'secondvalue' => 'base_misc_1_part1.gif',
                'type' => 'base',
            ),
            91 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_fist.gif',
                'id' => 19,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            92 => 
            array (
                'enabled' => '1',
                'firstvalue' => '87e6c8',
                'id' => 19,
                'secondvalue' => '',
                'type' => 'color',
            ),
            93 => 
            array (
                'enabled' => '1',
                'firstvalue' => '84de00',
                'id' => 19,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            94 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c2eaff',
                'id' => 19,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            95 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_misc_2.gif',
                'id' => 20,
                'secondvalue' => '',
                'type' => 'base',
            ),
            96 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flame_1.gif',
                'id' => 20,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            97 => 
            array (
                'enabled' => '1',
                'firstvalue' => '9844e7',
                'id' => 20,
                'secondvalue' => '',
                'type' => 'color',
            ),
            98 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7acd00',
                'id' => 20,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            99 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'aed2e5',
                'id' => 20,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            100 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_beams_part2.gif',
                'id' => 21,
                'secondvalue' => 'base_beams_part1.gif',
                'type' => 'base',
            ),
            101 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flame_2.gif',
                'id' => 21,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            102 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'dea9ff',
                'id' => 21,
                'secondvalue' => '',
                'type' => 'color',
            ),
            103 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6eb900',
                'id' => 21,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            104 => 
            array (
                'enabled' => '1',
                'firstvalue' => '91afbf',
                'id' => 21,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            105 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_ring.gif',
                'id' => 22,
                'secondvalue' => '',
                'type' => 'base',
            ),
            106 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flash.gif',
                'id' => 22,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            107 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffb579',
                'id' => 22,
                'secondvalue' => '',
                'type' => 'color',
            ),
            108 => 
            array (
                'enabled' => '1',
                'firstvalue' => '62a500',
                'id' => 22,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            109 => 
            array (
                'enabled' => '1',
                'firstvalue' => '748c99',
                'id' => 22,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            110 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_simplestar_part2.gif',
                'id' => 23,
                'secondvalue' => 'base_simplestar_part1.gif',
                'type' => 'base',
            ),
            111 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flower_1_part2.gif',
                'id' => 23,
                'secondvalue' => 'symbol_flower_1_part1.gif',
                'type' => 'symbol',
            ),
            112 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c3aa6e',
                'id' => 23,
                'secondvalue' => '',
                'type' => 'color',
            ),
            113 => 
            array (
                'enabled' => '1',
                'firstvalue' => '569100',
                'id' => 23,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            114 => 
            array (
                'enabled' => '1',
                'firstvalue' => '576a73',
                'id' => 23,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            115 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_spiral.gif',
                'id' => 24,
                'secondvalue' => '',
                'type' => 'base',
            ),
            116 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flower_2.gif',
                'id' => 24,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            117 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7a7a7a',
                'id' => 24,
                'secondvalue' => '',
                'type' => 'color',
            ),
            118 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4a7c00',
                'id' => 24,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            119 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3a464c',
                'id' => 24,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            120 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_book.gif',
                'id' => 25,
                'secondvalue' => '',
                'type' => 'base',
            ),
            121 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flower_3.gif',
                'id' => 25,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            122 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3e6800',
                'id' => 25,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            123 => 
            array (
                'enabled' => '1',
                'firstvalue' => '50c1fb',
                'id' => 25,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            124 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_egg.gif',
                'id' => 26,
                'secondvalue' => '',
                'type' => 'base',
            ),
            125 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flower_4.gif',
                'id' => 26,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            126 => 
            array (
                'enabled' => '1',
                'firstvalue' => '325400',
                'id' => 26,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            127 => 
            array (
                'enabled' => '1',
                'firstvalue' => '48ade1',
                'id' => 26,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            128 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_ornament.gif',
                'id' => 27,
                'secondvalue' => '',
                'type' => 'base',
            ),
            129 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_football.gif',
                'id' => 27,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            130 => 
            array (
                'enabled' => '1',
                'firstvalue' => '274200',
                'id' => 27,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            131 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3c91bc',
                'id' => 27,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            132 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'base_shield_part2.gif',
                'id' => 28,
                'secondvalue' => 'base_shield_part1.gif',
                'type' => 'base',
            ),
            133 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_heart_1_part2.gif',
                'id' => 28,
                'secondvalue' => 'symbol_heart_1_part1.gif',
                'type' => 'symbol',
            ),
            134 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c2eaff',
                'id' => 28,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            135 => 
            array (
                'enabled' => '1',
                'firstvalue' => '307497',
                'id' => 28,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            136 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_heart_2_part2.gif',
                'id' => 29,
                'secondvalue' => 'symbol_heart_2_part1.gif',
                'type' => 'symbol',
            ),
            137 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'b3d8eb',
                'id' => 29,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            138 => 
            array (
                'enabled' => '1',
                'firstvalue' => '245771',
                'id' => 29,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            139 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_jingjang_part2.gif',
                'id' => 30,
                'secondvalue' => 'symbol_jingjang_part1.gif',
                'type' => 'symbol',
            ),
            140 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a1c3d4',
                'id' => 30,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            141 => 
            array (
                'enabled' => '1',
                'firstvalue' => '183a4b',
                'id' => 30,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            142 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_lips_part2.gif',
                'id' => 31,
                'secondvalue' => 'symbol_lips_part1.gif',
                'type' => 'symbol',
            ),
            143 => 
            array (
                'enabled' => '1',
                'firstvalue' => '90adbd',
                'id' => 31,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            144 => 
            array (
                'enabled' => '1',
                'firstvalue' => '006fcf',
                'id' => 31,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            145 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_note.gif',
                'id' => 32,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            146 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7e98a6',
                'id' => 32,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            147 => 
            array (
                'enabled' => '1',
                'firstvalue' => '0064ba',
                'id' => 32,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            148 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_peace.gif',
                'id' => 33,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            149 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6d838f',
                'id' => 33,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            150 => 
            array (
                'enabled' => '1',
                'firstvalue' => '00539b',
                'id' => 33,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            151 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_planet_part2.gif',
                'id' => 34,
                'secondvalue' => 'symbol_planet_part1.gif',
                'type' => 'symbol',
            ),
            152 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5b6e78',
                'id' => 34,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            153 => 
            array (
                'enabled' => '1',
                'firstvalue' => '00437c',
                'id' => 34,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            154 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_rainbow_part2.gif',
                'id' => 35,
                'secondvalue' => 'symbol_rainbow_part1.gif',
                'type' => 'symbol',
            ),
            155 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4a5961',
                'id' => 35,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            156 => 
            array (
                'enabled' => '1',
                'firstvalue' => '00325d',
                'id' => 35,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            157 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_rosete.gif',
                'id' => 36,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            158 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3a464c',
                'id' => 36,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            159 => 
            array (
                'enabled' => '1',
                'firstvalue' => '00213e',
                'id' => 36,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            160 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_shape.gif',
                'id' => 37,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            161 => 
            array (
                'enabled' => '1',
                'firstvalue' => '50c1fb',
                'id' => 37,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            162 => 
            array (
                'enabled' => '1',
                'firstvalue' => '9844e7',
                'id' => 37,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            163 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_star_1.gif',
                'id' => 38,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            164 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4ab2e7',
                'id' => 38,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            165 => 
            array (
                'enabled' => '1',
                'firstvalue' => '893dcf',
                'id' => 38,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            166 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_star_2.gif',
                'id' => 39,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            167 => 
            array (
                'enabled' => '1',
                'firstvalue' => '43a0d1',
                'id' => 39,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            168 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7233ad',
                'id' => 39,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            169 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_sword_1_part2.gif',
                'id' => 40,
                'secondvalue' => 'symbol_sword_1_part1.gif',
                'type' => 'symbol',
            ),
            170 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3b8fba',
                'id' => 40,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            171 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5b298b',
                'id' => 40,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            172 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_sword_2_part2.gif',
                'id' => 41,
                'secondvalue' => 'symbol_sword_2_part1.gif',
                'type' => 'symbol',
            ),
            173 => 
            array (
                'enabled' => '1',
                'firstvalue' => '347ea3',
                'id' => 41,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            174 => 
            array (
                'enabled' => '1',
                'firstvalue' => '451f68',
                'id' => 41,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            175 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_sword_3_part2.gif',
                'id' => 42,
                'secondvalue' => 'symbol_sword_3_part1.gif',
                'type' => 'symbol',
            ),
            176 => 
            array (
                'enabled' => '1',
                'firstvalue' => '2d6c8d',
                'id' => 42,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            177 => 
            array (
                'enabled' => '1',
                'firstvalue' => '2d1445',
                'id' => 42,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            178 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_wings_1.gif',
                'id' => 43,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            179 => 
            array (
                'enabled' => '1',
                'firstvalue' => '265b76',
                'id' => 43,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            180 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'dea9ff',
                'id' => 43,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            181 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_wings_2.gif',
                'id' => 44,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            182 => 
            array (
                'enabled' => '1',
                'firstvalue' => '1e495f',
                'id' => 44,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            183 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c798e5',
                'id' => 44,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            184 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_arrow_down.gif',
                'id' => 45,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            185 => 
            array (
                'enabled' => '1',
                'firstvalue' => '183a4b',
                'id' => 45,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            186 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a67fbf',
                'id' => 45,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            187 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_arrow_left.gif',
                'id' => 46,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            188 => 
            array (
                'enabled' => '1',
                'firstvalue' => '006fcf',
                'id' => 46,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            189 => 
            array (
                'enabled' => '1',
                'firstvalue' => '856599',
                'id' => 46,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            190 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_arrow_right.gif',
                'id' => 47,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            191 => 
            array (
                'enabled' => '1',
                'firstvalue' => '0066bf',
                'id' => 47,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            192 => 
            array (
                'enabled' => '1',
                'firstvalue' => '644c73',
                'id' => 47,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            193 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_arrow_up.gif',
                'id' => 48,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            194 => 
            array (
                'enabled' => '1',
                'firstvalue' => '005cac',
                'id' => 48,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            195 => 
            array (
                'enabled' => '1',
                'firstvalue' => '42324c',
                'id' => 48,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            196 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_arrowbig_up.gif',
                'id' => 49,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            197 => 
            array (
                'enabled' => '1',
                'firstvalue' => '005299',
                'id' => 49,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            198 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ff98e3',
                'id' => 49,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            199 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_axe_part2.gif',
                'id' => 50,
                'secondvalue' => 'symbol_axe_part1.gif',
                'type' => 'symbol',
            ),
            200 => 
            array (
                'enabled' => '1',
                'firstvalue' => '004887',
                'id' => 50,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            201 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'e589cc',
                'id' => 50,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            202 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bug_part2.gif',
                'id' => 51,
                'secondvalue' => 'symbol_bug_part1.gif',
                'type' => 'symbol',
            ),
            203 => 
            array (
                'enabled' => '1',
                'firstvalue' => '003e74',
                'id' => 51,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            204 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bf72aa',
                'id' => 51,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            205 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_capsbig_part2.gif',
                'id' => 52,
                'secondvalue' => 'symbol_capsbig_part1.gif',
                'type' => 'symbol',
            ),
            206 => 
            array (
                'enabled' => '1',
                'firstvalue' => '003461',
                'id' => 52,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            207 => 
            array (
                'enabled' => '1',
                'firstvalue' => '995b88',
                'id' => 52,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            208 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_capssmall_part2.gif',
                'id' => 53,
                'secondvalue' => 'symbol_capssmall_part1.gif',
                'type' => 'symbol',
            ),
            209 => 
            array (
                'enabled' => '1',
                'firstvalue' => '002a4f',
                'id' => 53,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            210 => 
            array (
                'enabled' => '1',
                'firstvalue' => '734566',
                'id' => 53,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            211 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_cloud.gif',
                'id' => 54,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            212 => 
            array (
                'enabled' => '1',
                'firstvalue' => '00213e',
                'id' => 54,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            213 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c2d44',
                'id' => 54,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            214 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_crown_part2.gif',
                'id' => 55,
                'secondvalue' => 'symbol_crown_part1.gif',
                'type' => 'symbol',
            ),
            215 => 
            array (
                'enabled' => '1',
                'firstvalue' => '9844e7',
                'id' => 55,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            216 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'f334bf',
                'id' => 55,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            217 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_diamsmall2.gif',
                'id' => 56,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            218 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8c3fd5',
                'id' => 56,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            219 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'da2fac',
                'id' => 56,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            220 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_diamsmall.gif',
                'id' => 57,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            221 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7e39c0',
                'id' => 57,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            222 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'b6278f',
                'id' => 57,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            223 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_drop.gif',
                'id' => 58,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            224 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7132ab',
                'id' => 58,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            225 => 
            array (
                'enabled' => '1',
                'firstvalue' => '921f73',
                'id' => 58,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            226 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_fingersheavy.gif',
                'id' => 59,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            227 => 
            array (
                'enabled' => '1',
                'firstvalue' => '632c96',
                'id' => 59,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            228 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6e1756',
                'id' => 59,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            229 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_fingersv.gif',
                'id' => 60,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            230 => 
            array (
                'enabled' => '1',
                'firstvalue' => '552682',
                'id' => 60,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            231 => 
            array (
                'enabled' => '1',
                'firstvalue' => '480f39',
                'id' => 60,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            232 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_gtr_part2.gif',
                'id' => 61,
                'secondvalue' => 'symbol_gtr_part1.gif',
                'type' => 'symbol',
            ),
            233 => 
            array (
                'enabled' => '1',
                'firstvalue' => '48206d',
                'id' => 61,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            234 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ff2d2d',
                'id' => 61,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            235 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_hat.gif',
                'id' => 62,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            236 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3a1a58',
                'id' => 62,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            237 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'e52828',
                'id' => 62,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            238 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_oval_part2.gif',
                'id' => 63,
                'secondvalue' => 'symbol_oval_part1.gif',
                'type' => 'symbol',
            ),
            239 => 
            array (
                'enabled' => '1',
                'firstvalue' => '2d1445',
                'id' => 63,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            240 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bf2222',
                'id' => 63,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            241 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_pawprint.gif',
                'id' => 64,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            242 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'dea9ff',
                'id' => 64,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            243 => 
            array (
                'enabled' => '1',
                'firstvalue' => '991b1b',
                'id' => 64,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            244 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_screw.gif',
                'id' => 65,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            245 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'cd9ceb',
                'id' => 65,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            246 => 
            array (
                'enabled' => '1',
                'firstvalue' => '731414',
                'id' => 65,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            247 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_stickL_part2.gif',
                'id' => 66,
                'secondvalue' => 'symbol_stickL_part1.gif',
                'type' => 'symbol',
            ),
            248 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'b98dd4',
                'id' => 66,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            249 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c0d0d',
                'id' => 66,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            250 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_stickR_part2.gif',
                'id' => 67,
                'secondvalue' => 'symbol_stickR_part1.gif',
                'type' => 'symbol',
            ),
            251 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a57dbd',
                'id' => 67,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            252 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffb579',
                'id' => 67,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            253 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_alligator.gif',
                'id' => 68,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            254 => 
            array (
                'enabled' => '1',
                'firstvalue' => '916ea6',
                'id' => 68,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            255 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'e5a36d',
                'id' => 68,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            256 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_americanfootball_part2.gif',
                'id' => 69,
                'secondvalue' => 'symbol_americanfootball_part1.gif',
                'type' => 'symbol',
            ),
            257 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7c5f8f',
                'id' => 69,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            258 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bf885b',
                'id' => 69,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            259 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_award_part2.gif',
                'id' => 70,
                'secondvalue' => 'symbol_award_part1.gif',
                'type' => 'symbol',
            ),
            260 => 
            array (
                'enabled' => '1',
                'firstvalue' => '685078',
                'id' => 70,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            261 => 
            array (
                'enabled' => '1',
                'firstvalue' => '996d49',
                'id' => 70,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            262 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bananapeel.gif',
                'id' => 71,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            263 => 
            array (
                'enabled' => '1',
                'firstvalue' => '544061',
                'id' => 71,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            264 => 
            array (
                'enabled' => '1',
                'firstvalue' => '735237',
                'id' => 71,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            265 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_battleball.gif',
                'id' => 72,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            266 => 
            array (
                'enabled' => '1',
                'firstvalue' => '42324c',
                'id' => 72,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            267 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c3624',
                'id' => 72,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            268 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_biohazard.gif',
                'id' => 73,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            269 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ff98e3',
                'id' => 73,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            270 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ec7600',
                'id' => 73,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            271 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bird.gif',
                'id' => 74,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            272 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'eb8cd1',
                'id' => 74,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            273 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'd46a00',
                'id' => 74,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            274 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_bishop.gif',
                'id' => 75,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            275 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'd47ebd',
                'id' => 75,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            276 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'b15800',
                'id' => 75,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            277 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_coalion.gif',
                'id' => 76,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            278 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bd71a8',
                'id' => 76,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            279 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8e4700',
                'id' => 76,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            280 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_cocoamug.gif',
                'id' => 77,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            281 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a66394',
                'id' => 77,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            282 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6a3500',
                'id' => 77,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            283 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_dashflag.gif',
                'id' => 78,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            284 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8f557f',
                'id' => 78,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            285 => 
            array (
                'enabled' => '1',
                'firstvalue' => '462300',
                'id' => 78,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            286 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_diamondring_part2.gif',
                'id' => 79,
                'secondvalue' => 'symbol_diamondring_part1.gif',
                'type' => 'symbol',
            ),
            287 => 
            array (
                'enabled' => '1',
                'firstvalue' => '78486b',
                'id' => 79,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            288 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffd601',
                'id' => 79,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            289 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_discoball_part2.gif',
                'id' => 80,
                'secondvalue' => 'symbol_discoball_part1.gif',
                'type' => 'symbol',
            ),
            290 => 
            array (
                'enabled' => '1',
                'firstvalue' => '613a56',
                'id' => 80,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            291 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'e5c001',
                'id' => 80,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            292 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_dog.gif',
                'id' => 81,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            293 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c2d44',
                'id' => 81,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            294 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bfa001',
                'id' => 81,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            295 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_electricguitarh_part2.gif',
                'id' => 82,
                'secondvalue' => 'symbol_electricguitarh_part1.gif',
                'type' => 'symbol',
            ),
            296 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'f334bf',
                'id' => 82,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            297 => 
            array (
                'enabled' => '1',
                'firstvalue' => '998001',
                'id' => 82,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            298 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_electricguitarv_part2.gif',
                'id' => 83,
                'secondvalue' => 'symbol_electricguitarv_part1.gif',
                'type' => 'symbol',
            ),
            299 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'e030b0',
                'id' => 83,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            300 => 
            array (
                'enabled' => '1',
                'firstvalue' => '736100',
                'id' => 83,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            301 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_film.gif',
                'id' => 84,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            302 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ca2b9f',
                'id' => 84,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            303 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c4000',
                'id' => 84,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            304 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_flame_part2.gif',
                'id' => 85,
                'secondvalue' => 'symbol_flame_part1.gif',
                'type' => 'symbol',
            ),
            305 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'b4278e',
                'id' => 85,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            306 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c3aa6e',
                'id' => 85,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            307 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_gamepad.gif',
                'id' => 86,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            308 => 
            array (
                'enabled' => '1',
                'firstvalue' => '9e227c',
                'id' => 86,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            309 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'af9963',
                'id' => 86,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            310 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_gem1_part2.gif',
                'id' => 87,
                'secondvalue' => 'symbol_gem1_part1.gif',
                'type' => 'symbol',
            ),
            311 => 
            array (
                'enabled' => '1',
                'firstvalue' => '881d6b',
                'id' => 87,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            312 => 
            array (
                'enabled' => '1',
                'firstvalue' => '927f52',
                'id' => 87,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            313 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_gem2_part2.gif',
                'id' => 88,
                'secondvalue' => 'symbol_gem2_part1.gif',
                'type' => 'symbol',
            ),
            314 => 
            array (
                'enabled' => '1',
                'firstvalue' => '72185a',
                'id' => 88,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            315 => 
            array (
                'enabled' => '1',
                'firstvalue' => '756642',
                'id' => 88,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            316 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_gem3_part2.gif',
                'id' => 89,
                'secondvalue' => 'symbol_gem3_part1.gif',
                'type' => 'symbol',
            ),
            317 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5c1449',
                'id' => 89,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            318 => 
            array (
                'enabled' => '1',
                'firstvalue' => '584d32',
                'id' => 89,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            319 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_hawk.gif',
                'id' => 90,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            320 => 
            array (
                'enabled' => '1',
                'firstvalue' => '480f39',
                'id' => 90,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            321 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3a3321',
                'id' => 90,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            322 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_hearts_down.gif',
                'id' => 91,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            323 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ff2d2d',
                'id' => 91,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            324 => 
            array (
                'enabled' => '1',
                'firstvalue' => '977641',
                'id' => 91,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            325 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_hearts_up.gif',
                'id' => 92,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            326 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'eb2929',
                'id' => 92,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            327 => 
            array (
                'enabled' => '1',
                'firstvalue' => '886a3a',
                'id' => 92,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            328 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_horseshoe.gif',
                'id' => 93,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            329 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'd42525',
                'id' => 93,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            330 => 
            array (
                'enabled' => '1',
                'firstvalue' => '715831',
                'id' => 93,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            331 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_inksplatter.gif',
                'id' => 94,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            332 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bd2121',
                'id' => 94,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            333 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5b4727',
                'id' => 94,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            334 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_leaf.gif',
                'id' => 95,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            335 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a61d1d',
                'id' => 95,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            336 => 
            array (
                'enabled' => '1',
                'firstvalue' => '44351d',
                'id' => 95,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            337 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_micstand.gif',
                'id' => 96,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            338 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8f1919',
                'id' => 96,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            339 => 
            array (
                'enabled' => '1',
                'firstvalue' => '2d2313',
                'id' => 96,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            340 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_mirror_part2.gif',
                'id' => 97,
                'secondvalue' => 'symbol_mirror_part1.gif',
                'type' => 'symbol',
            ),
            341 => 
            array (
                'enabled' => '1',
                'firstvalue' => '781515',
                'id' => 97,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            342 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c0c0c0',
                'id' => 97,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            343 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_monkeywrench.gif',
                'id' => 98,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            344 => 
            array (
                'enabled' => '1',
                'firstvalue' => '611111',
                'id' => 98,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            345 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'acacac',
                'id' => 98,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            346 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_note1.gif',
                'id' => 99,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            347 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c0d0d',
                'id' => 99,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            348 => 
            array (
                'enabled' => '1',
                'firstvalue' => '909090',
                'id' => 99,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            349 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffb579',
                'id' => 100,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            350 => 
            array (
                'enabled' => '1',
                'firstvalue' => '737373',
                'id' => 100,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            351 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'eba770',
                'id' => 101,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            352 => 
            array (
                'enabled' => '1',
                'firstvalue' => '575757',
                'id' => 101,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            353 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'd49665',
                'id' => 102,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            354 => 
            array (
                'enabled' => '1',
                'firstvalue' => '393939',
                'id' => 102,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            355 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bd865a',
                'id' => 103,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            356 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7a7a7a',
                'id' => 103,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            357 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a6764f',
                'id' => 104,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            358 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6e6e6e',
                'id' => 104,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            359 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8f6644',
                'id' => 105,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            360 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5b5b5b',
                'id' => 105,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            361 => 
            array (
                'enabled' => '1',
                'firstvalue' => '785539',
                'id' => 106,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            362 => 
            array (
                'enabled' => '1',
                'firstvalue' => '494949',
                'id' => 106,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            363 => 
            array (
                'enabled' => '1',
                'firstvalue' => '61452e',
                'id' => 107,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            364 => 
            array (
                'enabled' => '1',
                'firstvalue' => '373737',
                'id' => 107,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            365 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c3624',
                'id' => 108,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            366 => 
            array (
                'enabled' => '1',
                'firstvalue' => '242424',
                'id' => 108,
                'secondvalue' => '',
                'type' => 'color3',
            ),
            367 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ec7600',
                'id' => 109,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            368 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'd96d00',
                'id' => 110,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            369 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c46200',
                'id' => 111,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            370 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'af5700',
                'id' => 112,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            371 => 
            array (
                'enabled' => '1',
                'firstvalue' => '9a4d00',
                'id' => 113,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            372 => 
            array (
                'enabled' => '1',
                'firstvalue' => '844200',
                'id' => 114,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            373 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6f3800',
                'id' => 115,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            374 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5a2d00',
                'id' => 116,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            375 => 
            array (
                'enabled' => '1',
                'firstvalue' => '462300',
                'id' => 117,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            376 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ffd601',
                'id' => 118,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            377 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'ebc501',
                'id' => 119,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            378 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'd4b201',
                'id' => 120,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            379 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'bd9f01',
                'id' => 121,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            380 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a68b01',
                'id' => 122,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            381 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8f7801',
                'id' => 123,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            382 => 
            array (
                'enabled' => '1',
                'firstvalue' => '786500',
                'id' => 124,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            383 => 
            array (
                'enabled' => '1',
                'firstvalue' => '615100',
                'id' => 125,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            384 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4c4000',
                'id' => 126,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            385 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c3aa6e',
                'id' => 127,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            386 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'b49d65',
                'id' => 128,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            387 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a28d5b',
                'id' => 129,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            388 => 
            array (
                'enabled' => '1',
                'firstvalue' => '917e52',
                'id' => 130,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            389 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7f6f48',
                'id' => 131,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            390 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6d5f3e',
                'id' => 132,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            391 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5c5034',
                'id' => 133,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            392 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4a412a',
                'id' => 134,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            393 => 
            array (
                'enabled' => '1',
                'firstvalue' => '3a3321',
                'id' => 135,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            394 => 
            array (
                'enabled' => '1',
                'firstvalue' => '977641',
                'id' => 136,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            395 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8b6d3c',
                'id' => 137,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            396 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7e6236',
                'id' => 138,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            397 => 
            array (
                'enabled' => '1',
                'firstvalue' => '705730',
                'id' => 139,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            398 => 
            array (
                'enabled' => '1',
                'firstvalue' => '624d2a',
                'id' => 140,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            399 => 
            array (
                'enabled' => '1',
                'firstvalue' => '554224',
                'id' => 141,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            400 => 
            array (
                'enabled' => '1',
                'firstvalue' => '47381f',
                'id' => 142,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            401 => 
            array (
                'enabled' => '1',
                'firstvalue' => '392d19',
                'id' => 143,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            402 => 
            array (
                'enabled' => '1',
                'firstvalue' => '2d2313',
                'id' => 144,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            403 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'c0c0c0',
                'id' => 145,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            404 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'b1b1b1',
                'id' => 146,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            405 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'a0a0a0',
                'id' => 147,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            406 => 
            array (
                'enabled' => '1',
                'firstvalue' => '8e8e8e',
                'id' => 148,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            407 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7d7d7d',
                'id' => 149,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            408 => 
            array (
                'enabled' => '1',
                'firstvalue' => '6c6c6c',
                'id' => 150,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            409 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5a5a5a',
                'id' => 151,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            410 => 
            array (
                'enabled' => '1',
                'firstvalue' => '494949',
                'id' => 152,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            411 => 
            array (
                'enabled' => '1',
                'firstvalue' => '393939',
                'id' => 153,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            412 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_note2.gif',
                'id' => 154,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            413 => 
            array (
                'enabled' => '1',
                'firstvalue' => '7a7a7a',
                'id' => 154,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            414 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_note3.gif',
                'id' => 155,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            415 => 
            array (
                'enabled' => '1',
                'firstvalue' => '707070',
                'id' => 155,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            416 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_nursecross.gif',
                'id' => 156,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            417 => 
            array (
                'enabled' => '1',
                'firstvalue' => '656565',
                'id' => 156,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            418 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_pencil_part2.gif',
                'id' => 157,
                'secondvalue' => 'symbol_pencil_part1.gif',
                'type' => 'symbol',
            ),
            419 => 
            array (
                'enabled' => '1',
                'firstvalue' => '5a5a5a',
                'id' => 157,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            420 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_queen.gif',
                'id' => 158,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            421 => 
            array (
                'enabled' => '1',
                'firstvalue' => '4f4f4f',
                'id' => 158,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            422 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_rock.gif',
                'id' => 159,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            423 => 
            array (
                'enabled' => '1',
                'firstvalue' => '444444',
                'id' => 159,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            424 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_rook.gif',
                'id' => 160,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            425 => 
            array (
                'enabled' => '1',
                'firstvalue' => '393939',
                'id' => 160,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            426 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_skate.gif',
                'id' => 161,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            427 => 
            array (
                'enabled' => '1',
                'firstvalue' => '2e2e2e',
                'id' => 161,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            428 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_smallring_part2.gif',
                'id' => 162,
                'secondvalue' => 'symbol_smallring_part1.gif',
                'type' => 'symbol',
            ),
            429 => 
            array (
                'enabled' => '1',
                'firstvalue' => '242424',
                'id' => 162,
                'secondvalue' => '',
                'type' => 'color2',
            ),
            430 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_snowstorm_part2.gif',
                'id' => 163,
                'secondvalue' => 'symbol_snowstorm_part1.gif',
                'type' => 'symbol',
            ),
            431 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_sphere.gif',
                'id' => 164,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            432 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_spraycan_part2.gif',
                'id' => 165,
                'secondvalue' => 'symbol_spraycan_part1.gif',
                'type' => 'symbol',
            ),
            433 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_stars1.gif',
                'id' => 166,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            434 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_stars2.gif',
                'id' => 167,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            435 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_stars3.gif',
                'id' => 168,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            436 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_stars4.gif',
                'id' => 169,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            437 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_stars5.gif',
                'id' => 170,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            438 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_waterdrop_part2.gif',
                'id' => 171,
                'secondvalue' => 'symbol_waterdrop_part1.gif',
                'type' => 'symbol',
            ),
            439 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_wolverine.gif',
                'id' => 172,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            440 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_0.gif',
                'id' => 173,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            441 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_1.gif',
                'id' => 174,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            442 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_2.gif',
                'id' => 175,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            443 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_3.gif',
                'id' => 176,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            444 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_4.gif',
                'id' => 177,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            445 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_5.gif',
                'id' => 178,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            446 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_6.gif',
                'id' => 179,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            447 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_7.gif',
                'id' => 180,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            448 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_8.gif',
                'id' => 181,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            449 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_9.gif',
                'id' => 182,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            450 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_a.gif',
                'id' => 183,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            451 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_b.gif',
                'id' => 184,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            452 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_c.gif',
                'id' => 185,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            453 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_d.gif',
                'id' => 186,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            454 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_e.gif',
                'id' => 187,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            455 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_f.gif',
                'id' => 188,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            456 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_g.gif',
                'id' => 189,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            457 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_h.gif',
                'id' => 190,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            458 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_i.gif',
                'id' => 191,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            459 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_j.gif',
                'id' => 192,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            460 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_k.gif',
                'id' => 193,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            461 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_l.gif',
                'id' => 194,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            462 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_m.gif',
                'id' => 195,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            463 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_n.gif',
                'id' => 196,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            464 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_o.gif',
                'id' => 197,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            465 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_p.gif',
                'id' => 198,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            466 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_q.gif',
                'id' => 199,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            467 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_r.gif',
                'id' => 200,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            468 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_s.gif',
                'id' => 201,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            469 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_t.gif',
                'id' => 202,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            470 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_u.gif',
                'id' => 203,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            471 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_v.gif',
                'id' => 204,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            472 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_w.gif',
                'id' => 205,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            473 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_x.gif',
                'id' => 206,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            474 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_y.gif',
                'id' => 207,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            475 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_z.gif',
                'id' => 208,
                'secondvalue' => '',
                'type' => 'symbol',
            ),
            476 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_pixel_part2.gif',
                'id' => 209,
                'secondvalue' => 'symbol_pixel_part1.gif',
                'type' => 'symbol',
            ),
            477 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_credit_part2.gif',
                'id' => 210,
                'secondvalue' => 'symbol_credit_part1.gif',
                'type' => 'symbol',
            ),
            478 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_hc_part2.gif',
                'id' => 211,
                'secondvalue' => 'symbol_hc_part1.gif',
                'type' => 'symbol',
            ),
            479 => 
            array (
                'enabled' => '1',
                'firstvalue' => 'symbol_vip_part2.gif',
                'id' => 212,
                'secondvalue' => 'symbol_vip_part1.gif',
                'type' => 'symbol',
            ),
        ));
        
        
    }
}