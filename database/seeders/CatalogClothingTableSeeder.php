<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatalogClothingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_clothing')->delete();
        
        \DB::table('catalog_clothing')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'clothing_squid',
                'setid' => '3356',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'clothing_party1',
                'setid' => '3362',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'clothing_meowtfit',
                'setid' => '3331,3334,3335,3337,3338',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'clothing_geometricskirt',
                'setid' => '3341',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'clothing_waistcoatsuit',
                'setid' => '3327',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'clothing_gatsby',
                'setid' => '3322',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'clothing_bow',
                'setid' => '3358',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'clothing_baldy',
                'setid' => '3357',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'clothing_wavy2',
                'setid' => '3339',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'clothing_mutton1',
                'setid' => '3345',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'clothing_straw2',
                'setid' => '3347',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'clothing_fishhat',
                'setid' => '3349',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'clothing_rolled_jeans',
                'setid' => '3320',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'clothing_birdshoes',
                'setid' => '3348',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'clothing_mermaidoutfit',
                'setid' => '3332,3333',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'clothing_droopycollar',
                'setid' => '3336,3340',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'clothing_headband',
                'setid' => '3352',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'clothing_flowercrown',
                'setid' => '3329',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'clothing_hheadphones',
                'setid' => '3324',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'clothing_mutton2',
                'setid' => '3346',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'clothing_floralskirt',
                'setid' => '3355',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'clothing_nightvision',
                'setid' => '3318',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'clothing_mockymouse',
                'setid' => '3359,3360,3361',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'clothing_xmas1',
                'setid' => '3321',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'clothing_shavedside',
                'setid' => '3325',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'clothing_geometricjumper',
                'setid' => '3342',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'clothing_beard1',
                'setid' => '3344',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'clothing_beads',
                'setid' => '3343',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'clothing_twotonecardi',
                'setid' => '3326',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'clothing_animalprint',
                'setid' => '3353',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'clothing_party2',
                'setid' => '3363',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'clothing_tshirt_rolled',
                'setid' => '3323,3351',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'clothing_rippedjeans',
                'setid' => '3328',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'clothing_shoestights',
                'setid' => '3354',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'clothing_kimono1',
                'setid' => '3366,3367,3368,3369,3364',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'clothing_kimono2',
                'setid' => '3365,3371,3372,3370',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'clothing_cyboots',
                'setid' => '3375',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'clothing_cycircuit',
                'setid' => '3385',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'clothing_cygirl',
                'setid' => '3373,3374,3375,3376,3377,3387',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'clothing_cyglass',
                'setid' => '3388',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'clothing_cyhair',
                'setid' => '3377',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'clothing_cyhood',
                'setid' => '3382',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'clothing_cyleather',
                'setid' => '3373,3374',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'clothing_cymask',
                'setid' => '3378',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'clothing_cyquif',
                'setid' => '3386',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'clothing_cyskirt',
                'setid' => '3387',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'clothing_cystrapboots',
                'setid' => '3383',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'clothing_cystraphood',
                'setid' => '3380,3381,3382,3383,3384',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'clothing_cystrappants',
                'setid' => '3384',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'clothing_cyzipped',
                'setid' => '3380,3381',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'clothing_goggles',
                'setid' => '3376',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'clothing_candyboy',
                'setid' => '3389,3390,3391,3394',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'clothing_sidehat',
                'setid' => '3392',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'clothing_candygirl',
                'setid' => '3392,3396,3397,3398,3401',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'clothing_candyphones',
                'setid' => '3395',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'clothing_cherries',
                'setid' => '3402',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'clothing_cherrybomb',
                'setid' => '3403',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'clothing_chocodrop',
                'setid' => '3394',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'clothing_cjersey',
                'setid' => '3389,3390',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'clothing_cjumper',
                'setid' => '3397,3398',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'clothing_cshorts',
                'setid' => '3391',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'clothing_frontswirl',
                'setid' => '3393',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'clothing_habloompa',
                'setid' => '3396',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'clothing_swirlskirt',
                'setid' => '3401',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'clothing_swirltop',
                'setid' => '3399,3400',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'clothing_knitalien',
                'setid' => '3404',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'clothing_camoboots',
                'setid' => '3419',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'clothing_camocap',
                'setid' => '3415',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'clothing_camooutfit',
                'setid' => '3415,3416,3417,3418,3419',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'clothing_camotuck',
                'setid' => '3418',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'clothing_drillserg',
                'setid' => '3426',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'clothing_kevlaroutfit',
                'setid' => '3420,3421',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'clothing_kevlar',
                'setid' => '3420',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'clothing_kevlarhat',
                'setid' => '3421',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'clothing_medal1',
                'setid' => '3423',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'clothing_medal2',
                'setid' => '3424',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'clothing_medal3',
                'setid' => '3425',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'clothing_militaryhat',
                'setid' => '3409',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'clothing_militaryjacket',
                'setid' => '3405,3406',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'clothing_militarypants',
                'setid' => '3407',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'clothing_napkin',
                'setid' => '3422',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'clothing_parade',
                'setid' => '3405,3406,3408,3409,3407',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'clothing_rank1',
                'setid' => '3410',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'clothing_rank2',
                'setid' => '3411',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'clothing_rank3',
                'setid' => '3412',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'clothing_rank4',
                'setid' => '3413',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'clothing_rank5',
                'setid' => '3414',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'clothing_walkie',
                'setid' => '3427',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'clothing_camotank',
                'setid' => '3416,3417',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'clothing_dinohat',
                'setid' => '3431',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'clothing_caveshirt',
                'setid' => '3428,3429',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'clothing_cavehair',
                'setid' => '3436',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'clothing_dino',
                'setid' => '3431,3432,3433,3434,3435',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'clothing_caveman',
                'setid' => '3428,3429,3436',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'clothing_hat_skulldino',
                'setid' => '3430',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'clothing_breton',
                'setid' => '3438,3439',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'clothing_necktie',
                'setid' => '3437',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'clothing_airhelm',
                'setid' => '3452',
            ),
            98 => 
            array (
                'id' => 101,
                'name' => 'clothing_deathmask',
                'setid' => '3457',
            ),
            99 => 
            array (
                'id' => 102,
                'name' => 'clothing_demoncloak',
                'setid' => '3442,3443',
            ),
            100 => 
            array (
                'id' => 103,
                'name' => 'clothing_demonhood',
                'setid' => '3441',
            ),
            101 => 
            array (
                'id' => 104,
                'name' => 'clothing_demonoutfit',
                'setid' => '3441,3442,3443,3444',
            ),
            102 => 
            array (
                'id' => 105,
                'name' => 'clothing_earthhelm',
                'setid' => '3453',
            ),
            103 => 
            array (
                'id' => 106,
                'name' => 'clothing_fammask',
                'setid' => '3455',
            ),
            104 => 
            array (
                'id' => 107,
                'name' => 'clothing_firehelm',
                'setid' => '3450',
            ),
            105 => 
            array (
                'id' => 108,
                'name' => 'clothing_knightoutfit',
                'setid' => '3447,3448,3449',
            ),
            106 => 
            array (
                'id' => 109,
                'name' => 'clothing_knighttop',
                'setid' => '3447,3448',
            ),
            107 => 
            array (
                'id' => 110,
                'name' => 'clothing_knighttrousers',
                'setid' => '3449',
            ),
            108 => 
            array (
                'id' => 111,
                'name' => 'clothing_pestmask',
                'setid' => '3456',
            ),
            109 => 
            array (
                'id' => 112,
                'name' => 'clothing_skullnecklace',
                'setid' => '3444',
            ),
            110 => 
            array (
                'id' => 113,
                'name' => 'clothing_warmask',
                'setid' => '3454',
            ),
            111 => 
            array (
                'id' => 114,
                'name' => 'clothing_waterhelm',
                'setid' => '3451',
            ),
            112 => 
            array (
                'id' => 115,
                'name' => 'clothing_bscarf',
                'setid' => '3466',
            ),
            113 => 
            array (
                'id' => 116,
                'name' => 'clothing_cladydress',
                'setid' => '3446',
            ),
            114 => 
            array (
                'id' => 117,
                'name' => 'clothing_cladyhair',
                'setid' => '3468',
            ),
            115 => 
            array (
                'id' => 118,
                'name' => 'clothing_cladyoutfit',
                'setid' => '3446,3467,3468,3469,3458',
            ),
            116 => 
            array (
                'id' => 119,
                'name' => 'clothing_cladyshoes',
                'setid' => '3467',
            ),
            117 => 
            array (
                'id' => 120,
                'name' => 'clothing_santapants',
                'setid' => '3460',
            ),
            118 => 
            array (
                'id' => 121,
                'name' => 'clothing_xmasbow',
                'setid' => '3458',
            ),
            119 => 
            array (
                'id' => 122,
                'name' => 'clothing_santaoutfit',
                'setid' => '3459,3460,3461,3462',
            ),
            120 => 
            array (
                'id' => 123,
                'name' => 'clothing_santatop',
                'setid' => '3459',
            ),
            121 => 
            array (
                'id' => 124,
                'name' => 'clothing_ribbon',
                'setid' => '3469',
            ),
            122 => 
            array (
                'id' => 125,
                'name' => 'clothing_santahat',
                'setid' => '3461',
            ),
            123 => 
            array (
                'id' => 126,
                'name' => 'clothing_snood',
                'setid' => '3464',
            ),
            124 => 
            array (
                'id' => 127,
                'name' => 'clothing_santabeard',
                'setid' => '3462',
            ),
            125 => 
            array (
                'id' => 128,
                'name' => 'clothing_knitband',
                'setid' => '3465',
            ),
            126 => 
            array (
                'id' => 129,
                'name' => 'clothing_knithat',
                'setid' => '3463',
            ),
            127 => 
            array (
                'id' => 130,
                'name' => 'clothing_hat_space1',
                'setid' => '3440',
            ),
            128 => 
            array (
                'id' => 131,
                'name' => 'clothing_goldpack1',
                'setid' => '3470,3471,3472,3473,3474,3475,3476',
            ),
            129 => 
            array (
                'id' => 132,
                'name' => 'clothing_party3',
                'setid' => '3480',
            ),
            130 => 
            array (
                'id' => 133,
                'name' => 'clothing_party4',
                'setid' => '3481',
            ),
            131 => 
            array (
                'id' => 134,
                'name' => 'clothing_party5',
                'setid' => '3482',
            ),
            132 => 
            array (
                'id' => 135,
                'name' => 'clothing_party6',
                'setid' => '3477',
            ),
            133 => 
            array (
                'id' => 136,
                'name' => 'clothing_party7',
                'setid' => '3478',
            ),
            134 => 
            array (
                'id' => 137,
                'name' => 'clothing_party8',
                'setid' => '3479',
            ),
            135 => 
            array (
                'id' => 138,
                'name' => 'clothing_backcap',
                'setid' => '3494',
            ),
            136 => 
            array (
                'id' => 139,
                'name' => 'clothing_bandage',
                'setid' => '3495',
            ),
            137 => 
            array (
                'id' => 140,
                'name' => 'clothing_bedhair',
                'setid' => '3520',
            ),
            138 => 
            array (
                'id' => 141,
                'name' => 'clothing_bigshades',
                'setid' => '3493',
            ),
            139 => 
            array (
                'id' => 142,
                'name' => 'clothing_brainjar',
                'setid' => '3514',
            ),
            140 => 
            array (
                'id' => 143,
                'name' => 'clothing_camera',
                'setid' => '3485',
            ),
            141 => 
            array (
                'id' => 144,
                'name' => 'clothing_casualoutfit1',
                'setid' => '3519,3522,3523,3526',
            ),
            142 => 
            array (
                'id' => 145,
                'name' => 'clothing_cumberband',
                'setid' => '3504',
            ),
            143 => 
            array (
                'id' => 146,
                'name' => 'clothing_denimshorts',
                'setid' => '3526',
            ),
            144 => 
            array (
                'id' => 147,
                'name' => 'clothing_denimvest',
                'setid' => '3509,3515',
            ),
            145 => 
            array (
                'id' => 148,
                'name' => 'clothing_disco',
                'setid' => '3525',
            ),
            146 => 
            array (
                'id' => 149,
                'name' => 'clothing_duckhat',
                'setid' => '3500',
            ),
            147 => 
            array (
                'id' => 150,
                'name' => 'clothing_floraloutfit',
                'setid' => '3517,3518,3519,3329,3354,3532',
            ),
            148 => 
            array (
                'id' => 151,
                'name' => 'clothing_halter',
                'setid' => '3496,3510',
            ),
            149 => 
            array (
                'id' => 152,
                'name' => 'clothing_hipoutfit1',
                'setid' => '3342,3344,3531',
            ),
            150 => 
            array (
                'id' => 153,
                'name' => 'clothing_hipoutfit2',
                'setid' => '3499,3524,3528,3529,3484,3328',
            ),
            151 => 
            array (
                'id' => 154,
                'name' => 'clothing_hipoutfit3',
                'setid' => '3531,3484,3527,3530,3526',
            ),
            152 => 
            array (
                'id' => 155,
                'name' => 'clothing_hipster2',
                'setid' => '3499',
            ),
            153 => 
            array (
                'id' => 156,
                'name' => 'clothing_hipsterglasses',
                'setid' => '3484',
            ),
            154 => 
            array (
                'id' => 482,
                'name' => 'clothing_r18_longwavy',
                'setid' => '3733',
            ),
            155 => 
            array (
                'id' => 158,
                'name' => 'clothing_jacket_twotone',
                'setid' => '3522,3523',
            ),
            156 => 
            array (
                'id' => 159,
                'name' => 'clothing_longtshirt',
                'setid' => '3497,3498',
            ),
            157 => 
            array (
                'id' => 160,
                'name' => 'clothing_manbun',
                'setid' => '3531',
            ),
            158 => 
            array (
                'id' => 161,
                'name' => 'clothing_mermaid',
                'setid' => '3516',
            ),
            159 => 
            array (
                'id' => 162,
                'name' => 'clothing_offshldrjumper',
                'setid' => '3528,3529',
            ),
            160 => 
            array (
                'id' => 163,
                'name' => 'clothing_ombrehr',
                'setid' => '3519',
            ),
            161 => 
            array (
                'id' => 164,
                'name' => 'clothing_pjbottoms1',
                'setid' => '3483',
            ),
            162 => 
            array (
                'id' => 165,
                'name' => 'clothing_pjoutfit1',
                'setid' => '3486,3487,3483,3520',
            ),
            163 => 
            array (
                'id' => 166,
                'name' => 'clothing_pjoutfit2',
                'setid' => '3489,3490,3483,3520',
            ),
            164 => 
            array (
                'id' => 167,
                'name' => 'clothing_pjoutfit3',
                'setid' => '3491,3492,3483,3520',
            ),
            165 => 
            array (
                'id' => 168,
                'name' => 'clothing_pjtop1',
                'setid' => '3486,3487',
            ),
            166 => 
            array (
                'id' => 169,
                'name' => 'clothing_pjtop2',
                'setid' => '3489,3490',
            ),
            167 => 
            array (
                'id' => 170,
                'name' => 'clothing_pjtop3',
                'setid' => '3491,3492',
            ),
            168 => 
            array (
                'id' => 171,
                'name' => 'clothing_polkadress',
                'setid' => '3517,3518',
            ),
            169 => 
            array (
                'id' => 172,
                'name' => 'clothing_punkoutfit1',
                'setid' => '3528,3529,3325,3391,3419',
            ),
            170 => 
            array (
                'id' => 173,
                'name' => 'clothing_punkoutfit2',
                'setid' => '3484,3326,3325,3324',
            ),
            171 => 
            array (
                'id' => 174,
                'name' => 'clothing_rippedtop',
                'setid' => '3527,3530',
            ),
            172 => 
            array (
                'id' => 175,
                'name' => 'clothing_sliponcanvas',
                'setid' => '3524',
            ),
            173 => 
            array (
                'id' => 176,
                'name' => 'clothing_sportpants',
                'setid' => '3521',
            ),
            174 => 
            array (
                'id' => 177,
                'name' => 'clothing_sportsjckt',
                'setid' => '3512,3513',
            ),
            175 => 
            array (
                'id' => 178,
                'name' => 'clothing_tie1',
                'setid' => '3503',
            ),
            176 => 
            array (
                'id' => 179,
                'name' => 'clothing_tiedjumper',
                'setid' => '3532',
            ),
            177 => 
            array (
                'id' => 180,
                'name' => 'clothing_tux',
                'setid' => '3507,3508',
            ),
            178 => 
            array (
                'id' => 181,
                'name' => 'clothing_tuxoutfit',
                'setid' => '3503,3504,3505,3506,3507,3508',
            ),
            179 => 
            array (
                'id' => 182,
                'name' => 'clothing_tuxshirt',
                'setid' => '3505,3506',
            ),
            180 => 
            array (
                'id' => 183,
                'name' => 'clothing_urbanoutfit',
                'setid' => '3494,3497,3498,3521',
            ),
            181 => 
            array (
                'id' => 184,
                'name' => 'clothing_cyphones',
                'setid' => '3379',
            ),
            182 => 
            array (
                'id' => 185,
                'name' => 'clothing_armyskirt',
                'setid' => '3408',
            ),
            183 => 
            array (
                'id' => 186,
                'name' => 'clothing_r16_sloth',
                'setid' => '3533',
            ),
            184 => 
            array (
                'id' => 187,
                'name' => 'clothing_r16_cyclops',
                'setid' => '3537',
            ),
            185 => 
            array (
                'id' => 188,
                'name' => 'clothing_r16_catface',
                'setid' => '3536',
            ),
            186 => 
            array (
                'id' => 189,
                'name' => 'clothing_r16_icetiara',
                'setid' => '3541',
            ),
            187 => 
            array (
                'id' => 190,
                'name' => 'clothing_bear',
                'setid' => '3545,3546',
            ),
            188 => 
            array (
                'id' => 191,
                'name' => 'clothing_bearhat',
                'setid' => '3546',
            ),
            189 => 
            array (
                'id' => 192,
                'name' => 'clothing_bearscarf',
                'setid' => '3545',
            ),
            190 => 
            array (
                'id' => 193,
                'name' => 'clothing_longscarf',
                'setid' => '3542',
            ),
            191 => 
            array (
                'id' => 194,
                'name' => 'clothing_r16_cathat',
                'setid' => '3544',
            ),
            192 => 
            array (
                'id' => 195,
                'name' => 'clothing_xmas2',
                'setid' => '3538',
            ),
            193 => 
            array (
                'id' => 196,
                'name' => 'clothing_xmas3',
                'setid' => '3539',
            ),
            194 => 
            array (
                'id' => 197,
                'name' => 'clothing_xmas4',
                'setid' => '3540',
            ),
            195 => 
            array (
                'id' => 198,
                'name' => 'clothing_poop',
                'setid' => '3560',
            ),
            196 => 
            array (
                'id' => 199,
                'name' => 'clothing_angry',
                'setid' => '3552',
            ),
            197 => 
            array (
                'id' => 200,
                'name' => 'clothing_bobba',
                'setid' => '3557',
            ),
            198 => 
            array (
                'id' => 201,
                'name' => 'clothing_cool',
                'setid' => '3558',
            ),
            199 => 
            array (
                'id' => 202,
                'name' => 'clothing_excited',
                'setid' => '3548',
            ),
            200 => 
            array (
                'id' => 203,
                'name' => 'clothing_happy',
                'setid' => '3547',
            ),
            201 => 
            array (
                'id' => 204,
                'name' => 'clothing_love',
                'setid' => '3559',
            ),
            202 => 
            array (
                'id' => 205,
                'name' => 'clothing_sad',
                'setid' => '3549',
            ),
            203 => 
            array (
                'id' => 206,
                'name' => 'clothing_shy',
                'setid' => '3561',
            ),
            204 => 
            array (
                'id' => 207,
                'name' => 'clothing_silly',
                'setid' => '3562',
            ),
            205 => 
            array (
                'id' => 208,
                'name' => 'clothing_surprised',
                'setid' => '3550',
            ),
            206 => 
            array (
                'id' => 209,
                'name' => 'clothing_wink',
                'setid' => '3551',
            ),
            207 => 
            array (
                'id' => 210,
                'name' => 'ny17_crackable',
                'setid' => '3565,3566,3554,3555,3556,3564',
            ),
            208 => 
            array (
                'id' => 212,
                'name' => 'clothing_retrohair',
                'setid' => '3657',
            ),
            209 => 
            array (
                'id' => 213,
                'name' => 'clothing_tiedtop',
                'setid' => '3658,3659',
            ),
            210 => 
            array (
                'id' => 214,
                'name' => 'clothing_floppyhair',
                'setid' => '3664',
            ),
            211 => 
            array (
                'id' => 215,
                'name' => 'clothing_floppysunhat',
                'setid' => '3666',
            ),
            212 => 
            array (
                'id' => 216,
                'name' => 'clothing_braidedwavy',
                'setid' => '3665',
            ),
            213 => 
            array (
                'id' => 217,
                'name' => 'clothing_shades',
                'setid' => '3660',
            ),
            214 => 
            array (
                'id' => 218,
                'name' => 'clothing_satchel',
                'setid' => '3661',
            ),
            215 => 
            array (
                'id' => 219,
                'name' => 'clothing_elegantponytail',
                'setid' => '3671',
            ),
            216 => 
            array (
                'id' => 220,
                'name' => 'clothing_judgewig',
                'setid' => '3674',
            ),
            217 => 
            array (
                'id' => 221,
                'name' => 'clothing_gentcap',
                'setid' => '3675',
            ),
            218 => 
            array (
                'id' => 222,
                'name' => 'clothing_beautyface',
                'setid' => '3631',
            ),
            219 => 
            array (
                'id' => 223,
                'name' => 'clothing_layerbuns',
                'setid' => '3608',
            ),
            220 => 
            array (
                'id' => 224,
                'name' => 'clothing_plaguemask',
                'setid' => '3605',
            ),
            221 => 
            array (
                'id' => 225,
                'name' => 'clothing_zombieeyes',
                'setid' => '3603',
            ),
            222 => 
            array (
                'id' => 226,
                'name' => 'clothing_demoneyes',
                'setid' => '3604',
            ),
            223 => 
            array (
                'id' => 227,
                'name' => 'clothing_bowtights',
                'setid' => '3619',
            ),
            224 => 
            array (
                'id' => 228,
                'name' => 'clothing_maid',
                'setid' => '3615,3617',
            ),
            225 => 
            array (
                'id' => 229,
                'name' => 'clothing_maidband',
                'setid' => '3613',
            ),
            226 => 
            array (
                'id' => 230,
                'name' => 'clothing_bazaarfemale',
                'setid' => '3598,3599,3596,3595',
            ),
            227 => 
            array (
                'id' => 231,
                'name' => 'clothing_bazaarmale',
                'setid' => '3593,3594,3595,3596',
            ),
            228 => 
            array (
                'id' => 232,
                'name' => 'clothing_alluringeyes',
                'setid' => '3600',
            ),
            229 => 
            array (
                'id' => 233,
                'name' => 'clothing_exoticbeard',
                'setid' => '3592',
            ),
            230 => 
            array (
                'id' => 234,
                'name' => 'clothing_exoticvest',
                'setid' => '3593,3594',
            ),
            231 => 
            array (
                'id' => 235,
                'name' => 'clothing_exotictop',
                'setid' => '3598,3599',
            ),
            232 => 
            array (
                'id' => 236,
                'name' => 'clothing_harempants',
                'setid' => '3596',
            ),
            233 => 
            array (
                'id' => 237,
                'name' => 'clothing_pointyshoes',
                'setid' => '3595',
            ),
            234 => 
            array (
                'id' => 238,
                'name' => 'clothing_messyhalfbun',
                'setid' => '3569',
            ),
            235 => 
            array (
                'id' => 239,
                'name' => 'clothing_crownbraid',
                'setid' => '3568',
            ),
            236 => 
            array (
                'id' => 240,
                'name' => 'clothing_apron',
                'setid' => '3572,3573',
            ),
            237 => 
            array (
                'id' => 241,
                'name' => 'clothing_r18_seawreath',
                'setid' => '3681',
            ),
            238 => 
            array (
                'id' => 242,
                'name' => 'clothing_r18_goldfish',
                'setid' => '3677',
            ),
            239 => 
            array (
                'id' => 243,
                'name' => 'clothing_luscioushair',
                'setid' => '3673',
            ),
            240 => 
            array (
                'id' => 244,
                'name' => 'clothing_wetsuit',
                'setid' => '3678,3679',
            ),
            241 => 
            array (
                'id' => 245,
                'name' => 'clothing_sailortop',
                'setid' => '3682,3683',
            ),
            242 => 
            array (
                'id' => 246,
                'name' => 'clothing_flippers',
                'setid' => '3687',
            ),
            243 => 
            array (
                'id' => 247,
                'name' => 'clothing_r19_messybangs',
                'setid' => '3790',
            ),
            244 => 
            array (
                'id' => 248,
                'name' => 'clothing_r19_forrestcrown',
                'setid' => '3776',
            ),
            245 => 
            array (
                'id' => 249,
                'name' => 'clothing_ribboncurls',
                'setid' => '3777,3778',
            ),
            246 => 
            array (
                'id' => 250,
                'name' => 'clothing_archerhat',
                'setid' => '3765',
            ),
            247 => 
            array (
                'id' => 251,
                'name' => 'clothing_madhat',
                'setid' => '3766',
            ),
            248 => 
            array (
                'id' => 252,
                'name' => 'clothing_mushroomhat',
                'setid' => '3775',
            ),
            249 => 
            array (
                'id' => 253,
                'name' => 'clothing_petaldress',
                'setid' => '3769,3770',
            ),
            250 => 
            array (
                'id' => 254,
                'name' => 'clothing_wolfmask',
                'setid' => '3771',
            ),
            251 => 
            array (
                'id' => 255,
                'name' => 'clothing_flowerponytail',
                'setid' => '3774',
            ),
            252 => 
            array (
                'id' => 256,
                'name' => 'clothing_r19_fox',
                'setid' => '3772,3773',
            ),
            253 => 
            array (
                'id' => 257,
                'name' => 'clothing_leafhair',
                'setid' => '3768',
            ),
            254 => 
            array (
                'id' => 258,
                'name' => 'clothing_highfade',
                'setid' => '3786',
            ),
            255 => 
            array (
                'id' => 259,
                'name' => 'clothing_messycurls',
                'setid' => '3791',
            ),
            256 => 
            array (
                'id' => 260,
                'name' => 'clothing_piglethat',
                'setid' => '3767',
            ),
            257 => 
            array (
                'id' => 261,
                'name' => 'clothing_rippedjeans2',
                'setid' => '3787',
            ),
            258 => 
            array (
                'id' => 262,
                'name' => 'clothing_topbuttonshirt',
                'setid' => '3792,3793',
            ),
            259 => 
            array (
                'id' => 263,
                'name' => 'clothing_r18_antlers',
                'setid' => '3732',
            ),
            260 => 
            array (
                'id' => 264,
                'name' => 'clothing_r18_hyggehair',
                'setid' => '3731',
            ),
            261 => 
            array (
                'id' => 265,
                'name' => 'clothing_r18_dungarees',
                'setid' => '3728,3729',
            ),
            262 => 
            array (
                'id' => 266,
                'name' => 'clothing_goldpack2',
                'setid' => '3574,3575,3576,3577,3578,3579,3580',
            ),
            263 => 
            array (
                'id' => 267,
                'name' => 'clothing_goldpack3',
                'setid' => '3639,3640,3641,3642,3643,3644,3645',
            ),
            264 => 
            array (
                'id' => 268,
                'name' => 'clothing_loyaltycrown_V',
                'setid' => '3655',
            ),
            265 => 
            array (
                'id' => 269,
                'name' => 'clothing_loyaltycrown_X',
                'setid' => '3656',
            ),
            266 => 
            array (
                'id' => 270,
                'name' => 'clothing_loyaltycrown_II',
                'setid' => '3654',
            ),
            267 => 
            array (
                'id' => 271,
                'name' => 'clothing_r17_weddingdress',
                'setid' => '3563',
            ),
            268 => 
            array (
                'id' => 272,
                'name' => 'clothing_r17_weddingset',
                'setid' => '3563,3553',
            ),
            269 => 
            array (
                'id' => 273,
                'name' => 'clothing_r17_wedveil',
                'setid' => '3553',
            ),
            270 => 
            array (
                'id' => 274,
                'name' => 'clothing_r18_goldpack4',
                'setid' => '3749,3750,3751,3752,3753,3754,3755',
            ),
            271 => 
            array (
                'id' => 275,
                'name' => 'clothing_r17_chicken',
                'setid' => '3570',
            ),
            272 => 
            array (
                'id' => 276,
                'name' => 'clothing_r17_cow',
                'setid' => '3571',
            ),
            273 => 
            array (
                'id' => 277,
                'name' => 'clothing_r17_horse',
                'setid' => '3567',
            ),
            274 => 
            array (
                'id' => 278,
                'name' => 'clothing_featherflower',
                'setid' => '3627',
            ),
            275 => 
            array (
                'id' => 279,
                'name' => 'clothing_buttonpants',
                'setid' => '3626',
            ),
            276 => 
            array (
                'id' => 280,
                'name' => 'clothing_r17_goldfeatherflower',
                'setid' => '3628',
            ),
            277 => 
            array (
                'id' => 281,
                'name' => 'clothing_ruffleshirt',
                'setid' => '3636,3637',
            ),
            278 => 
            array (
                'id' => 282,
                'name' => 'clothing_tophat',
                'setid' => '3632',
            ),
            279 => 
            array (
                'id' => 283,
                'name' => 'clothing_dress',
                'setid' => '3629,3630',
            ),
            280 => 
            array (
                'id' => 284,
                'name' => 'clothing_tailedcoat',
                'setid' => '3634,3635',
            ),
            281 => 
            array (
                'id' => 285,
                'name' => 'clothing_sasquatchmask',
                'setid' => '3638',
            ),
            282 => 
            array (
                'id' => 286,
                'name' => 'clothing_r19_frilledskirt',
                'setid' => '3781',
            ),
            283 => 
            array (
                'id' => 287,
                'name' => 'clothing_r19_shortcurly',
                'setid' => '3785',
            ),
            284 => 
            array (
                'id' => 288,
                'name' => 'clothing_r19_waistcoat',
                'setid' => '3779,3780',
            ),
            285 => 
            array (
                'id' => 289,
                'name' => 'clothing_badasshelmet',
                'setid' => '3624',
            ),
            286 => 
            array (
                'id' => 290,
                'name' => 'clothing_herochest',
                'setid' => '3609',
            ),
            287 => 
            array (
                'id' => 291,
                'name' => 'clothing_rebelchest',
                'setid' => '3610',
            ),
            288 => 
            array (
                'id' => 292,
                'name' => 'clothing_r17_bathat',
                'setid' => '3606',
            ),
            289 => 
            array (
                'id' => 293,
                'name' => 'clothing_herohelmet',
                'setid' => '3623',
            ),
            290 => 
            array (
                'id' => 294,
                'name' => 'clothing_legarmour',
                'setid' => '3607',
            ),
            291 => 
            array (
                'id' => 295,
                'name' => 'clothing_r17_hweencrown',
                'setid' => '3612',
            ),
            292 => 
            array (
                'id' => 296,
                'name' => 'clothing_shoearmour',
                'setid' => '3611',
            ),
            293 => 
            array (
                'id' => 297,
                'name' => 'clothing_animehair',
                'setid' => '3699',
            ),
            294 => 
            array (
                'id' => 298,
                'name' => 'clothing_harajukuhair',
                'setid' => '3705',
            ),
            295 => 
            array (
                'id' => 299,
                'name' => 'clothing_sakurajacket',
                'setid' => '3696,3697',
            ),
            296 => 
            array (
                'id' => 300,
                'name' => 'clothing_dragonplushhat',
                'setid' => '3701',
            ),
            297 => 
            array (
                'id' => 301,
                'name' => 'clothing_cuteglasses',
                'setid' => '3698',
            ),
            298 => 
            array (
                'id' => 302,
                'name' => 'clothing_shogunhelmet',
                'setid' => '3694',
            ),
            299 => 
            array (
                'id' => 303,
                'name' => 'clothing_r18_catbag',
                'setid' => '3702',
            ),
            300 => 
            array (
                'id' => 304,
                'name' => 'clothing_r18_kitsunemask',
                'setid' => '3700',
            ),
            301 => 
            array (
                'id' => 305,
                'name' => 'clothing_harajukubow',
                'setid' => '3703',
            ),
            302 => 
            array (
                'id' => 306,
                'name' => 'clothing_tutu',
                'setid' => '3695',
            ),
            303 => 
            array (
                'id' => 307,
                'name' => 'clothing_botface',
                'setid' => '3704',
            ),
            304 => 
            array (
                'id' => 308,
                'name' => 'clothing_r19_comedymask',
                'setid' => '3815',
            ),
            305 => 
            array (
                'id' => 309,
                'name' => 'clothing_r19_tragedymask',
                'setid' => '3816',
            ),
            306 => 
            array (
                'id' => 310,
                'name' => 'clothing_r19_minotaurhorns',
                'setid' => '3820',
            ),
            307 => 
            array (
                'id' => 311,
                'name' => 'clothing_r19_medusa',
                'setid' => '3819',
            ),
            308 => 
            array (
                'id' => 312,
                'name' => 'clothing_r19_celestialdress',
                'setid' => '3817,3818',
            ),
            309 => 
            array (
                'id' => 313,
                'name' => 'clothing_zebratop',
                'setid' => '3839,3840',
            ),
            310 => 
            array (
                'id' => 315,
                'name' => 'clothing_croppedjumper',
                'setid' => '3837,3838',
            ),
            311 => 
            array (
                'id' => 316,
                'name' => 'clothing_layeredlongskirt',
                'setid' => '3842',
            ),
            312 => 
            array (
                'id' => 317,
                'name' => 'clothing_longmohawk',
                'setid' => '3841',
            ),
            313 => 
            array (
                'id' => 318,
                'name' => 'clothing_r19_rainbowstarjumper',
                'setid' => '3788',
            ),
            314 => 
            array (
                'id' => 319,
                'name' => 'clothing_shortcut',
                'setid' => '3829',
            ),
            315 => 
            array (
                'id' => 320,
                'name' => 'clothing_loosekimono',
                'setid' => '3826,3827',
            ),
            316 => 
            array (
                'id' => 321,
                'name' => 'clothing_gardenapron',
                'setid' => '3824,3825',
            ),
            317 => 
            array (
                'id' => 502,
                'name' => 'clothing_r19_puppyacc',
                'setid' => '3872,3873',
            ),
            318 => 
            array (
                'id' => 323,
                'name' => 'clothing_butterflymask',
                'setid' => '3832',
            ),
            319 => 
            array (
                'id' => 324,
                'name' => 'clothing_r19_butterflydress',
                'setid' => '3834,3835',
            ),
            320 => 
            array (
                'id' => 325,
                'name' => 'clothing_leafmask',
                'setid' => '3822',
            ),
            321 => 
            array (
                'id' => 326,
                'name' => 'clothing_gogglehat',
                'setid' => '3823',
            ),
            322 => 
            array (
                'id' => 327,
                'name' => 'clothing_flowytop',
                'setid' => '3836',
            ),
            323 => 
            array (
                'id' => 328,
                'name' => 'clothing_leafearrings',
                'setid' => '3833',
            ),
            324 => 
            array (
                'id' => 329,
                'name' => 'clothing_r19_featheredcowl',
                'setid' => '3830,3831',
            ),
            325 => 
            array (
                'id' => 330,
                'name' => 'clothing_floralbag',
                'setid' => '3828',
            ),
            326 => 
            array (
                'id' => 331,
                'name' => 'clothing_sprout',
                'setid' => '3821',
            ),
            327 => 
            array (
                'id' => 503,
                'name' => 'clothing_diafish',
                'setid' => '3708',
            ),
            328 => 
            array (
                'id' => 504,
                'name' => 'clothing_dialeafcrown',
                'setid' => '3709',
            ),
            329 => 
            array (
                'id' => 505,
                'name' => 'clothing_dianoblecrown',
                'setid' => '3710',
            ),
            330 => 
            array (
                'id' => 506,
                'name' => 'clothing_r18_diaparty',
                'setid' => '3711',
            ),
            331 => 
            array (
                'id' => 337,
                'name' => 'clothing_halo',
                'setid' => '3740',
            ),
            332 => 
            array (
                'id' => 338,
                'name' => 'clothing_rudolphhat',
                'setid' => '3742',
            ),
            333 => 
            array (
                'id' => 339,
                'name' => 'clothing_poinsettia',
                'setid' => '3743',
            ),
            334 => 
            array (
                'id' => 340,
                'name' => 'clothing_bobblehat',
                'setid' => '3745',
            ),
            335 => 
            array (
                'id' => 341,
                'name' => 'clothing_r18_featherdress',
                'setid' => '3747,3748',
            ),
            336 => 
            array (
                'id' => 342,
                'name' => 'clothing_penguin',
                'setid' => '3737',
            ),
            337 => 
            array (
                'id' => 343,
                'name' => 'clothing_r18_feathercrown',
                'setid' => '3734',
            ),
            338 => 
            array (
                'id' => 344,
                'name' => 'clothing_sideflopped',
                'setid' => '3746',
            ),
            339 => 
            array (
                'id' => 345,
                'name' => 'clothing_snowman',
                'setid' => '3741',
            ),
            340 => 
            array (
                'id' => 346,
                'name' => 'clothing_xmas5',
                'setid' => '3735',
            ),
            341 => 
            array (
                'id' => 347,
                'name' => 'clothing_mittens',
                'setid' => '3744',
            ),
            342 => 
            array (
                'id' => 348,
                'name' => 'clothing_regiment',
                'setid' => '3738,3739',
            ),
            343 => 
            array (
                'id' => 349,
                'name' => 'clothing_treepartyhat',
                'setid' => '3736',
            ),
            344 => 
            array (
                'id' => 350,
                'name' => 'clothing_flipflopsocks',
                'setid' => '3621',
            ),
            345 => 
            array (
                'id' => 351,
                'name' => 'clothing_kpopbuns',
                'setid' => '3676',
            ),
            346 => 
            array (
                'id' => 352,
                'name' => 'clothing_r19_rainbowhair',
                'setid' => '3811',
            ),
            347 => 
            array (
                'id' => 353,
                'name' => 'clothing_r19_rainbowshades',
                'setid' => '3803',
            ),
            348 => 
            array (
                'id' => 354,
                'name' => 'clothing_halftiedhair',
                'setid' => '3852',
            ),
            349 => 
            array (
                'id' => 355,
                'name' => 'clothing_r19_raincoat',
                'setid' => '3850,3851',
            ),
            350 => 
            array (
                'id' => 356,
                'name' => 'clothing_r19_teddygown',
                'setid' => '3853,3854,3855',
            ),
            351 => 
            array (
                'id' => 357,
                'name' => 'clothing_bookbag',
                'setid' => '3856',
            ),
            352 => 
            array (
                'id' => 563,
                'name' => 'clothing_brain',
                'setid' => '3730',
            ),
            353 => 
            array (
                'id' => 364,
                'name' => 'clothing_r16_helmprotect',
                'setid' => '3534',
            ),
            354 => 
            array (
                'id' => 365,
                'name' => 'clothing_r16_helmhero',
                'setid' => '3535',
            ),
            355 => 
            array (
                'id' => 507,
                'name' => 'clothing_mini_bowlerhat_dark',
                'setid' => '3652',
            ),
            356 => 
            array (
                'id' => 508,
                'name' => 'clothing_mini_bowlerhat_cream',
                'setid' => '3651',
            ),
            357 => 
            array (
                'id' => 509,
                'name' => 'clothing_mini_bowlerhat_gold',
                'setid' => '3646',
            ),
            358 => 
            array (
                'id' => 510,
                'name' => 'clothing_mini_bowlerhat_green',
                'setid' => '3647',
            ),
            359 => 
            array (
                'id' => 511,
                'name' => 'clothing_mini_bowlerhat_red',
                'setid' => '3649',
            ),
            360 => 
            array (
                'id' => 512,
                'name' => 'clothing_mini_bowlerhat_purple',
                'setid' => '3648',
            ),
            361 => 
            array (
                'id' => 513,
                'name' => 'clothing_mini_bowlerhat_blue',
                'setid' => '3650',
            ),
            362 => 
            array (
                'id' => 514,
                'name' => 'clothing_r16_party14',
                'setid' => '3556',
            ),
            363 => 
            array (
                'id' => 515,
                'name' => 'clothing_r16_party13',
                'setid' => '3555',
            ),
            364 => 
            array (
                'id' => 516,
                'name' => 'clothing_r16_party11',
                'setid' => '3566',
            ),
            365 => 
            array (
                'id' => 517,
                'name' => 'clothing_r16_party9',
                'setid' => '3564',
            ),
            366 => 
            array (
                'id' => 518,
                'name' => 'clothing_r16_party12',
                'setid' => '3554',
            ),
            367 => 
            array (
                'id' => 519,
                'name' => 'clothing_r16_party10',
                'setid' => '3565',
            ),
            368 => 
            array (
                'id' => 520,
                'name' => 'clothing_r18_sparkleparty1',
                'setid' => '3756',
            ),
            369 => 
            array (
                'id' => 521,
                'name' => 'clothing_r18_sparkleparty2',
                'setid' => '3757',
            ),
            370 => 
            array (
                'id' => 522,
                'name' => 'clothing_r18_sparkleparty3',
                'setid' => '3758',
            ),
            371 => 
            array (
                'id' => 523,
                'name' => 'clothing_r18_sparkleparty4',
                'setid' => '3759',
            ),
            372 => 
            array (
                'id' => 392,
                'name' => 'clothing_noblecrown',
                'setid' => '3488',
            ),
            373 => 
            array (
                'id' => 524,
                'name' => 'clothing_r18_sparkleparty5',
                'setid' => '3760',
            ),
            374 => 
            array (
                'id' => 525,
                'name' => 'clothing_r18_sparkleparty6',
                'setid' => '3761',
            ),
            375 => 
            array (
                'id' => 526,
                'name' => 'clothing_r18_sparkleparty7',
                'setid' => '3762',
            ),
            376 => 
            array (
                'id' => 530,
                'name' => 'clothing_r18_sparkleparty8',
                'setid' => '3763',
            ),
            377 => 
            array (
                'id' => 531,
                'name' => 'clothing_bohobag',
                'setid' => '3799',
            ),
            378 => 
            array (
                'id' => 532,
                'name' => 'clothing_bohopaint',
                'setid' => '3814',
            ),
            379 => 
            array (
                'id' => 533,
                'name' => 'clothing_ruggedbackpack',
                'setid' => '3802',
            ),
            380 => 
            array (
                'id' => 534,
                'name' => 'clothing_bohotiara',
                'setid' => '3804',
            ),
            381 => 
            array (
                'id' => 535,
                'name' => 'clothing_bohovest',
                'setid' => '3794,3795',
            ),
            382 => 
            array (
                'id' => 536,
                'name' => 'clothing_flowingshirt',
                'setid' => '3806,3807',
            ),
            383 => 
            array (
                'id' => 537,
                'name' => 'clothing_bohobackpack',
                'setid' => '3801',
            ),
            384 => 
            array (
                'id' => 538,
                'name' => 'clothing_grandetail',
                'setid' => '3810',
            ),
            385 => 
            array (
                'id' => 539,
                'name' => 'clothing_waistbag',
                'setid' => '3798',
            ),
            386 => 
            array (
                'id' => 540,
                'name' => 'clothing_bohotunic',
                'setid' => '3796,3797',
            ),
            387 => 
            array (
                'id' => 541,
                'name' => 'clothing_dreadlockstied',
                'setid' => '3800',
            ),
            388 => 
            array (
                'id' => 542,
                'name' => 'clothing_flowerbeard',
                'setid' => '3812',
            ),
            389 => 
            array (
                'id' => 543,
                'name' => 'clothing_plungebikini',
                'setid' => '3808,3809',
            ),
            390 => 
            array (
                'id' => 544,
                'name' => 'clothing_bohoheadgems',
                'setid' => '3805',
            ),
            391 => 
            array (
                'id' => 579,
                'name' => 'clothing_reindeer',
                'setid' => '3543',
            ),
            392 => 
            array (
                'id' => 545,
                'name' => 'clothing_bohogems',
                'setid' => '3813',
            ),
            393 => 
            array (
                'id' => 546,
                'name' => 'clothing_r19_punkhat',
                'setid' => '3784',
            ),
            394 => 
            array (
                'id' => 547,
                'name' => 'clothing_r19_longtwotone',
                'setid' => '3789',
            ),
            395 => 
            array (
                'id' => 548,
                'name' => 'clothing_r19_scuffedboots',
                'setid' => '3783',
            ),
            396 => 
            array (
                'id' => 427,
                'name' => 'clothing_r18_unicorn',
                'setid' => '3653',
            ),
            397 => 
            array (
                'id' => 549,
                'name' => 'clothing_r19_messybun',
                'setid' => '3782',
            ),
            398 => 
            array (
                'id' => 550,
                'name' => 'clothing_r19_longwavy2',
                'setid' => '3764',
            ),
            399 => 
            array (
                'id' => 551,
                'name' => 'clothing_bloodscruffyhair',
                'setid' => '3725',
            ),
            400 => 
            array (
                'id' => 552,
                'name' => 'clothing_bloodglasses',
                'setid' => '3726',
            ),
            401 => 
            array (
                'id' => 553,
                'name' => 'clothing_bloodponytail',
                'setid' => '3714',
            ),
            402 => 
            array (
                'id' => 554,
                'name' => 'clothing_shortcurlhair',
                'setid' => '3724',
            ),
            403 => 
            array (
                'id' => 555,
                'name' => 'clothing_labcoat',
                'setid' => '3722,3723',
            ),
            404 => 
            array (
                'id' => 556,
                'name' => 'clothing_bloodjacket',
                'setid' => '3717,3718',
            ),
            405 => 
            array (
                'id' => 557,
                'name' => 'clothing_r18_vamp',
                'setid' => '3721',
            ),
            406 => 
            array (
                'id' => 558,
                'name' => 'clothing_bloodshoes',
                'setid' => '3720',
            ),
            407 => 
            array (
                'id' => 559,
                'name' => 'clothing_legwarmershoes',
                'setid' => '3719',
            ),
            408 => 
            array (
                'id' => 560,
                'name' => 'clothing_r18_axe',
                'setid' => '3716',
            ),
            409 => 
            array (
                'id' => 561,
                'name' => 'clothing_sideponytail',
                'setid' => '3715',
            ),
            410 => 
            array (
                'id' => 562,
                'name' => 'clothing_vintagejacket',
                'setid' => '3712,3713',
            ),
            411 => 
            array (
                'id' => 564,
                'name' => 'clothing_r18_frohawk',
                'setid' => '3706',
            ),
            412 => 
            array (
                'id' => 565,
                'name' => 'clothing_r18_tiedwavylocks',
                'setid' => '3707',
            ),
            413 => 
            array (
                'id' => 566,
                'name' => 'clothing_r18_divershelmet',
                'setid' => '3680',
            ),
            414 => 
            array (
                'id' => 567,
                'name' => 'clothing_r18_seahorse',
                'setid' => '3684',
            ),
            415 => 
            array (
                'id' => 454,
                'name' => 'clothing_leafcrown',
                'setid' => '3586',
            ),
            416 => 
            array (
                'id' => 456,
                'name' => 'clothing_hermeshat',
                'setid' => '3585',
            ),
            417 => 
            array (
                'id' => 457,
                'name' => 'clothing_hoplitehelm',
                'setid' => '3583',
            ),
            418 => 
            array (
                'id' => 458,
                'name' => 'clothing_greektoga',
                'setid' => '3581,3582',
            ),
            419 => 
            array (
                'id' => 459,
                'name' => 'clothing_hermesshoes',
                'setid' => '3587',
            ),
            420 => 
            array (
                'id' => 460,
                'name' => 'clothing_octohat',
                'setid' => '3584',
            ),
            421 => 
            array (
                'id' => 461,
                'name' => 'clothing_r17_explorerhelm',
                'setid' => '3589',
            ),
            422 => 
            array (
                'id' => 462,
                'name' => 'clothing_r17_sentinelhelm',
                'setid' => '3588',
            ),
            423 => 
            array (
                'id' => 463,
                'name' => 'clothing_facehugger',
                'setid' => '3590',
            ),
            424 => 
            array (
                'id' => 464,
                'name' => 'clothing_toxicfacehugger',
                'setid' => '3597',
            ),
            425 => 
            array (
                'id' => 465,
                'name' => 'clothing_r17_cursedmask',
                'setid' => '3591',
            ),
            426 => 
            array (
                'id' => 466,
                'name' => 'clothing_r17_boxerbraids',
                'setid' => '3602',
            ),
            427 => 
            array (
                'id' => 467,
                'name' => 'clothing_r17_sharkmask',
                'setid' => '3601',
            ),
            428 => 
            array (
                'id' => 469,
                'name' => 'clothing_cutie',
                'setid' => '3616,3618',
            ),
            429 => 
            array (
                'id' => 470,
                'name' => 'clothing_ribbonband',
                'setid' => '3614',
            ),
            430 => 
            array (
                'id' => 471,
                'name' => 'clothing_r17_elegantcrown',
                'setid' => '3620',
            ),
            431 => 
            array (
                'id' => 472,
                'name' => 'clothing_r17_daveycrockett',
                'setid' => '3622',
            ),
            432 => 
            array (
                'id' => 473,
                'name' => 'clothing_r17_frontierbraids',
                'setid' => '3625',
            ),
            433 => 
            array (
                'id' => 474,
                'name' => 'clothing_r17_goldtophat',
                'setid' => '3633',
            ),
            434 => 
            array (
                'id' => 475,
                'name' => 'clothing_r19_warlocks',
                'setid' => '3846',
            ),
            435 => 
            array (
                'id' => 476,
                'name' => 'clothing_r19_longlonghair',
                'setid' => '3847',
            ),
            436 => 
            array (
                'id' => 477,
                'name' => 'clothing_possessedeyes',
                'setid' => '3845',
            ),
            437 => 
            array (
                'id' => 478,
                'name' => 'clothing_witchhat2',
                'setid' => '3843',
            ),
            438 => 
            array (
                'id' => 479,
                'name' => 'clothing_witchrobes',
                'setid' => '3848,3849',
            ),
            439 => 
            array (
                'id' => 480,
                'name' => 'clothing_r19_demonwings',
                'setid' => '3844',
            ),
            440 => 
            array (
                'id' => 481,
                'name' => 'clothing_brownglasses',
                'setid' => '3727',
            ),
            441 => 
            array (
                'id' => 483,
                'name' => 'clothing_flaredtrench',
                'setid' => '3877,3878',
            ),
            442 => 
            array (
                'id' => 484,
                'name' => 'clothing_habpods',
                'setid' => '3879',
            ),
            443 => 
            array (
                'id' => 485,
                'name' => 'clothing_hitchedjumper',
                'setid' => '3880,3881',
            ),
            444 => 
            array (
                'id' => 486,
                'name' => 'clothing_leatherhoodie',
                'setid' => '3874,3875',
            ),
            445 => 
            array (
                'id' => 487,
                'name' => 'clothing_microbag',
                'setid' => '3876',
            ),
            446 => 
            array (
                'id' => 488,
                'name' => 'clothing_shortfluffy',
                'setid' => '3871',
            ),
            447 => 
            array (
                'id' => 489,
                'name' => 'clothing_shortscarf',
                'setid' => '3882',
            ),
            448 => 
            array (
                'id' => 490,
                'name' => 'clothing_wavy3',
                'setid' => '3870',
            ),
            449 => 
            array (
                'id' => 491,
                'name' => 'clothing_r19_autumndress',
                'setid' => '3868',
            ),
            450 => 
            array (
                'id' => 492,
                'name' => 'clothing_r19_autumnhairpiece',
                'setid' => '3869',
            ),
            451 => 
            array (
                'id' => 493,
                'name' => 'clothing_pompombag',
                'setid' => '3861',
            ),
            452 => 
            array (
                'id' => 494,
                'name' => 'clothing_r19_elisa',
                'setid' => '3866',
            ),
            453 => 
            array (
                'id' => 495,
                'name' => 'clothing_snowmansuit',
                'setid' => '3862,3863,3864',
            ),
            454 => 
            array (
                'id' => 496,
                'name' => 'clothing_frostedbeard',
                'setid' => '3865',
            ),
            455 => 
            array (
                'id' => 497,
                'name' => 'clothing_nordicscarf',
                'setid' => '3867',
            ),
            456 => 
            array (
                'id' => 498,
                'name' => 'clothing_pompomhat',
                'setid' => '3857',
            ),
            457 => 
            array (
                'id' => 499,
                'name' => 'clothing_r19_frosted',
                'setid' => '3860',
            ),
            458 => 
            array (
                'id' => 500,
                'name' => 'clothing_bearmuffs',
                'setid' => '3858',
            ),
            459 => 
            array (
                'id' => 501,
                'name' => 'clothing_icecrown',
                'setid' => '3859',
            ),
            460 => 
            array (
                'id' => 568,
                'name' => 'clothing_c18_cutething',
                'setid' => '3685,3686',
            ),
            461 => 
            array (
                'id' => 569,
                'name' => 'clothing_yetifeet',
                'setid' => '3693',
            ),
            462 => 
            array (
                'id' => 570,
                'name' => 'clothing_mercenary',
                'setid' => '3690,3691',
            ),
            463 => 
            array (
                'id' => 571,
                'name' => 'clothing_inmate',
                'setid' => '3688,3689',
            ),
            464 => 
            array (
                'id' => 572,
                'name' => 'clothing_poncho',
                'setid' => '3692',
            ),
            465 => 
            array (
                'id' => 573,
                'name' => 'clothing_bffhat',
                'setid' => '3667',
            ),
            466 => 
            array (
                'id' => 574,
                'name' => 'clothing_bffshirt',
                'setid' => '3668,3669',
            ),
            467 => 
            array (
                'id' => 575,
                'name' => 'clothing_kpop',
                'setid' => '3670',
            ),
            468 => 
            array (
                'id' => 576,
                'name' => 'clothing_r18_bunniehat',
                'setid' => '3662',
            ),
            469 => 
            array (
                'id' => 577,
                'name' => 'clothing_r18_bunniemask',
                'setid' => '3663',
            ),
            470 => 
            array (
                'id' => 578,
                'name' => 'clothing_r18_dress',
                'setid' => '3672',
            ),
            471 => 
            array (
                'id' => 703,
                'name' => 'clothing_r20_galaxybackpack',
                'setid' => '3883',
            ),
            472 => 
            array (
                'id' => 704,
                'name' => 'clothing_heartnecklace',
                'setid' => '3885',
            ),
            473 => 
            array (
                'id' => 705,
                'name' => 'clothing_r20_kittyearphones',
                'setid' => '3884',
            ),
            474 => 
            array (
                'id' => 706,
                'name' => 'clothing_r19_sparklywaist5',
                'setid' => '3900,3908',
            ),
            475 => 
            array (
                'id' => 707,
                'name' => 'clothing_r19_sparklywaist6',
                'setid' => '3901,3909',
            ),
            476 => 
            array (
                'id' => 708,
                'name' => 'clothing_r19_sparklywaist7',
                'setid' => '3902,3910',
            ),
            477 => 
            array (
                'id' => 709,
                'name' => 'clothing_r19_sparklywaist8',
                'setid' => '3903,3911',
            ),
            478 => 
            array (
                'id' => 710,
                'name' => 'clothing_r19_sparklywaist2',
                'setid' => '3897,3905',
            ),
            479 => 
            array (
                'id' => 711,
                'name' => 'clothing_r19_sparklywaist3',
                'setid' => '3898,3906',
            ),
            480 => 
            array (
                'id' => 712,
                'name' => 'clothing_r19_sparklywaist1',
                'setid' => '3896,3904',
            ),
            481 => 
            array (
                'id' => 713,
                'name' => 'clothing_r19_sparklywaist4',
                'setid' => '3899,3907',
            ),
            482 => 
            array (
                'id' => 714,
                'name' => 'clothing_rat',
                'setid' => '3894,3895',
            ),
            483 => 
            array (
                'id' => 715,
                'name' => 'clothing_r20_quinn',
                'setid' => '3936',
            ),
            484 => 
            array (
                'id' => 716,
                'name' => 'clothing_chocochefoutfit',
                'setid' => '3930,3931,3932,3933',
            ),
            485 => 
            array (
                'id' => 717,
                'name' => 'clothing_r20_tattoo',
                'setid' => '3934,3935',
            ),
            486 => 
            array (
                'id' => 718,
                'name' => 'clothing_c20_goldheartbp',
                'setid' => '3938',
            ),
            487 => 
            array (
                'id' => 719,
                'name' => 'clothing_c20_heartbackpack',
                'setid' => '3937',
            ),
            488 => 
            array (
                'id' => 720,
                'name' => 'clothing_mysticrobes',
                'setid' => '3927,3928',
            ),
            489 => 
            array (
                'id' => 721,
                'name' => 'clothing_nt_yogatop',
                'setid' => '3913,3914',
            ),
            490 => 
            array (
                'id' => 722,
                'name' => 'clothing_nt_campingbackpack',
                'setid' => '3916',
            ),
            491 => 
            array (
                'id' => 723,
                'name' => 'clothing_explorersash',
                'setid' => '3921',
            ),
            492 => 
            array (
                'id' => 724,
                'name' => 'clothing_r20_bunnyoutfit',
                'setid' => '3922,3923,3924',
            ),
            493 => 
            array (
                'id' => 725,
                'name' => 'clothing_puffyvest',
                'setid' => '3917',
            ),
            494 => 
            array (
                'id' => 726,
                'name' => 'clothing_binoculars',
                'setid' => '3919',
            ),
            495 => 
            array (
                'id' => 727,
                'name' => 'clothing_campingbackpack',
                'setid' => '3916',
            ),
            496 => 
            array (
                'id' => 728,
                'name' => 'clothing_yogatop',
                'setid' => '3913,3914',
            ),
            497 => 
            array (
                'id' => 729,
                'name' => 'clothing_nt_puffyvest',
                'setid' => '3917',
            ),
            498 => 
            array (
                'id' => 730,
                'name' => 'clothing_nt_sportshair',
                'setid' => '3926',
            ),
            499 => 
            array (
                'id' => 731,
                'name' => 'clothing_sportshair',
                'setid' => '3926',
            ),
        ));
        \DB::table('catalog_clothing')->insert(array (
            0 => 
            array (
                'id' => 732,
                'name' => 'clothing_mysticcrown',
                'setid' => '3929',
            ),
            1 => 
            array (
                'id' => 733,
                'name' => 'clothing_yogapants',
                'setid' => '3915',
            ),
            2 => 
            array (
                'id' => 734,
                'name' => 'clothing_r20_ponytailcap',
                'setid' => '3920',
            ),
            3 => 
            array (
                'id' => 735,
                'name' => 'clothing_nt_yogapants',
                'setid' => '3915',
            ),
            4 => 
            array (
                'id' => 736,
                'name' => 'clothing_nt_sportsshade',
                'setid' => '3925',
            ),
            5 => 
            array (
                'id' => 737,
                'name' => 'clothing_nt_binoculars',
                'setid' => '3919',
            ),
            6 => 
            array (
                'id' => 738,
                'name' => 'clothing_sportsshade',
                'setid' => '3925',
            ),
            7 => 
            array (
                'id' => 739,
                'name' => 'clothing_nt_explorersash',
                'setid' => '3921',
            ),
            8 => 
            array (
                'id' => 740,
                'name' => 'clothing_rainbowegg',
                'setid' => '3918',
            ),
            9 => 
            array (
                'id' => 741,
                'name' => 'clothing_goldpack4',
                'setid' => '3886,3887,3888,3889,3890,3891,3892,3893,3912',
            ),
            10 => 
            array (
                'id' => 742,
                'name' => 'clothing_towelwraphalf',
                'setid' => '3968',
            ),
            11 => 
            array (
                'id' => 743,
                'name' => 'clothing_eyemask',
                'setid' => '3958',
            ),
            12 => 
            array (
                'id' => 744,
                'name' => 'clothing_maskmint',
                'setid' => '3966',
            ),
            13 => 
            array (
                'id' => 745,
                'name' => 'clothing_towelhair',
                'setid' => '3967',
            ),
            14 => 
            array (
                'id' => 746,
                'name' => 'clothing_eyetomato',
                'setid' => '3959',
            ),
            15 => 
            array (
                'id' => 747,
                'name' => 'clothing_maskrose',
                'setid' => '3964',
            ),
            16 => 
            array (
                'id' => 748,
                'name' => 'clothing_eyecucumber',
                'setid' => '3960',
            ),
            17 => 
            array (
                'id' => 749,
                'name' => 'clothing_towelwrapfull',
                'setid' => '3969,3970',
            ),
            18 => 
            array (
                'id' => 750,
                'name' => 'clothing_maskcitrus',
                'setid' => '3963',
            ),
            19 => 
            array (
                'id' => 751,
                'name' => 'clothing_maskcharcoal',
                'setid' => '3965',
            ),
            20 => 
            array (
                'id' => 752,
                'name' => 'clothing_eyecitrus',
                'setid' => '3962',
            ),
            21 => 
            array (
                'id' => 753,
                'name' => 'clothing_eyestrawberry',
                'setid' => '3961',
            ),
            22 => 
            array (
                'id' => 754,
                'name' => 'clothing_r20_monkeyfezhat',
                'setid' => '3952',
            ),
            23 => 
            array (
                'id' => 755,
                'name' => 'clothing_moviestarmakeup',
                'setid' => '3956',
            ),
            24 => 
            array (
                'id' => 756,
                'name' => 'clothing_cobra',
                'setid' => '3954',
            ),
            25 => 
            array (
                'id' => 757,
                'name' => 'clothing_exoticcape',
                'setid' => '3955',
            ),
            26 => 
            array (
                'id' => 758,
                'name' => 'clothing_headjewel',
                'setid' => '3951',
            ),
            27 => 
            array (
                'id' => 759,
                'name' => 'clothing_moviestarhair',
                'setid' => '3944',
            ),
            28 => 
            array (
                'id' => 760,
                'name' => 'clothing_grandsari',
                'setid' => '3949',
            ),
            29 => 
            array (
                'id' => 761,
                'name' => 'clothing_grandheadjewel',
                'setid' => '3939',
            ),
            30 => 
            array (
                'id' => 762,
                'name' => 'clothing_sherwani',
                'setid' => '3940,3941',
            ),
            31 => 
            array (
                'id' => 763,
                'name' => 'clothing_nt_turban',
                'setid' => '3945',
            ),
            32 => 
            array (
                'id' => 764,
                'name' => 'clothing_turban',
                'setid' => '3945',
            ),
            33 => 
            array (
                'id' => 765,
                'name' => 'clothing_grandsherwani',
                'setid' => '3942,3943',
            ),
            34 => 
            array (
                'id' => 766,
                'name' => 'clothing_nt_moviestarhair',
                'setid' => '3944',
            ),
            35 => 
            array (
                'id' => 767,
                'name' => 'clothing_grandexoticcape',
                'setid' => '3946',
            ),
            36 => 
            array (
                'id' => 768,
                'name' => 'clothing_snake',
                'setid' => '3953',
            ),
            37 => 
            array (
                'id' => 769,
                'name' => 'clothing_nt_moviestarmakeup',
                'setid' => '3956',
            ),
            38 => 
            array (
                'id' => 770,
                'name' => 'clothing_sari',
                'setid' => '3947,3948,3950',
            ),
            39 => 
            array (
                'id' => 771,
                'name' => 'clothing_r20_jewelbraidhair',
                'setid' => '3957',
            ),
            40 => 
            array (
                'id' => 772,
                'name' => 'clothing_studentcap',
                'setid' => '3976',
            ),
            41 => 
            array (
                'id' => 773,
                'name' => 'clothing_nt_studentcap',
                'setid' => '3976',
            ),
            42 => 
            array (
                'id' => 774,
                'name' => 'clothing_mermaid',
                'setid' => '3516',
            ),
            43 => 
            array (
                'id' => 775,
                'name' => 'clothing_nt_zebratop',
                'setid' => '3839,3840',
            ),
            44 => 
            array (
                'id' => 776,
                'name' => 'clothing_nt_flowytop',
                'setid' => '3836',
            ),
            45 => 
            array (
                'id' => 777,
                'name' => 'clothing_nt_loosekimono',
                'setid' => '3826,3827',
            ),
            46 => 
            array (
                'id' => 778,
                'name' => 'clothing_nt_shortcut',
                'setid' => '3829',
            ),
            47 => 
            array (
                'id' => 779,
                'name' => 'clothing_nt_sprout',
                'setid' => '3821',
            ),
            48 => 
            array (
                'id' => 780,
                'name' => 'clothing_nt_leafearrings',
                'setid' => '3833',
            ),
            49 => 
            array (
                'id' => 781,
                'name' => 'clothing_nt_gardenapron',
                'setid' => '3824,3825',
            ),
            50 => 
            array (
                'id' => 782,
                'name' => 'clothing_nt_possessedeyes',
                'setid' => '3845',
            ),
            51 => 
            array (
                'id' => 783,
                'name' => 'clothing_nt_witchrobes',
                'setid' => '3848,3849',
            ),
            52 => 
            array (
                'id' => 784,
                'name' => 'clothing_nt_witchhat2',
                'setid' => '3843',
            ),
            53 => 
            array (
                'id' => 785,
                'name' => 'clothing_nt_shortscarf',
                'setid' => '3882',
            ),
            54 => 
            array (
                'id' => 786,
                'name' => 'clothing_nt_habpods',
                'setid' => '3879',
            ),
            55 => 
            array (
                'id' => 787,
                'name' => 'clothing_nt_flaredtrench',
                'setid' => '3877,3878',
            ),
            56 => 
            array (
                'id' => 788,
                'name' => 'clothing_nt_hitchedjumper',
                'setid' => '3880,3881',
            ),
            57 => 
            array (
                'id' => 789,
                'name' => 'clothing_nt_microbag',
                'setid' => '3876',
            ),
            58 => 
            array (
                'id' => 790,
                'name' => 'clothing_nt_shortfluffy',
                'setid' => '3871',
            ),
            59 => 
            array (
                'id' => 791,
                'name' => 'clothing_nt_leatherhoodie',
                'setid' => '3874,3875',
            ),
            60 => 
            array (
                'id' => 792,
                'name' => 'clothing_nt_wavy3',
                'setid' => '3870',
            ),
            61 => 
            array (
                'id' => 793,
                'name' => 'clothing_nt_pompombag',
                'setid' => '3861',
            ),
            62 => 
            array (
                'id' => 794,
                'name' => 'clothing_nt_frostedbeard',
                'setid' => '3865',
            ),
            63 => 
            array (
                'id' => 795,
                'name' => 'clothing_nt_bearmuffs',
                'setid' => '3858',
            ),
            64 => 
            array (
                'id' => 796,
                'name' => 'clothing_nt_pompomhat',
                'setid' => '3857',
            ),
            65 => 
            array (
                'id' => 797,
                'name' => 'clothing_nt_snowmansuit',
                'setid' => '3862,3863,3864',
            ),
            66 => 
            array (
                'id' => 822,
                'name' => 'clothing_spottedoctohat',
                'setid' => '3984',
            ),
            67 => 
            array (
                'id' => 823,
                'name' => 'clothing_nt_starearrings',
                'setid' => '3974',
            ),
            68 => 
            array (
                'id' => 824,
                'name' => 'clothing_starearrings',
                'setid' => '3974',
            ),
            69 => 
            array (
                'id' => 825,
                'name' => 'clothing_glitzypurse',
                'setid' => '3973',
            ),
            70 => 
            array (
                'id' => 826,
                'name' => 'clothing_nt_flapperdress',
                'setid' => '3995,3996',
            ),
            71 => 
            array (
                'id' => 827,
                'name' => 'clothing_chiseledface',
                'setid' => '3997',
            ),
            72 => 
            array (
                'id' => 828,
                'name' => 'clothing_nt_modernshortwave',
                'setid' => '3998',
            ),
            73 => 
            array (
                'id' => 829,
                'name' => 'clothing_nt_silkgloves',
                'setid' => '3975',
            ),
            74 => 
            array (
                'id' => 830,
                'name' => 'clothing_nt_slickedbackhair',
                'setid' => '3994',
            ),
            75 => 
            array (
                'id' => 831,
                'name' => 'clothing_r20_glitzytux',
                'setid' => '3971,3972',
            ),
            76 => 
            array (
                'id' => 832,
                'name' => 'clothing_pencilmoustache',
                'setid' => '3993',
            ),
            77 => 
            array (
                'id' => 833,
                'name' => 'clothing_nt_glitzypurse',
                'setid' => '3973',
            ),
            78 => 
            array (
                'id' => 834,
                'name' => 'clothing_modernshortwave',
                'setid' => '3998',
            ),
            79 => 
            array (
                'id' => 835,
                'name' => 'clothing_slickedbackhair',
                'setid' => '3994',
            ),
            80 => 
            array (
                'id' => 836,
                'name' => 'clothing_flapperdress',
                'setid' => '3995,3996',
            ),
            81 => 
            array (
                'id' => 837,
                'name' => 'clothing_nt_pencilmoustache',
                'setid' => '3993',
            ),
            82 => 
            array (
                'id' => 838,
                'name' => 'clothing_silkgloves',
                'setid' => '3975',
            ),
            83 => 
            array (
                'id' => 839,
                'name' => 'clothing_nt_chiseledface',
                'setid' => '3997',
            ),
            84 => 
            array (
                'id' => 840,
                'name' => 'clothing_r20_neonpunkset',
                'setid' => '3989,3990,3991,3992',
            ),
            85 => 
            array (
                'id' => 841,
                'name' => 'clothing_r20_gothicset',
                'setid' => '3999,4000,4001,4002',
            ),
            86 => 
            array (
                'id' => 842,
                'name' => 'clothing_h20th',
                'setid' => '4003,4004',
            ),
            87 => 
            array (
                'id' => 843,
                'name' => 'clothing_darkelegantset',
                'setid' => '3985,3986,3987,3988',
            ),
            88 => 
            array (
                'id' => 844,
                'name' => 'clothing_r20_harmonyset',
                'setid' => '3983,3982,3980,3981',
            ),
            89 => 
            array (
                'id' => 845,
                'name' => 'clothing_wingstiara',
                'setid' => '4022',
            ),
            90 => 
            array (
                'id' => 846,
                'name' => 'clothing_r20_slumberoutfit',
                'setid' => '3977,3978,3979',
            ),
            91 => 
            array (
                'id' => 847,
                'name' => 'clothing_cyeyepiece',
                'setid' => '4021',
            ),
            92 => 
            array (
                'id' => 848,
                'name' => 'clothing_r20_cyborgface',
                'setid' => '4015',
            ),
            93 => 
            array (
                'id' => 849,
                'name' => 'clothing_cybuns',
                'setid' => '4020',
            ),
            94 => 
            array (
                'id' => 850,
                'name' => 'clothing_cylegs',
                'setid' => '4017',
            ),
            95 => 
            array (
                'id' => 851,
                'name' => 'clothing_cytrainers',
                'setid' => '4016',
            ),
            96 => 
            array (
                'id' => 852,
                'name' => 'clothing_r20_cyborgwings',
                'setid' => '4026',
            ),
            97 => 
            array (
                'id' => 853,
                'name' => 'clothing_cyfins',
                'setid' => '4019',
            ),
            98 => 
            array (
                'id' => 854,
                'name' => 'clothing_cygasmask',
                'setid' => '4014',
            ),
            99 => 
            array (
                'id' => 855,
                'name' => 'clothing_cyhelmet',
                'setid' => '4018',
            ),
            100 => 
            array (
                'id' => 856,
                'name' => 'clothing_cychest',
                'setid' => '4025',
            ),
            101 => 
            array (
                'id' => 857,
                'name' => 'clothing_multieyesface',
                'setid' => '4023',
            ),
            102 => 
            array (
                'id' => 858,
                'name' => 'clothing_r20_possessedhair',
                'setid' => '4024',
            ),
            103 => 
            array (
                'id' => 859,
                'name' => 'clothing_tentaclehead',
                'setid' => '4009',
            ),
            104 => 
            array (
                'id' => 860,
                'name' => 'clothing_webskirt',
                'setid' => '4012',
            ),
            105 => 
            array (
                'id' => 861,
                'name' => 'clothing_nt_pumpkinbag',
                'setid' => '4005',
            ),
            106 => 
            array (
                'id' => 862,
                'name' => 'clothing_nt_ghost',
                'setid' => '4006',
            ),
            107 => 
            array (
                'id' => 863,
                'name' => 'clothing_pumpkinbag',
                'setid' => '4005',
            ),
            108 => 
            array (
                'id' => 864,
                'name' => 'clothing_crookedhat',
                'setid' => '4007',
            ),
            109 => 
            array (
                'id' => 865,
                'name' => 'clothing_ghost',
                'setid' => '4006',
            ),
            110 => 
            array (
                'id' => 866,
                'name' => 'clothing_nt_webskirt',
                'setid' => '4012',
            ),
            111 => 
            array (
                'id' => 867,
                'name' => 'clothing_nt_clownmask',
                'setid' => '4013',
            ),
            112 => 
            array (
                'id' => 868,
                'name' => 'clothing_r20_pumpkinoutfit',
                'setid' => '4008,4010,4011',
            ),
            113 => 
            array (
                'id' => 869,
                'name' => 'clothing_clownmask',
                'setid' => '4013',
            ),
            114 => 
            array (
                'id' => 870,
                'name' => 'clothing_unicornrainbow',
                'setid' => '4038',
            ),
            115 => 
            array (
                'id' => 871,
                'name' => 'clothing_r20_teddybpack',
                'setid' => '4037',
            ),
            116 => 
            array (
                'id' => 872,
                'name' => 'clothing_r20_bearset',
                'setid' => '4039,4040,4041',
            ),
            117 => 
            array (
                'id' => 873,
                'name' => 'clothing_nt_kilt',
                'setid' => '4034',
            ),
            118 => 
            array (
                'id' => 874,
                'name' => 'clothing_r20_dragonflywings',
                'setid' => '4032',
            ),
            119 => 
            array (
                'id' => 875,
                'name' => 'clothing_kilttop',
                'setid' => '4033',
            ),
            120 => 
            array (
                'id' => 876,
                'name' => 'clothing_kilt',
                'setid' => '4034',
            ),
            121 => 
            array (
                'id' => 877,
                'name' => 'clothing_lanternstaff',
                'setid' => '4036',
            ),
            122 => 
            array (
                'id' => 878,
                'name' => 'clothing_nt_kilttop',
                'setid' => '4033',
            ),
            123 => 
            array (
                'id' => 879,
                'name' => 'clothing_nt_lanternstaff',
                'setid' => '4036',
            ),
            124 => 
            array (
                'id' => 880,
                'name' => 'clothing_r20_inuit',
                'setid' => '4027,4028,4029,4030',
            ),
            125 => 
            array (
                'id' => 881,
                'name' => 'clothing_braidedwavyhair',
                'setid' => '4031',
            ),
            126 => 
            array (
                'id' => 882,
                'name' => 'clothing_nt_braidedwavyhair',
                'setid' => '4031',
            ),
            127 => 
            array (
                'id' => 883,
                'name' => 'clothing_r20_mask3',
                'setid' => '4044',
            ),
            128 => 
            array (
                'id' => 884,
                'name' => 'clothing_r20_mask1',
                'setid' => '4042',
            ),
            129 => 
            array (
                'id' => 885,
                'name' => 'clothing_r20_mask2',
                'setid' => '4043',
            ),
            130 => 
            array (
                'id' => 886,
                'name' => 'clothing_r20_mask4',
                'setid' => '4045',
            ),
            131 => 
            array (
                'id' => 887,
                'name' => 'clothing_r20_mask5',
                'setid' => '4046',
            ),
            132 => 
            array (
                'id' => 888,
                'name' => 'clothing_r20_mask6',
                'setid' => '4047',
            ),
            133 => 
            array (
                'id' => 889,
                'name' => 'clothing_r20_mask7',
                'setid' => '4048',
            ),
            134 => 
            array (
                'id' => 890,
                'name' => 'clothing_r20_mask8',
                'setid' => '4049',
            ),
            135 => 
            array (
                'id' => 891,
                'name' => 'clothing_r21_sunnycloudhat',
                'setid' => '4061',
            ),
            136 => 
            array (
                'id' => 892,
                'name' => 'clothing_goldhatpack1',
                'setid' => '4050,4051,4052,4053,4054,4055,4056,4057',
            ),
            137 => 
            array (
                'id' => 893,
                'name' => 'clothing_oxset',
                'setid' => '4058,4059,4060',
            ),
        ));
        
        
    }
}