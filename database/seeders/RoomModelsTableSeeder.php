<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_models')->delete();
        
        \DB::table('room_models')->insert(array (
            0 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 15,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxx
x22222222222222222222x
x22222222222222222222x
x22222222222222222222x
x22222222222222222222x
x22222222222222222222x
x22222222222222222222x
x22222222222222222222x
x000x11xxxxxxxx11x000x
x00000000000000000000x
x00000000000000000000x
x00000000000000000000x
x00000000000000000000x
x00000000000000000000x
x00000000000000000000x
x00000000000000000000x
x00000000000000000000x
x00000000000000000000x
xxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_basa',
                'public_items' => '',
            ),
            1 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 12,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxx
xXXXXXXXX9999999999999x
xXXXXXXXX9999999999999x
xXXXXXXXX9999999999999x
xXXXXXXXX9999999999999x
x00000000XXXXXXX999999x
x00000000XXXXXXX999999x
x00000000XXXXXXX999999x
x00000000XXXXXXX999999x
x000000000000000999999x
x000000000000000999999x
x000000000000000999999x
0000000000000000999999x
x000000000000000XXXXXXx
x000000000000000XXXXXXx
x000000000000000XXXXXXx
x000000000000000XXXXXXx
x000000000000000XXXXXXx
x000000000000000XXXXXXx
xxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_4',
                'public_items' => '',
            ),
            2 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 10,
                'heightmap' => 'XXXXXXXXXXXXXXXXX
XXX0000000000000X
XXX0000000000000X
XXX0000000000000X
XXX0000000000000X
XXX0000000000000X
XXX0000000000000X
X000000000000000X
X000000000000000X
X000000000000000X
0000000000000000X
X000000000000000X
X000000000000000X
X000000000000000X
XXXXXXXXXXXXXXXXX',
                'name' => 'model_3',
                'public_items' => '',
            ),
            3 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 0,
                'heightmap' => 'xxxxxxxxxxxxxx
x00000x000000x
x000000000000x
x00000x000000x
x00000x000000x
x00000x000000x
x00000x000000x
xxx0xxx000000x
x000000000000x
x000000000000x
x000000000000x
x000000000000x
x000000000000x
x000000000000x
x000000000000x
x000000000000x
x000000000000x
x00000xx00000x
xxxxxxxxxxxxxx',
                'name' => 'model_b2g',
                'public_items' => '',
            ),
            4 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 23,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxx
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x2222xx111111111111
x2222xx000000000000
x2222xx000000000000
x2222xx000000000000
x2222xx000000000000
x2222xx000000000000
22222xx000000000000
x2222xx000000000000
xxxxxxxxxxxxxxxxxxx',
                'name' => 'model_opening',
                'public_items' => '',
            ),
            5 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 3,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx
x00000000xx0000000000xx0000x
x00000000xx0000000000xx0000x
000000000xx0000000000xx0000x
x00000000xx0000000000xx0000x
x00000000xx0000xx0000xx0000x
x00000000xx0000xx0000xx0000x
x00000000xx0000xx0000000000x
x00000000xx0000xx0000000000x
xxxxx0000xx0000xx0000000000x
xxxxx0000xx0000xx0000000000x
xxxxx0000xx0000xxxxxxxxxxxxx
xxxxx0000xx0000xxxxxxxxxxxxx
x00000000xx0000000000000000x
x00000000xx0000000000000000x
x00000000xx0000000000000000x
x00000000xx0000000000000000x
x0000xxxxxxxxxxxxxxxxxx0000x
x0000xxxxxxxxxxxxxxxxxx0000x
x00000000000000000000000000x
x00000000000000000000000000x
x00000000000000000000000000x
x00000000000000000000000000x
xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_y',
                'public_items' => '',
            ),
            6 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 15,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx11111111xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxx11xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111111111111100000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111111111111100000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x1111111x11111111x00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxx11xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_oscar',
                'public_items' => '',
            ),
            7 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 17,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxx
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
11111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
x1111100000000000000000x
xxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_u',
                'public_items' => '',
            ),
            8 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 9,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxx00000000000000000000
xxxxxxxxxxx00000000000000000000
xxxxxxxxxxx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
000000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
x00000000xx00000000000000000000
xxxxxxxxxxx00000000000000000000
xxxxxxxxxxx00000000000000000000
xxxxxxxxxxx00000000000000000000
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_z',
                'public_items' => '',
            ),
            9 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 3,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxx
x2222xx1111111111xx11111111
x2222xx1111111111xx11111111
222222111111111111111111111
x22222111111111111111111111
x22222111111111111111111111
x22222111111111111111111111
x2222xx1111111111xx11111111
x2222xx1111111111xx11111111
x2222xx1111111111xxxx1111xx
x2222xx1111111111xxxx0000xx
xxxxxxx1111111111xx00000000
xxxxxxx1111111111xx00000000
x22222111111111111000000000
x22222111111111111000000000
x22222111111111111000000000
x22222111111111111000000000
x2222xx1111111111xx00000000
x2222xx1111111111xx00000000
x2222xxxx1111xxxxxxxxxxxxxx
x2222xxxx0000xxxxxxxxxxxxxx
x2222x0000000000xxxxxxxxxxx
x2222x0000000000xxxxxxxxxxx
x2222x0000000000xxxxxxxxxxx
x2222x0000000000xxxxxxxxxxx
x2222x0000000000xxxxxxxxxxx
x2222x0000000000xxxxxxxxxxx',
                'name' => 'model_w',
                'public_items' => '',
            ),
            10 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 12,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxx
x000000000000000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
xxx00xxx0000xxx00xxx
x000000x0000x000000x
x000000x0000x000000x
x000000x0000x000000x
x000000x0000x000000x
0000000x0000x000000x
x000000x0000x000000x
x000000x0000x000000x
x000000x0000x000000x
x000000x0000x000000x
x000000x0000x000000x
x000000xxxxxx000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
xxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_x',
                'public_items' => '',
            ),
            11 => 
            array (
                'club_only' => '0',
                'door_dir' => 6,
                'door_x' => 11,
                'door_y' => 2,
                'heightmap' => '0000x0000000
0000xx000000
000000000000
00000000000x
000000000000
00x0000x0000',
                'name' => 'park_b',
                'public_items' => '',
            ),
            12 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 4,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000
000000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000
x00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000
x00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0000
x00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x00000000xx00000000xx00000000xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_0',
                'public_items' => '',
            ),
            13 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 3,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxx
x222221111111111111x
x222221111111111111x
2222221111111111111x
x222221111111111111x
x222221111111111111x
x222221111111111111x
xxxxxxxx1111xxxxxxxx
xxxxxxxx0000xxxxxxxx
x000000x0000x000000x
x000000x0000x000000x
x00000000000x000000x
x00000000000x000000x
x000000000000000000x
x000000000000000000x
xxxxxxxx00000000000x
x000000x00000000000x
x000000x0000xxxxxxxx
x00000000000x000000x
x00000000000x000000x
x00000000000x000000x
x00000000000x000000x
xxxxxxxx0000x000000x
x000000x0000x000000x
x000000x0000x000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
x000000000000000000x
xxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_v',
                'public_items' => '',
            ),
            14 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 3,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x222222222222222222222222222x
x222222222222222222222222222x
2222222222222222222222222222x
x222222222222222222222222222x
x2222xxxxxx222222xxxxxxx2222x
x2222xxxxxx111111xxxxxxx2222x
x2222xx111111111111111xx2222x
x2222xx111111111111111xx2222x
x2222xx11xxx1111xxxx11xx2222x
x2222xx11xxx0000xxxx11xx2222x
x22222111x00000000xx11xx2222x
x22222111x00000000xx11xx2222x
x22222111x00000000xx11xx2222x
x22222111x00000000xx11xx2222x
x22222111x00000000xx11xx2222x
x22222111x00000000xx11xx2222x
x2222xx11xxxxxxxxxxx11xx2222x
x2222xx11xxxxxxxxxxx11xx2222x
x2222xx111111111111111xx2222x
x2222xx111111111111111xx2222x
x2222xxxxxxxxxxxxxxxxxxx2222x
x2222xxxxxxxxxxxxxxxxxxx2222x
x222222222222222222222222222x
x222222222222222222222222222x
x222222222222222222222222222x
x222222222222222222222222222x
xxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_t',
                'public_items' => '',
            ),
            15 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 3,
                'heightmap' => 'xxxxxx
x00000
x00000
000000
x00000
x00000
x00000
x00000',
                'name' => 'model_s',
                'public_items' => '',
            ),
            16 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 2,
                'door_y' => 15,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx0xxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx00xxxxxxxxxxxx
xxxxxxxxxxxxx0x00xxxxxxxxxxx0x000xxxxxxxxxxx
xxxxxxxxxxxx0000000000000000000000xxxxxxxxxx
xxxxxxxxxxx000000000000000000000000xxxxxxxxx
xxxxxxxxxxx0000000000000000000000000xxxxxxxx
xxxxxxxxxxx00000000000000000000000000xxxxxxx
xxxxxxxx000000000000000000000000000000xxxxxx
xxxxxxx00000000000000000000000000000000xxxxx
xxxxxxx000000000000000000000000000000000xxxx
xxxxxxx0000000000000000000000000000000000xxx
xxxxxxxxx000000000000000000000000000000000xx
00000000000000000000xx00000000000000000000xx
0000000000000000000xxxx00000000000xxxxxxx0xx
0000000000000000000xxxx00000000000x00000xxxx
xxxxx00x0000000000xxxxx0xxxxxx0000x0000000xx
xxxxx0000000000000xxxxx0xx000x0000x000000xxx
xxxxx0000000000000xxxxx0x000000000x00000xxxx
xxxxx000000x0000000xxxx0x000000000xxx00xxxxx
xxxxxxxx000x0000000xxx00xxx000000x0000xxxxxx
xxxxxxxx000x000000xxxx0x0000000000000xxxxxxx
xxxxxxxx000x000000011100000000000000xxxxxxxx
xxxxxxxx000x00000001110000000000000xxxxxxxxx
xxxxxxxxx00x0000000111x00000000x00xxxxxxxxxx
xxxxxxxxxx0x0000000xxx0000000xxxxxxxxxxxxxxx
xxxxxxxxxxxx000000xxxx0000000xxxxxxxxxxxxxxx
xxxxxxxxxxxx000000xxx00xxxxx00xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxx0xxx0xx000x00xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxx0xxx0x000000xxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxx0xxxxx00000xxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxx0xxxxx00xxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxx0xxxxxxxxxxxxxxxxxxxx',
                'name' => 'park_a',
                'public_items' => 'RPHN527parkfence2SFQAHHHN529parkfence2QGQAHHHM619parkfence1SDRAHHHO620parkfence3PERAHPAHO621parkfence3QERAHPAHO622parkfence3RERAHPAHN623parkfence2SERAHPAHO624parkfence3PFRAHPAHO625parkfence3QFRAHPAHO626parkfence3RFRAHPAHM627parkfence1SFRAHJHO629parkfence3QGRAHJHN717parkfence2QDSAHHHO719parkfence3SDSAHJHO723parkfence3SESAHJHO727parkfence3SFSAHJHO729parkfence3QGSAHJHO817parkfence3QDPBHJHO819parkfence3SDPBHJHN821parkfence2QEPBHHHO823parkfence3SEPBHJHN825parkfence2QFPBHHHO827parkfence3SFPBHJHO829parkfence3QGPBHJHL98bench2PBQBHPAHK99benchQBQBHPAHO917parkfence3QDQBHJHN919parkfence2SDQBHRAHO921parkfence3QEQBHJHN923parkfence2SEQBHRAHO925parkfence3QFQBHJHN927parkfence2SFQBHRAHO929parkfence3QGQBHJHO1017parkfence3QDRBHJHO1021parkfence3QERBHJHO1025parkfence3QFRBHJHO1029parkfence3QGRBHJHL117bench2SASBHJHM1117parkfence1QDSBHPAHO1118parkfence3RDSBHPAHO1119parkfence3SDSBHPAHO1120parkfence3PESBHPAHN1121parkfence2QESBHJHO1122parkfence3RESBHPAHO1123parkfence3SESBHPAHO1124parkfence3PFSBHPAHN1125parkfence2QFSBHJHO1126parkfence3RFSBHPAHO1127parkfence3SFSBHPAHO1128parkfence3PGSBHPAHM1129parkfence1QGSBHRAHK127benchSAPCHJHL1635bench2SHPDHJHL1637bench2QIPDHPAHK1638benchRIPDHPAHK1735benchSHQDHJHL1827bench2SFRDHPAHK1828benchPGRDHPAHL1835bench2SHRDHJHL1925bench2QFSDHJHK1935benchSHSDHJHK2025benchQFPEHJHL2925bench2QFQGHPAHK2926benchRFQGHPAHL3023bench2SERGHJHK3123benchSESGHJ@`SGSBMRDPBPA0.0I2Mqueue_tile2JMPGRAH0.0I2Mqueue_tile2SAMPFSAJ0.0I2Mqueue_tile2QBMRFSAPA0.0I2Mqueue_tile2SFMSERBJ0.0I2Mqueue_tile2SCMRFPBPA0.0I2Mqueue_tile2REMPGQBH0.0I2Mqueue_tile2PGMPFRBH0.0I2Mqueue_tile2PCMPEPBH0.0I2Mqueue_tile2QGMRFRBJ0.0I2Mqueue_tile2QDMRDQBPA0.0I2Mqueue_tile2RFMRERBJ0.0I2Mqueue_tile2PFMSDRBJ0.0I2Mqueue_tile2PDMPGPBH0.0I2Mqueue_tile2RGMSFRBJ0.0I2Mqueue_tile2RAMRESAPA0.0I2Mqueue_tile2RBMPGSAH0.0I2Mqueue_tile2SDMREQBPA0.0I2Mqueue_tile2QEMRFQBPA0.0I2Mqueue_tile2RCMPFPBH0.0I2Mqueue_tile2KMRDSAPA0.0I2Mqueue_tile2PAMPESAJ0.0I2Mqueue_tile2PBMQFSAJ0.0I2Mqueue_tile2IMPGQAH0.0I2Mqueue_tile2SEMRDRBJ0.0I2Mqueue_tile2QCMREPBPA0.0I2Mqueue_tile2SGMPGRBH0.0I2Mqueue_tile2QAMQESAJ0.0I2Mqueue_tile2QFMPERBH0.0I2Mqueue_tile2RDMPEQBH0.0I2Mqueue_tile2PEMPFQBH0.0I2Mqueue_tile2',
            ),
            17 => 
            array (
                'club_only' => '0',
                'door_dir' => 0,
                'door_x' => 3,
                'door_y' => 22,
                'heightmap' => '00000000xxxxxxxx
0000000000000000
0000000000000000
000000000000xx00
0000000000000000
0000000000000000
0000000000000000
x000000000000000
0000000000000000
0000000000000000
0000000000000000
0000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
xxx00xxxxxxxxxxx
xxx00xxxxxxxxxxx
xxx00xxxxxxxxxxx
GV00000000xxxxxxxx
0000000000000000
0000000000000000
000000000000xx00
0000000000000000
0000000000000000
0000000000000000
x000000000000000
0000000000000000
0000000000000000
0000000000000000
0000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
x000000000000000
xxx00xxxxxxxxxxx
xxx00xxxxxxxxxxx
xxx00xxxxxxxxxxx',
                'name' => 'the_den',
                'public_items' => '',
            ),
            18 => 
            array (
                'club_only' => '0',
                'door_dir' => 0,
                'door_x' => 20,
                'door_y' => 27,
                'heightmap' => 'xxxxxxx1xx11111111xxxxxx
xxx1111111111111111xxxxx
xxx111xxxx1111111111xxxx
xxxx2xxxxxxxxxxxxxxxxxxx
xx3x3x333311xxxxxxxxxx11
xx3333333311111111111111
xx3333333311111111111111
xx3333333311111111122111
xx3333333311x22222222111
xx3333333311x22222222111
xx3333333311xxxxxxxxx111
xx3333333311111111111111
xx3333333311111111111111
xx3333333311111111111111
xx3333333311111xxxx11111
xx3333333311111xxxx11111
xx3333333311111xxxx11111
xx3333333311111xxxx11111
xx3333333311111xxxx11111
xx3333333311111xxxx11111
xx3333333311111xxxx11111
333333332111111xxxx11111
333333332111111111111111
333333332111111111111111
333333332111111111111111
xx3333332111111111111111
xxxxxxxxxxxxxxxxxxx11111
xxxxxxxxxxxxxxxxxxx11111
xxxxxxxxxxxxxxxxxxx11111',
                'name' => 'cinema_a',
                'public_items' => 'PUHC42orangeJPAKHHA47loungey_chairSAPAKJHV48loungey_tablebigbPBPAKHHA49loungey_chairQBPAKRAHA52loungey_chairJQAKPAHA57loungey_chairSAQAKJHU58loungey_tablebigaPBQAKHHA59loungey_chairQBQAKRAHB62loungey_tableJRAKHHA72loungey_chairJSAKHHh713theater_chairQCSAIHHh714theater_chairRCSAIHHh715theater_chairSCSAIHHh716theater_chairPDSAIHHh717theater_chairQDSAIHHh718theater_chairRDSAIHHz721stairQESAIHHL89lightpoleQBPBKHHq813pomomaskiQCPBJJHq814pomomaskiRCPBJHHq815pomomaskiSCPBJHHq816pomomaskiPDPBJHHq817pomomaskiQDPBJHHq818pomomaskiRDPBJHHq819pomomaskiSDPBJIHz821stairQEPBIHHC92orangeJQBKHHh913theater_chairQCQBJHHh914theater_chairRCQBJHHh915theater_chairSCQBJHHh916theater_chairPDQBJHHh917theater_chairQDQBJHHh918theater_chairRDQBJHHh919theater_chairSDQBJHHh920theater_chairPEQBJHHz921stairQEQBIHHA102loungey_chairJRBKPAHA109loungey_chairQBRBKPAHB112loungey_tableJSBKHHB119loungey_tableQBSBKHHA122loungey_chairJPCKHHA129loungey_chairQBPCKHHd1217cubicb_chairQDPCIRAHc1219cubico_chairSDPCIJHd1315cubicb_chairSCQCIJHL1319lightpoleSDQCIHHd1320cubicb_chairPEQCIRAHL149lightpoleQBRCKHHA152loungey_chairJSCKPAHd1514cubicb_chairRCSCIPAHc1519cubico_chairSDSCIPAHB162loungey_tableJPDKHHA167loungey_chairSAPDKJHB168loungey_tablePBPDKJHA169loungey_chairQBPDKRAHd1613cubicb_chairQCPDIJHd1614cubicb_chairRCPDIRAHC1619orangeSDPDIHHA172loungey_chairJQDKHHA177loungey_chairSAQDKJHB178loungey_tablePBQDKJHA179loungey_chairQBQDKRAHd1719cubicb_chairSDQDIJHC182orangeJRDKHHd1814cubicb_chairRCRDIPAHK192bardesqueJSDKHHK202bardesqueJPEKIHb203bar_chairKPEKRAHL209lightpoleQBPEKHHd2014cubicb_chairRCPEIHHd2019cubicb_chairSDPEIJHc2020cubico_chairPEPEIRAHK212bardesqueJQEKIHb213bar_chairKQEKRAHd2119cubicb_chairSDQEIHHK222bardesqueJREKIHb223bar_chairKREKRAHL2216lightpolePDREIHHc2218cubico_chairRDREIHHK232bardesqueJSEKIHb233bar_chairKSEKRAHK242bardesqueJPFKIHb243bar_chairKPFKRAHK252bardesqueJQFKJ',
            ),
            19 => 
            array (
                'club_only' => '0',
                'door_dir' => 4,
                'door_x' => 16,
                'door_y' => 5,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xx22222xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
22xxxxxxxxxxxxx22xxxxxxxxxxxxxxxxxxxxx
2222222222222222222x222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222xxx222222222222222222222222
2222222222xx33x22222222222222222222222
222222222xx3333x2222222222222222222222
222222222x333333x222222222222222222222
222222222x333333x222222222222222222222
2222222222x3332x2222222222222222222222
22222222222x33x22222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222x22222xxxx22222222222222222222
22222222222222xxxx22222222222222222222
22222222222222xxx222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222
22222222222222222222222222222222222222',
                'name' => 'picnic',
                'public_items' => 'PcHh710hedge7RBSAJPAHh711hedge7SBSAJPAHh712hedge7PCSAJPAHh713hedge7QCSAJPAHy714hedge8RCSAJPAHs718hedge2RDSAJPAHh719hedge7SDSAJPAHh720hedge7PESAJPAHh721hedge7QESAJPAHz814hedge9RCPBJPAHz818hedge9RDPBJPAHv93hedge5KQBJPAHz103hedge9KRBJPAHc1112picnic_dummychair1PCSBKPAHc1113picnic_dummychair1QCSBKPAHc1114picnic_dummychair1RCSB`hFFPAHc1310picnic_dummychair1RBQCKJHc1315picnic_dummychair1SCQCKRAHb1321picnic_groundQEQCJPAHb147picnic_groundSARCJPAHc1410picnic_dummychair1RBRCKJHc1415picnic_dummychair1SCRCKRAHb1519picnic_groundSDSCJJHb1523picnic_groundSESCJRAHb165picnic_groundQAPDJJHb169picnic_groundQBPDJRAHL1620picnic_cloth1PEPDJJHL176picnic_cloth1RAQDJJHb1721picnic_groundQEQDJHHb187picnic_groundSARDJHHa190picnic_redbench2HSDJJHA200picnic_redbench1HPEJJHw2011hedge6SBPEJPAHh2012hedge7PCPEJPAHh2013hedge7QCPEJPAHt2014hedge3RCPEJPAHu2017hedge4QDPEJPAHh2018hedge7RDPEJPAHh2019hedge7SDPEJPAHy2020hedge8PEPEJPAHv2111hedge5SBQEJPAHM2112picnic_bench1PCQEJPAHN2113picnic_bench2QCQEJPAHO2114picnic_bench3RCQEJPAHM2117picnic_bench1QDQEJPAHN2118picnic_bench2RDQEJPAHO2119picnic_bench3SDQEJPAHv2120hedge5PEQEJPAHa220picnic_redbench2HREJJHv2211hedge5SBREJPAHv2220hedge5PEREJPAHb2225picnic_groundQFREJPAHA230picnic_redbench1HSEJJHv2311hedge5SBSEJPAHM2312picnic_bench1PCSEJJHM2319picnic_bench1SDSEJRAHv2320hedge5PESEJPAHc246picnic_dummychair1RAPFJPAHd247picnic_dummychair4SAPFJPAHe248picnic_dummychair6PBPFJPAHv2411hedge5SBPFJPAHN2412picnic_bench2PCPFJJHN2419picnic_bench2SDPFJRAHv2420hedge5PEPFJPAHb2423picnic_groundSEPFJJHb2427picnic_groundSFPFJRAHK255picnic_stumpQAQFJJHv2511hedge5SBQFJPAHN2512picnic_bench2PCQFJJHN2519picnic_bench2SDQFJRAHv2520hedge5PEQFJPAHG2524picnic_cloth2PFQFJJHK267picnic_stumpSARFJHHv2611hedge5SBRFJPAHO2612picnic_bench3PCRFJJHH2614picnic_fireplace1RCRFJHHI2616picnic_fireplace2PDRFJJHO2619picnic_bench3SDRFJRAHv2620hedge5PERFJPAHb2625picnic_groundQFRFJHHz2711hedge9SBSFJPAHQ2712picnic_lemonadePCSFJPAHz2720hedge9PESFJPAHE298picnic_firewood2PBQGJHHa300picnic_redbench2HRGJJHD308picnic_firewood1PBRGJHHA310picnic_redbench1HSGJJHD318picnic_firewood1PBSGJHHM3112picnic_bench1PCSGJPAHN3113picnic_bench2QCSGJPAHO3114picnic_bench3RCSGJPAHM3118picnic_bench1RDSGJPAHN3119picnic_bench2SDSGJPAHO3120picnic_bench3PESGJPAHf3127picnic_carrotSFSGJHHf3128picnic_carrotPGSGJHHf3129picnic_carrotQGSGJHHf3130picnic_carrotRGSGJHHf3131picnic_carrotSGSGJHHD328picnic_firewood1PBPHJHHF3212picnic_table2PCPHJJHP3214picnic_tableRCPHJJHF3218picnic_table2RDPHJJHP3220picnic_tablePEPHJJHr333hedge1KQHJPAHD338picnic_firewood1PBQHJHHM3312picnic_bench1PCQHJHHN3313picnic_bench2QCQHJHHO3314picnic_bench3RCQHJHHM3318picnic_bench1RDQHJHHN3319picnic_bench2SDQHJHHO3320picnic_bench3PEQHJHHg3327picnic_cabbageSFQHJHHg3328picnic_cabbagePGQHJHHg3329picnic_cabbageQGQHJHHv343hedge5KRHJPAHD348picnic_firewood1PBRHJHHv353hedge5KSHJPAHD358picnic_firewood1PBSHJHHv363hedge5KPIJPAHD368picnic_firewood1PBPIJHHD378picnic_firewood1PBQIJHHM3712picnic_bench1PCQIJPAHN3713picnic_bench2QCQIJPAHO3714picnic_bench3RCQIJPAHM3718picnic_bench1RDQIJPAHN3719picnic_bench2SDQIJPAHO3720picnic_bench3PEQIJPAHD388picnic_firewood1PBRIJHHF3812picnic_table2PCRIJJHP3814picnic_tableRCRIJJHF3818picnic_table2RDRIJJHP3820picnic_tablePERIJJHJ398picnic_firewood3PBSIJHHM3912picnic_bench1PCSIJHHN3913picnic_bench2QCSIJHHO3914picnic_bench3RCSIJHHM3918picnic_bench1RDSIJHHN3919picnic_bench2SDSIJHHO3920picnic_bench3PESIJH',
            ),
            20 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 0,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxx0000000000000xxxx
xxxxxxxxxxx000000000000000xxx
xxxxxxxxxx00000000000000000xx
xxxxxxxxxx00000000000000000xx
xxxxxxxxxx00000000000000000xx
xxxxxxxxxx11111111111111111xx
xxxxxxxxxx22222222222222222xx
xxxxxxxxxx22222222222222222xx
xxxxxxxxxx22222222222222222xx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'custom_model',
                'public_items' => '',
            ),
            21 => 
            array (
                'club_only' => '0',
                'door_dir' => 0,
                'door_x' => 20,
                'door_y' => 27,
                'heightmap' => 'XXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXX
XXXXXXX111111111XXXXXXX
XXXXXXX11111111100000XX
XXXX00X11111111100000XX
XXXX00x11111111100000XX
4XXX00X11111111100000XX
4440000XXXXXXXXX00000XX
444000000000000000000XX
4XX000000000000000000XX
4XX0000000000000000000X
44400000000000000000000
44400000000000000000000
44X00000000000000000000
44X11111111111111111000
44X11111111111111111000
33X11111111111111111000
22X11111111111111111000
22X11111111111111111000
22X11111111111111111000
22X11111111111111111000
22X11111111111111111000
22211111111111111111000
22211111111111111111000
XXXXXXXXXXXXXXXXXXXX00X
XXXXXXXXXXXXXXXXXXXX00X',
                'name' => 'theater',
                'public_items' => 'QKHm1011micSBRBIHHd112thchair2JSBPAJHd122thchair2JPCPAJHd152thchair2JSCPAJHc156thchair1RASCHHHc157thchair1SASCHHHc158thchair1PBSCHHHc159thchair1QBSCHHHc1510thchair1RBSCHHHc1512thchair1PCSCHHHc1513thchair1QCSCHHHc1514thchair1RCSCHHHc1515thchair1SCSCHHHc1516thchair1PDSCHHHd162thchair2JPDPAJHc206thchair1RAPEIHHc207thchair1SAPEIHHc208thchair1PBPEIHHc209thchair1QBPEIHHc2010thchair1RBPEIHHc2012thchair1PCPEIHHc2013thchair1QCPEIHHc2014thchair1RCPEIHHc2015thchair1SCPEIHHc2016thchair1PDPEIHHc236thchair1RASEIHHc237thchair1SASEIHHc238thchair1PBSEIHHc239thchair1QBSEIHHc2310thchair1RBSEIHHc2312thchair1PCSEIHHc2313thchair1QCSEIHHc2314thchair1RCSEIHHc2315thchair1SCSEIHHc2316thchair1PDSEIHHc266thchair1RARFIHHc267thchair1SARFIHHc268thchair1PBRFIHHc269thchair1QBRFIHHc2610thchair1RBRFIHHc2612thchair1PCRFIHHc2613thchair1QCRFIHHc2614thchair1RCRFIHHc2615thchair1SCRFIHHc2616thchair1PDRFIH',
            ),
            22 => 
            array (
                'club_only' => '0',
                'door_dir' => 6,
                'door_x' => 35,
                'door_y' => 22,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxx00000000xxxxxxxxxxxx
xxxxxxxxxxxxxx1000000000xxxxxxxxxxxx
xxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxx1xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxx1xx000x000xx111x111xxx
xxxxxxxxxxxxxx1xx000x000xxxxxx1111xx
xxxxxxxxxxxxxx1xx000x000x111111111xx
xxxxxxxxxxxxxx1xx000x000x111111111xx
xxx111111111111xx000x000x111111111xx
xxx1xxxxxxxxxxxxx000x000x111111111xx
xxx1x1111111111000000000x111111111xx
xxx1x1111111111000000000xx1111111xxx
xxx1x11xxxxxx11000000000xx1111111100
xxx111xxxxxxx11000000000011111111100
xxx111xxxxxxx11000000000011111111100
xxxxx1xxxxxxx11000000000011111111100
xxxxx11xxxxxx11000000000xx1111111100
xxxxx1111111111000000000xx1111111xxx
xxxxx1111111111xx000x000x111111111xx
xxxxxxxxxxxxxxxxx000x000x111111111xx
xxxxxxxxxxxxxxxxx000x000x111111111xx
xxxxxxxxxxxxxxxxx000x000x111111111xx
xxxxxxxxxxxxxxxxx000x000x111111111xx
xxxxxxxxxxxxxxxxx000x00xx11xxxx111xx
xxxxxxxxxxxxxxxxxxxxxxxxxx11111111xx',
                'name' => 'orient',
                'public_items' => 'SOHd1017benchQDRBHJHd1019benchSDRBHRAHd1021benchQERBHJHd1023benchSERBHRAHd1117benchQDSBHJHd1119benchSDSBHRAHd1121benchQESBHJHd1123benchSESBHRAHb1132koc_chairPHSBIPAHd1217benchQDPCHJHd1219benchSDPCHRAHd1221benchQEPCHJHd1223benchSEPCHRAHb1231koc_chairSGPCIJHa1232koc_tablePHPCIHHb1233koc_chairQHPCIRAHd1317benchQDQCHJHd1319benchSDQCHRAHd1321benchQEQCHJHd1323benchSEQCHRAHb1325koc_chairQFQCIPAHb1332koc_chairPHQCIHHd1417benchQDRCHJHd1419benchSDRCHRAHd1421benchQERCHJHd1423benchSERCHRAHa1425koc_tableQFRCIHHb1426koc_chairRFRCIRAHd1517benchQDSCHJHd1519benchSDSCHRAHd1521benchQESCHJHd1523benchSESCHRAHb1525koc_chairQFSCIHHb1529koc_chairQGSCIJHa1530koc_tableRGSCIHHb1531koc_chairSGSCIRAHb1630koc_chairRGPDIHHc2425chairf1QFPFIJHc2433chairf1QHPFIRAHd2517benchQDQFHJHd2519benchSDQFHRAHd2521benchQEQFHJHd2523benchSEQFHRAHc2525chairf1QFQFIJHc2533chairf1QHQFIRAHd2617benchQDRFHJHd2619benchSDRFHRAHd2621benchQERFHJHd2623benchSERFHRAHc2625chairf1QFRFIJHc2633chairf1QHRFIRAHd2717benchQDSFHJHd2719benchSDSFHRAHd2721benchQESFHJHd2723benchSESFHRAHd2817benchQDPGHJHd2819benchSDPGHRAHd2821benchQEPGHJHd2823benchSEPGHRAHd2917benchQDQGHJHd2919benchSDQGHRAHd2921benchQEQGHJHd2923benchSEQG`hFFRA',
            ),
            23 => 
            array (
                'club_only' => '0',
                'door_dir' => 4,
                'door_x' => 14,
                'door_y' => 1,
                'heightmap' => 'xxxxxxxxxxxxxx22xxxxxxxxxxxxx
xxxxxxxxxx222x222x2xxxxxxxxxx
xxxxxxx33322222222223xxxxxxx3
xxxxxxx33322222222223xxxxxxx3
xxxxxxx33322222222223x33333x3
xxxxxxx33322222222223x33333x3
xx111xx33322222222223xxxxxxx3
xx111xxx332222222222333333333
xx111xxxx32222222222333333333
xx111xxxxxx222222222333333333
xx111xxxxxxx1111111x333333333
xx111xxxxxxx1111111x222222222
xx111xxxxxx111111111111111111
xx111xxxxxx111111111111111111
11111xxxxxx111111111111111111
11111xxxxxx111111111111111111
11x11xxxxxx111111111111111111
11xxxxxxxxx11111111111111111x
x11xxxxxxxxx1111111x1111111xx
xx11xxxxxxx111111111111111xxx
xxx11xxxxxx11111111111111xxxx
xxxx11111111111111111111xxxxx
xxxxx11111111111111xxxxxxxxxx
xxxxxxxxxxx11111111xxxxxxxxxx
xxxxxxxxxxx11111111xxxxxxxxxx',
                'name' => 'dusty_lounge',
                'public_items' => 'QHHc48greenchair2PBPAKPAHd49greenchair1QBPAKPAHc68greenchair2PBRAKHHd69greenchair1QBRAKHHa620dustylampPERAKJHa628dustylampPGRAKJHc73greenchair2KSAIPAHd74greenchair1PASAIPAHc93greenchair2KQBIHHd94greenchair1PAQBIHHb1021yellowchairQERBKJHb1023yellowchairSERBKRAHb1026yellowchairRFRBKJHb1028yellowchairPGRBKRAHc1211greenchair2SBPCIJHc133greenchair2KQCIPAHd134greenchair1PAQCIPAHd1311greenchair1SBQCIJHa1411dustylampSBRCIJHc153greenchair2KSCIHHd154greenchair1PASCIHHc1511greenchair2SBSCIJHb1524yellowchairPFSCIPAHd1611greenchair1SBPDIJHb1722yellowchairREQDIJHa1724dustylampPFQDIJHb1726yellowchairRFQDIRAHa1911dustylampSBSDIJHb1924yellowchairPFSDIHHc2312greenchair2PCSEIJHc2314greenchair2RCSEIRAHd2412greenchair1PCPFIJHd2414greenchair1RCPFIRA',
            ),
            24 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 22,
                'door_y' => 12,
                'heightmap' => 'xxxxx1111xxxxxxxxxxx1xxxx
xxxxx1111111111111111xxxx
xxxxx1111111111111111xxxx
xxxxx1111111111111111xxxx
xxxxxxxx0000000000000xxxx
111111100000000000000xxxx
111111100000000000000xxxx
111111100000000000000xxxx
xxxx11100000000000000xxxx
x1xx11100000000000000xxxx
x1xx11100000000000000xxxx
x1xx111000000000000000000
x1xx111000000000000000000
xxxx111000000000000000000
xxxx11100000000000000xxxx
xxxx1110000000xx11111xxxx
xxxxx111110000x111111xxxx
xxxxxx111100001111111xxxx
xxxxxx111100001111111xxxx
xxxxxx111100001111111xxxx
xxxxxx111100001111111xxxx
xxxxxx111100001111111xxxx
xxxxxx111100001111111xxxx
xxxxx1111100001111111xxxx',
                'name' => 'netcafe',
                'public_items' => 'RRHi06shift1RAHIPAHj07shift2SAHIPAHm110mRBIIHHl113lQCIIHHk116kPDIIHHk119kSDIIHHh35kukat6QAKIHHg36kukat5RAKIHHc312kukat2PCKIHHb313kukat1QCKIHHc319kukat2SDKIHHb320kukat1PEKIHHi412shift1PCPAHPAHj413shift2QCPAHPAHi419shift1SDPAHPAHj420shift2PEPAHPAHi50shift1HQAIPAHj51shift2IQAIPAHi52shift1JQAIPAHj53shift2KQAIPAHk715kSCSAHJHo716table2PDSAHRAHz717tablecornerQDSAHHHm718mRDSAHRAHl815lSCPBHJHo816table2PDPBHPAHl818lRDPBHRAHm94mPAQBIRAHk99kQBQBHJHp910table3RBQBHRAHz911tablecornerSBQBHHHm912mPCQBHRAHk915kSCQBHJHo916table2PDQBHJHk918kRDQBHRAHk104kPARBIRAHm109mQBRBHJHp1010table3RBRBHPAHm1012mPCRBHRAHm1015mSCRBHJHo1016table2PDRBHHHk1018kRDRBHRAHl114lPASBIRAHl119lQBSBHJHp1110table3RBSBHJHl1112lPCSBHRAHk124kPAPCIRAHl129lQBPCHJHp1210table3RBPCHHHk1212kPCPCHRAHm134mPAQCIRAHc165kukat2QAPDIHHb166kukat1RAPDIHHc167kukat2SAPDIHHb168kukat1PBPDIHHe169kukat3QBPDIHHd1615kukka2SCPDIHHf179kukat4QBQDIHHk186kRARDIRAHe189kukat3QBRDIHHs1820sofabig3PERDIRAHf199kukat4QBSDIHHn1917table1QDSDIPAHz1918tablecornerRDSDIHHr1920sofabig2PESDIRAHn2017table1QDPEIJHr2020sofabig2PEPEIRAHm216mRAQEIRAHn2117table1QDQEIHHq2120sofabig1PEQEIRAHv2316sofalittle3PDSEIHHu2317sofalittle2QDSEIHHt2318sofalittle1RDSEIHHa2320kukkaPESEIH',
            ),
            25 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 4,
                'door_y' => 9,
                'heightmap' => 'x0000x000
xxxxxx000
000000000
000000000
000000000
000000000
000000000
000000000
000000000
000000000
xxx000xxx
xxx000xxx',
                'name' => 'rooftop_2',
                'public_items' => 'RDHk08rooftop_bigchairPBHHPAHl18rooftop_bigtablePBIHHHj20rooftop_sofabHJHPAHi21rooftop_sofaIJHPAHk28rooftop_bigchairPBJHHHk38rooftop_bigchairPBKHPAHl48rooftop_bigtablePBPAHHHj50rooftop_sofabHQAHHHi51rooftop_sofaIQAHHHk58rooftop_bigchairPBQAHHHj60rooftop_sofabHRAHPAHi61rooftop_sofaIRAHPAHj67rooftop_sofabSARAHPAHi68rooftop_sofaPBRAHPAHj90rooftop_sofabHQBHHHi91rooftop_sofaIQBHHHj97rooftop_sofabSAQBHHHi98rooftop_sofaPBQBHH',
            ),
            26 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 37,
                'door_y' => 36,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx2222x4444442222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222x444x32222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222xx4xx22222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx222222222222222xxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222222222222211111xxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222222222222222111xxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx22222222222222222111xxxxxxxxx
xxxxxxxxxxxxxxxx3333x22222222222222xxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxx3333x22222222222222xxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxx3333x22222222221111xxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxx3333xx2x22222220000xxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxx333333332222222000000xxxxxxxxxxxxx
xxxxxxxxxxxxxxxx333333332222222x0000000xxxxxxxxxxx
xxxxxxxxxxxxxxxxx33333332222222x0000000xxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxx222222000000xxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'star_lounge',
                'public_items' => 'PXHk1521star_tableQESCJHHa1522star_sofaRESCJPAHb1523star_sofa2SESCJPAHz1524palmPFSCJHHb1621star_sofa2QEPDJJHQ1632dj1PHPDJHHW1633dj2QHPDJHHE1634dj3RHPDJHHa1721star_sofaQEQDJJHm1728star_microphonePGQDPAHHb1821star_sofa2QERDJJHa1835star_sofaSHRDJRAHa1921star_sofaQESDJJHb1935star_sofa2SHSDJRAHb2021star_sofa2QEPEJJHb2024star_sofa2PFPEJJHa2032star_sofaPHPEJRAHa2035star_sofaSHPEJRAHa2121star_sofaQEQEJJHa2124star_sofaPFQEJJHb2132star_sofa2PHQEJRAHb2135star_sofa2SHQEJRAHc2221star_sofachairQEREJJHk2224star_tablePFREJHHb2225star_sofa2QFREJHHa2226star_sofaRFREJHHb2230star_sofa2RGREJHHa2231star_sofaSGREJHHk2232star_tablePHREJHHk2235star_tableSHREJHHz2321palmQESEJHHa2335star_sofaSHSEJRAHp2422bar10REPFJHHb2435star_sofa2SHPFJRAHa2437star_sofaQIPFIPAHb2438star_sofa2RIPFIPAHa2439star_sofaSIPFIPAHb2440star_sofa2PJPFIPAHo2522bar9REQFJHHb2525star_sofa2QFQFJHHa2526star_sofaRFQFJHHb2530star_sofa2RGQFJHHa2531star_sofaSGQFJHHa2535star_sofaSHQFJRAHb2536star_sofa2PIQFIJHi2622bar8RERFJHHX2625palm1QFRFJHHV2626palm3RFRFJHHC2630palm2RGRFJHHB2631palm4SGRFJHHb2635star_sofa2SHRFJRAHa2636star_sofaPIRFIJHk2639star_tableSIRFIHHk2640star_tablePJRFIHHu2722bar7RESFJHHa2725star_sofaQFSFJPAHb2726star_sofa2RFSFJPAHa2730star_sofaRGSFJPAHb2731star_sofa2SGSFJPAHk2735star_tableSHSFJHHz2736palmPISFIHHk2737star_tableQISFIHHy2822bar6REPGJHHt2922bar5REQGJHHk2925star_tableQFQGJHHk2926star_tableRFQGJHHk3016star_tablePDRGKHHr3022bar4RERGJHHb3116star_sofa2PDSGKJHe3122bar3RESGJHHb3125star_sofa2QFSGJHHa3126star_sofaRFSGJHHa3130star_sofaRGSGJRAHa3216star_sofaPDPHKJHw3222bar2REPHJHHB3225palm4QFPHJHHX3226palm1RFPHJHHb3230star_sofa2RGPHJRAHb3316star_sofa2PDQHKJHq3322bar1REQHJHHa3325star_sofaQFQHJPAHb3326star_sofa2RFQHJPAHa3330star_sofaRGQHJRAHa3416star_sofaPDRHKJHb3430star_sofa2RGRHJRAHV3435palm3SHRHHHHC3436palm2PIRHHHHk3516star_tablePDSHKHHa3530star_sofaRGSHJRAHb3630star_sofa2RGPIJRAHc3725star_sofachairQFQIJHHb3726star_sofa2RFQIJHHa3727star_sofaSFQIJHHb3728star_sofa2PGQIJHHa3729star_sofaQGQIJHHk3730star_tableRGQIJH',
            ),
            27 => 
            array (
                'club_only' => '0',
                'door_dir' => 6,
                'door_x' => 21,
                'door_y' => 19,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxx
xxxxxxxx3333x33333333x
333333xx3333x33333333x
3333333x3333x33333333x
3333333x3333x33333333x
3333333xxxxxx33333333x
333333333333333333333x
333333333333333333333x
333333333333333333333x
333333333333333333333x
33333333222x333333333x
33333333222x333333333x
33333333222x333333333x
33333333222x333333333x
33333333111x333333333x
33333333111x333333333x
33333333111x333333333x
xxxxxxxx111xxxxxxxxxxx
11111111111111111111xx
1111111111111111111111
1111111111111111111111
11111111111111111111xx',
                'name' => 'tearoom',
                'public_items' => 'QIHh113hardwoodsofa1QCIKPAHi114hardwoodsofa2RCIKPAHj115hardwoodsofa3SCIKPAHc116teabambooPDIKHHh118hardwoodsofa1RDIKPAHi119hardwoodsofa2SDIKPAHj120hardwoodsofa3PEIKPAHl313teasmalltable1QCKKHHk315teasmalltable2SCKKHHl318teasmalltable1RDKKHHk320teasmalltable2PEKKHHe62teastoolJRAKPAHe63teastoolKRAKPAHf68chinastoolredPBRAKPAHf69chinastoolredQBRAKPAHf610chinastoolredRBRAKPAHf611chinastoolredSBRAKPAHa82teatable1JPBKHHb83teatable2KPBKHHm92teastool2JQBKHHm93teastool2KQBKHHe916teastoolPDQBKPAHe917teastoolQDQBKPAHa1116teatable1PDSBKHHb1117teatable2QDSBKHHe122teastoolJPCKPAHe123teastoolKPCKPAHm1216teastool2PDPCKHHm1217teastool2QDPCKHHa142teatable1JRCKHHb143teatable2KRCKHHm152teastool2JSCKHHm153teastool2KSCKHHd180teavaseHRDIHHg190chinastoolgreenHSDIJHg200chinastoolgreenHPEIJHd210teavaseHQEIH',
            ),
            28 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 17,
                'door_y' => 12,
                'heightmap' => '44xxxxxxxxxxxxxxxxxx
444xxxxxxxxxxx444444
4444xxxxxxxxxx444444
44444xxxx4xxxx444444
444444xxx44xxx444444
44444444444444444444
44444444444444444444
44444444444444444444
44444444xx44xx44xx44
44444444xx44xx44xx44
44444444444444444444
44444444444444444444
44444444444444444444
x444444x444444xx4444
x444444x444444xx333x
x444444x444444xx222x
x444444x444444xx11xx
x444444x444444xxxxxx',
                'name' => 'rooftop',
                'public_items' => 'PKHa10rooftop_minichairHIPAPAHd116rooftop_flatcurbPDIPAPAHe117rooftop_flatcurb2QDIPAPAHc20rooftop_rodtableHJPAHHa21rooftop_minichairIJPARAHa30rooftop_minichairHKPAHHd416rooftop_flatcurbPDPAPAHHe417rooftop_flatcurb2QDPAPAHHa62rooftop_minichairJRAPAPAHa71rooftop_minichairISAPAJHc72rooftop_rodtableJSAPAHHa73rooftop_minichairKSAPARAHa82rooftop_minichairJPBPAHHa90rooftop_minichairHQBPAPAHb100rooftop_emptytableHRBPAHHa110rooftop_minichairHSBPAHHd131rooftop_flatcurbIQCPAJHd136rooftop_flatcurbRAQCPARAHd138rooftop_flatcurbPBQCPAJHd1313rooftop_flatcurbQCQCPARAHf141rooftop_flatcurb3IRCPAJHf146rooftop_flatcurb3RARCPARAHf148rooftop_flatcurb3PBRCPAJHf1413rooftop_flatcurb3QCRCPARAHf151rooftop_flatcurb3ISCPAJHf156rooftop_flatcurb3RASCPARAHf158rooftop_flatcurb3PBSCPAJHf1513rooftop_flatcurb3QCSCPARAHf161rooftop_flatcurb3IPDPAJHf166rooftop_flatcurb3RAPDPARAHf168rooftop_flatcurb3PBPDPAJHf1613rooftop_flatcurb3QCPDPARAHg171rooftop_flatcurb4IQDPAHHf172rooftop_flatcurb3JQDPAHHf173rooftop_flatcurb3KQDPAHHf174rooftop_flatcurb3PAQDPAHHf175rooftop_flatcurb3QAQDPAHHh176rooftop_flatcurb5RAQDPAHHg178rooftop_flatcurb4PBQDPAHHf179rooftop_flatcurb3QBQDPAHHf1710rooftop_flatcurb3RBQDPAHHf1711rooftop_flatcurb3SBQDPAHHf1712rooftop_flatcurb3PCQDPAHHh1713rooftop_flatcurb5QCQDPAH',
            ),
            29 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 15,
                'door_y' => 25,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxx2222222211111xxx
xxxxxxxxx2222222211111xxx
xxxxxxxxx2222222211111xxx
xxxxxxxxx2222222211111xxx
xxxxxxxxx2222222222111xxx
xxxxxxxxx2222222222111xxx
xxxxxxxxx2222222222000xxx
xxxxxxxxx2222222222000xxx
xxxxxxxxx2222222222000xxx
xxxxxxxxx2222222222000xxx
x333333332222222222000xxx
x333333332222222222000xxx
x333333332222222222000xxx
x333333332222222222000xxx
x333333332222222222000xxx
x333332222222222222000xxx
x333332222222222222000xxx
x333332222222222222000xxx
x333332222222222222000xxx
x333333332222222222000xxx
xxxxx31111112222222000xxx
xxxxx31111111000000000xxx
xxxxx31111111000000000xxx
xxxxx31111111000000000xxx
xxxxx31111111000000000xxx
xxxxxxxxxxxxxxx00xxxxxxxx
xxxxxxxxxxxxxxx00xxxxxxxx
xxxxxxxxxxxxxxx00xxxxxxxx
xxxxxxxxxxxxxxx00xxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'pub_a',
                'public_items' => 'SWHS119pub_sofa2SDIIPAHs120pub_sofaPEIIPAHs121pub_sofaQEIIPAHq211bardesk1SBJJHHc212pub_chairPCJJRAHQ311bardesk2SBKJHHq411bardesk1SBPAJHHc412pub_chairPCPAJRAHQ511bardesk2SBQAJHHf518pub_fenceRDQAJIHq611bardesk1SBRAJHHc612pub_chairPCRAJRAHf618pub_fenceRDRAJHHQ711bardesk2SBSAJHHf718pub_fenceRDSAJHHq811bardesk1SBPBJHHc812pub_chairPCPBJRAHf818pub_fenceRDPBJHHw910bardesk4RBQBJHHW911bardesk3SBQBJHHf918pub_fenceRDQBJHHf1018pub_fenceRDRBJHHC112pub_chair2JSBKPAHC113pub_chair2KSBKPAHC115pub_chair2QASBKPAHC116pub_chair2RASBKPAHf118pub_fencePBSBKIHf1118pub_fenceRDSBJHHf128pub_fencePBPCKHHf1218pub_fenceRDPCJHHf138pub_fencePBQCKHHC139pub_chair2QBQCJJHk1314pub_chair3RCQCJJHT1315pub_table2SCQCJIHk1316pub_chair3PDQCJRAHf1318pub_fenceRDQCJHHf148pub_fencePBRCKJHC149pub_chair2QBRCJJHk1414pub_chair3RCRCJJHT1415pub_table2SCRCJJHk1416pub_chair3PDRCJRAHf1418pub_fenceRDRCJHHt151pub_tableISCKHHf155pub_fenceQASCKIHf1518pub_fenceRDSCJHHS161pub_sofa2IPDKJHf165pub_fenceQAPDKHHf1618pub_fenceRDPDJHHs171pub_sofaIQDKJHf175pub_fenceQAQDKHHk1713pub_chair3QCQDJPAHk1714pub_chair3RCQDJPAHk1715pub_chair3SCQDJPAHk1716pub_chair3PDQDJPAHf1718pub_fenceRDQDJHHs181pub_sofaIRDKJHf185pub_fenceQARDKHHT1813pub_table2QCRDJQAHT1814pub_table2RCRDJRAHT1815pub_table2SCRDJRAHT1816pub_table2PDRDJPAHf1818pub_fenceRDRDJHHs192pub_sofaJSDKHHS193pub_sofa2KSDKHHf195pub_fenceQASDKHHk1913pub_chair3QCSDJHHk1914pub_chair3RCSDJHHk1915pub_chair3SCSDJHHk1916pub_chair3PDSDJHHf1918pub_fenceRDSDJHHf201pub_fenceIPEKQAHf202pub_fenceJPEKRAHf203pub_fenceKPEKRAHf204pub_fencePAPEKRAHf205pub_fenceQAPEKKHf2018pub_fenceRDPEJHHS217pub_sofa2SAQEIPAHs218pub_sofaPBQEIPAHf2112pub_fencePCQEJQAHf2113pub_fenceQCQEJRAHf2114pub_fenceRCQEJRAHf2115pub_fenceSCQEJRAHf2116pub_fencePDQEJRAHf2117pub_fenceQDQEJRAHf2118pub_fenceRDQEJKHS226pub_sofa2RAREIJHt2215pub_tableSCREHHHC2216pub_chair2PDREHPAHC2217pub_chair2QDREHPAHs236pub_sofaRASEIJHT238pub_table2PBSEIIHs246pub_sofaRAPFIJHT248pub_table2PBPFIHHs256pub_sofaRAQFIJHT258pub_table2PBQFIJ',
            ),
            30 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 2,
                'door_y' => 11,
                'heightmap' => 'xxxxxxxxxxxxxxxx000000
xxxxx0xxxxxxxxxx000000
xxxxx00000000xxx000000
xxxxx000000000xx000000
0000000000000000000000
0000000000000000000000
0000000000000000000000
0000000000000000000000
0000000000000000000000
xxxxx000000000000000xx
xxxxx000000000000000xx
x0000000000000000000xx
x0000000000000000xxxxx
xxxxxx00000000000xxxxx
xxxxxxx0000000000xxxxx
xxxxxxxx000000000xxxxx
xxxxxxxx000000000xxxxx
xxxxxxxx000000000xxxxx
xxxxxxxx000000000xxxxx
xxxxxxxx000000000xxxxx
xxxxxxxx000000000xxxxx
xxxxxx00000000000xxxxx
xxxxxx00000000000xxxxx
xxxxxx00000000000xxxxx
xxxxxx00000000000xxxxx
xxxxxx00000000000xxxxx
xxxxx000000000000xxxxx
xxxxx000000000000xxxxx',
                'name' => 'newbie_lobby',
                'public_items' => 'SOHa016crl_lampPDHHHHy017crl_sofa2cQDHHPAHw018crl_sofa2bRDHHPAHv019crl_sofa2aSDHHPAHa020crl_lampPEHHHHb116crl_chairPDIHJHa27crl_lampSAJHHHa211crl_lampSBJHHHb216crl_chairPDJHJHc35crl_pillarQAKHHHb37crl_chairSAKHJHu39crl_table1bQBKHHHs311crl_sofa1cSBKHRAHb316crl_chairPDKHJHA319crl_table2bSDKHHHz320crl_table2aPEKHHHa40crl_lampHPAHHHy41crl_sofa2cIPAHPAHw42crl_sofa2bJPAHPAHv43crl_sofa2aKPAHPAHa44crl_lampPAPAHHHt49crl_table1aQBPAHHHr411crl_sofa1bSBPAHRAHh415crl_wall2aSCPAHHHa416crl_lampPDPAHHHb50crl_chairHQAHJHb57crl_chairSAQAHJHq511crl_sofa1aSBQAHRAHA62crl_table2bJRAHHHz63crl_table2aKRAHHHa611crl_lampSBRAHHHb70crl_chairHSAHJHa80crl_lampHPBHHHD81crl_sofa3cIPBHHHC82crl_sofa3bJPBHHHB83crl_sofa3aKPBHHHa84crl_lampPAPBHHHo819crl_barchair2SDPBHHHp820crl_tablebarPEPBHHHo821crl_barchair2QEPBHHHE95crl_pillar2QAQBHHHc99crl_pillarQBQBHHHP158crl_desk1aPBSCHHHO159crl_deskiQBSCHHHN1510crl_deskhRBSCHHHM1610crl_deskgRBPDHHHL1710crl_deskfRBQDHHHK1810crl_deskeRBRDHHHK1910crl_deskeRBSDHHHK2010crl_deskeRBPEHHHK2110crl_deskeRBQEHHHK2210crl_deskeRBREHHHK2310crl_deskeRBSEHHHG247crl_wallbSAPFHHHK2410crl_deskeRBPFHHHF257crl_wallaSAQFHHHH258crl_desk1bPBQFHHHI259crl_desk1cQBQFHHHJ2510crl_desk1dRBQFHHHd2712crl_lamp2PCSFHHHf2713crl_cabinet2QCSFHHHe2714crl_cabinet1RCSFHHHd2715crl_lamp2SCSFHH',
            ),
            31 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 5,
                'door_y' => 27,
                'heightmap' => 'xxxxxxxxx0000000
x11111x1xx000000
11xxxxx111x00000
11x1111111xx0000
11x1111111100000
xxx1111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
1111111111100000
11111111111xxxxx
1111111111xxxxxx
1111111111111111
1111111111111111
1111111111111111
1111111111111111
1111111111111111
1111111111111111
11xx11xx11111111
xxxx11xxxxxxxxxx
xxxx11xxxxxxxxxx',
                'name' => 'pizza',
                'public_items' => 'QGHa015pizza_plant1SCHHJHe314pizza_sofa1RCKHPAHE315pizza_sofa2SCKHPAHc515pizza_tableSCQAHJHb60pizza_plant2HRAIJHf614pizza_sofa3RCRAHHHF615pizza_sofa4SCRAHHHd81pizza_chairIPBIPAHd82pizza_chairJPBIPAHc102pizza_tableJRBIJHe1014pizza_sofa1RCRBHPAHE1015pizza_sofa2SCRBHPAHd111pizza_chairISBIHHd112pizza_chairJSBIHHc1215pizza_tableSCPCHJHf1314pizza_sofa3RCQCHHHF1315pizza_sofa4SCQCHHHd161pizza_chairIPDIPAHd162pizza_chairJPDIPAHc182pizza_tableJRDIJHd191pizza_chairISDIHHd192pizza_chairJSDIHHd2111pizza_chairSBQEIJHd2114pizza_chairRCQEIRAHd2211pizza_chairSBREIJHc2213pizza_tableQCREIHHd2214pizza_chairRCREIRAHa250pizza_plant1HQFIJHa2515pizza_plant1SCQFIJ',
            ),
            32 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 2,
                'door_y' => 1,
                'heightmap' => 'xx0xxxxxxxxxxxxxx
0000000xxx00000xx
0000000x0000000xx
0000000xxxxxxxxxx
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
00000000000000000
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x
0000000000000000x',
                'name' => 'old_skool',
                'public_items' => 'SLHk49mobiles_chair3QBPAHHHk410mobiles_chair3RBPAHHHk411mobiles_chair3SBPAHHHk412mobiles_chair3PCPAHHHe101mobiles_chair1IRBHPAHe1010mobiles_chair1RBRBHPAHe110mobiles_chair1HSBHJHb111mobiles_table2ISBHHHc112mobiles_table3JSBHHHe113mobiles_chair1KSBHRAHb1110mobiles_table2RBSBHHHc1111mobiles_table3SBSBHHHa121mobiles_table1IPCHHHd122mobiles_table4JPCHHHe129mobiles_chair1QBPCHJHa1210mobiles_table1RBPCHHHd1211mobiles_table4SBPCHHHe1212mobiles_chair1PCPCHRAHe131mobiles_chair1IQCHHHe1311mobiles_chair1SBQCHHHe150mobiles_chair1HSCHPAHe170mobiles_chair1HQDHJHb171mobiles_table2IQDHHHc172mobiles_table3JQDHHHe173mobiles_chair1KQDHRAHa181mobiles_table1IRDHHHd182mobiles_table4JRDHHHe192mobiles_chair1JSDHHHe211mobiles_chair1IQEHPAHb216mobiles_table2RAQEHHHc217mobiles_table3SAQEHHHe2112mobiles_chair1PCQEHPAHe220mobiles_chair1HREHJHb221mobiles_table2IREHHHc222mobiles_table3JREHHHe223mobiles_chair1KREHRAHe225mobiles_chair1QAREHJHa226mobiles_table1RAREHHHd227mobiles_table4SAREHHHe228mobiles_chair1PBREHRAHe2211mobiles_chair1SBREHJHb2212mobiles_table2PCREHHHc2213mobiles_table3QCREHHHe2214mobiles_chair1RCREHRAHa231mobiles_table1ISEHHHd232mobiles_table4JSEHHHa2312mobiles_table1PCSEHHHd2313mobiles_table4QCSEHHHe241mobiles_chair1IPFHHHe247mobiles_chair1SAPFHPAHe2413mobiles_chair1QCPFHH',
            ),
            33 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 4,
                'door_y' => 4,
                'heightmap' => 'xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxx111111x
xxxxx111111x
xxxx1111111x
xxxxx111111x
xxxxx111111x
xxxxx000000x
xxxxx000000x
xxx00000000x
xxx00000000x
xxx00000000x
xxx00000000x
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx',
                'name' => 'model_h',
                'public_items' => '',
            ),
            34 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 23,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxx
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx222222222222
xxxxxxx22222222xxxx
xxxxxxx11111111xxxx
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x222221111111111111
x2222xx11111111xxxx
x2222xx00000000xxxx
x2222xx000000000000
x2222xx000000000000
x2222xx000000000000
x2222xx000000000000
22222xx000000000000
x2222xx000000000000
xxxxxxxxxxxxxxxxxxx',
                'name' => 'model_p',
                'public_items' => '',
            ),
            35 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 10,
                'door_y' => 4,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxx33333333333333
xxxxxxxxxxx33333333333333
xxxxxxxxxxx33333333333333
xxxxxxxxxx333333333333333
xxxxxxxxxxx33333333333333
xxxxxxxxxxx33333333333333
xxxxxxx333333333333333333
xxxxxxx333333333333333333
xxxxxxx333333333333333333
xxxxxxx333333333333333333
xxxxxxx333333333333333333
xxxxxxx333333333333333333
x4444433333xxxxxxxxxxxxxx
x4444433333xxxxxxxxxxxxxx
x44444333333222xx000000xx
x44444333333222xx000000xx
xxx44xxxxxxxx22xx000000xx
xxx33xxxxxxxx11xx000000xx
xxx33322222211110000000xx
xxx33322222211110000000xx
xxxxxxxxxxxxxxxxx000000xx
xxxxxxxxxxxxxxxxx000000xx
xxxxxxxxxxxxxxxxx000000xx
xxxxxxxxxxxxxxxxx000000xx
xxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_r',
                'public_items' => '',
            ),
            36 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 10,
                'door_y' => 4,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxx
xxxxxxxxxxx22222222
xxxxxxxxxxx22222222
xxxxxxxxxxx22222222
xxxxxxxxxx222222222
xxxxxxxxxxx22222222
xxxxxxxxxxx22222222
x222222222222222222
x222222222222222222
x222222222222222222
x222222222222222222
x222222222222222222
x222222222222222222
x2222xxxxxxxxxxxxxx
x2222xxxxxxxxxxxxxx
x2222211111xx000000
x222221111110000000
x222221111110000000
x2222211111xx000000
xx22xxx1111xxxxxxxx
xx11xxx1111xxxxxxxx
x1111xx1111xx000000
x1111xx111110000000
x1111xx111110000000
x1111xx1111xx000000
xxxxxxxxxxxxxxxxxxx',
                'name' => 'model_q',
                'public_items' => '',
            ),
            37 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 18,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxx11111111xxxx
xxxxxxxxxxxxx11111111xxxx
xxxxxxxxxxxxx11111111xxxx
xxxxxxxxxxxxx11111111xxxx
xxxxxxxxxxxxx11111111xxxx
xxxxxxxxxxxxx11111111xxxx
xxxxxxxxxxxxx11111111xxxx
xxxxxxxxxxxxx00000000xxxx
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
x111111100000000000000000
x111111100000000000000000
x111111100000000000000000
1111111100000000000000000
x111111100000000000000000
x111111100000000000000000
x111111100000000000000000
x111111100000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_o',
                'public_items' => '',
            ),
            38 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 16,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxx
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x000000xxxxxxxx000000
x000000x000000x000000
x000000x000000x000000
x000000x000000x000000
x000000x000000x000000
x000000x000000x000000
x000000x000000x000000
x000000xxxxxxxx000000
x00000000000000000000
000000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
xxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_n',
                'public_items' => '',
            ),
            39 => 
            array (
                'club_only' => '1',
                'door_dir' => 2,
                'door_x' => 1,
                'door_y' => 7,
                'heightmap' => 'xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxx00000
xxxxxxx00000
xxxxxxx00000
xx1111000000
xx1111000000
x11111000000
xx1111000000
xx1111000000
xxxxxxx00000
xxxxxxx00000
xxxxxxx00000
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx',
                'name' => 'model_g',
                'public_items' => '',
            ),
            40 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 16,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxx
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
000000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
x00000000xxxx00000000
xxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_l',
                'public_items' => '',
            ),
            41 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 15,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
x0000000000000000000000000000
x0000000000000000000000000000
x0000000000000000000000000000
x0000000000000000000000000000
00000000000000000000000000000
x0000000000000000000000000000
x0000000000000000000000000000
x0000000000000000000000000000
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxx00000000xxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_m',
                'public_items' => '',
            ),
            42 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 13,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxx00000000
xxxxxxxxxxxxxxxxx00000000
xxxxxxxxxxxxxxxxx00000000
xxxxxxxxxxxxxxxxx00000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
x000000000000000000000000
x000000000000000000000000
x000000000000000000000000
x000000000000000000000000
0000000000000000000000000
x000000000000000000000000
x000000000000000000000000
x000000000000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxx0000000000000000
xxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_k',
                'public_items' => '',
            ),
            43 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 10,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxx0000000000
xxxxxxxxxxx0000000000
xxxxxxxxxxx0000000000
xxxxxxxxxxx0000000000
xxxxxxxxxxx0000000000
xxxxxxxxxxx0000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
000000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x00000000000000000000
x0000000000xxxxxxxxxx
x0000000000xxxxxxxxxx
x0000000000xxxxxxxxxx
x0000000000xxxxxxxxxx
x0000000000xxxxxxxxxx
x0000000000xxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_j',
                'public_items' => '',
            ),
            44 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 10,
                'heightmap' => 'xxxxxxxxxxxxxxxxx
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
00000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
x0000000000000000
xxxxxxxxxxxxxxxxx',
                'name' => 'model_i',
                'public_items' => '',
            ),
            45 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 1,
                'door_y' => 5,
                'heightmap' => 'xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xx0000000000
xx0000000000
x00000000000
xx0000000000
xx0000000000
xx0000000000
xx0000000000
xx0000000000
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx',
                'name' => 'model_e',
                'public_items' => '',
            ),
            46 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 2,
                'door_y' => 5,
                'heightmap' => 'xxxxxxxxxxxx
xxxxxxx0000x
xxxxxxx0000x
xxx00000000x
xxx00000000x
xx000000000x
xxx00000000x
x0000000000x
x0000000000x
x0000000000x
x0000000000x
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx',
                'name' => 'model_f',
                'public_items' => '',
            ),
            47 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 3,
                'door_y' => 5,
                'heightmap' => 'xxxxxxxxxxxx
xxxx00000000
xxxx00000000
xxxx00000000
xxxx00000000
xxx000000000
xxxx00000000
xxxx00000000
xxxx00000000
xxxx00000000
xxxx00000000
xxxx00000000
xxxx00000000
xxxx00000000
xxxxxxxxxxxx
xxxxxxxxxxxx',
                'name' => 'model_a',
                'public_items' => '',
            ),
            48 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 5,
                'heightmap' => 'xxxxxxxxxxxx
xxxxx0000000
xxxxx0000000
xxxxx0000000
xxxxx0000000
000000000000
x00000000000
x00000000000
x00000000000
x00000000000
x00000000000
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx',
                'name' => 'model_b',
                'public_items' => '',
            ),
            49 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 4,
                'door_y' => 7,
                'heightmap' => 'xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxx000000x
xxxxx000000x
xxxx0000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx
xxxxxxxxxxxx',
                'name' => 'model_c',
                'public_items' => '',
            ),
            50 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 4,
                'door_y' => 7,
                'heightmap' => 'xxxxxxxxxxxx
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxx0000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxx000000x
xxxxxxxxxxxx',
                'name' => 'model_d',
                'public_items' => '',
            ),
            51 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 3,
                'door_y' => 3,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxx
x11111xXXXXXXXXXXXXXXXXx
x11111xxxxxxxxxxxxxxxxxx
x11111xYYYYYYYYYYYYYYYYx
x11111xYYYYYYYYYYYYYYYYx
x11111xxxxxxxxxxxxxxxxxx
x11111xUUUUUUUUUUUUUUUUx
x11111xUUUUUUUUUUUUUUUUx
x11111xxxxxxxxxxxxxxxxxx
x11111xVVVVVVVVVVVVVVVVx
x11111xxxxxxxxxxxxxxxxxx
x11111xWWWWWWWWWWWWWWWWx
x11111xxxxxxxxxxxxxxxxxx
x1111100000000000000008x
x1111100000000000000009x
x111110000000000000000ax
x111110000000000000000bx
1111110000000000000000cx
x111110000000000000000dx
x111110000000000000000ex
x111110000000000000000fx
x111110000000000000000gx
x111110000000000000000hx
x111110000000000000000ix
x111110000000000000000jx
x111110000000000000000kx
x111110000000000000000lx
x111110000000000000000mx
x111110000000000000000nx
x111110xxxxxxxxxxxxxxxxx
x111110xzzzzzzzzzzzzzzzx
x111110xzzzzzzzzzzzzzzzx
x111110xzzzzzzzzzzzzzzzx
x111110xzzzzzzzzzzzzzzzx
x111110xzzzzzzzzzzzzzzzx
xxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_room_15',
                'public_items' => '',
            ),
            52 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 10,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xeeeeeeeeeeeeeeeedcba9888888888888
xeeeeeeeeeeeeeeeexxxxxx88888888888
xeeeeeeeeeeeeeeeexxxxxx88888888888
xeeeeeeeeeeeeeeeexxxxxx88888888888
xeeeeeeeeeeeeeeeexxxxxx88888888888
xdxxxxxxxxxxxxxxxxxxxxx88888888888
xcxxxxxxxxxxxxxxxxxxxxx88888888888
xbxxxxxxxxxxxxxxxxxxxxx88888888888
xaxxxxxxxxxxxxxxxxxxxxx88888888888
aaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxx
xaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxx
xaaaaaaaaaaaaaaaaxxxxxxxxxxxxxxxxx
xaaaaaaaaaaaaaaaaxxxx6666666666666
xaaaaaaaaaaaaaaaaxxxx6666666666666
xaaaaaaaaaaaaaaaaxxxx6666666666666
xaaaaaaaaaaaaaaaaxxxx6666666666666
xaaaaaaaaaaaaaaaaxxxx6666666666666
xaaaaaaaaaaaaaaaa98766666666666666
xaaaaaaaaaaaaaaaaxxxxxxxxxxxx5xxxx
xaaaaaaaaaaaaaaaaxxxxxxxxxxxx4xxxx
xaaaaaaaaaaaaaaaaxxxxxxxxxxxx3xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xaaaaaaaaaaaaaaaaxxx3333333333xxxx
xxxxxxxxxxxxxxxx9xxx3333333333xxxx
xxxxxxxxxxxxxxxx8xxx3333333333xxxx
xxxxxxxxxxxxxxxx7xxx3333333333xxxx
xxx777777777xxxx6xxx3333333333xxxx
xxx777777777xxxx5xxxxxxxxxxxxxxxxx
xxx777777777xxxx4xxxxxxxxxxxxxxxxx
xxx777777777xxxx3xxxxxxxxxxxxxxxxx
xxx777777777xxxx2xxxxxxxxxxxxxxxxx
xfffffffffxxxxxx1xxxxxxxxxxxxxxxxx
xfffffffffxxxxxx111111111111111111
xfffffffffxxxxxx111111111111111111
xfffffffffxxxxxx111111111111111111
xfffffffffxxxxxx111111111111111111
xfffffffffxxxxxx111111111111111111
xfffffffffxxxxxx111111111111111111
xxxxxxxxxxxxxxxx111111111111111111
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_1',
                'public_items' => '',
            ),
            53 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 15,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xjjjjjjjjjjjjjx0000xxxxxxxxxx
xxxxxxxxxxxxiix0000xxxxxxxxxx
xxxxxxxxxxxxhhx0000xxxxxxxxxx
xxxxxxxxxxxxggx0000xxxxxxxxxx
xxxxxxxxxxxxffx0000xxxxxxxxxx
xxxxxxxxxxxxeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
eeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xeeeeeeeeeeeeex0000xxxxxxxxxx
xxxxxxxxxxxxddx00000000000000
xxxxxxxxxxxxccx00000000000000
xxxxxxxxxxxxbbx00000000000000
xxxxxxxxxxxxaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xaaaaaaaaaaaaax00000000000000
xxxxxxxxxxxx99x0000xxxxxxxxxx
xxxxxxxxxxxx88x0000xxxxxxxxxx
xxxxxxxxxxxx77x0000xxxxxxxxxx
xxxxxxxxxxxx66x0000xxxxxxxxxx
xxxxxxxxxxxx55x0000xxxxxxxxxx
xxxxxxxxxxxx44x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
x4444444444444x0000xxxxxxxxxx
xxxxxxxxxxxx33x0000xxxxxxxxxx
xxxxxxxxxxxx22x0000xxxxxxxxxx
xxxxxxxxxxxx11x0000xxxxxxxxxx
xxxxxxxxxxxx00x0000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
x000000000000000000xxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_2',
                'public_items' => '',
            ),
            54 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 10,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
000000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
x00000000000000000000000000000000x
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_5',
                'public_items' => '',
            ),
            55 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 15,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x222222222x000000000000000000000000xxxx
x222222222x000000000000000000000000xxxx
x222222222x000000000000000000000000xxxx
x222222222x000000000000000000000000xxxx
x222222222x000000000000000000000000xxxx
x222222222x000000000000000000000000xxxx
x222222222x000000000000000000000000xxxx
x222222222x000000000000000000000000xxxx
x222222222x00000000xxxxxxxx00000000xxxx
x11xxxxxxxx00000000xxxxxxxx00000000xxxx
x00x000000000000000xxxxxxxx00000000xxxx
x00x000000000000000xxxxxxxx00000000xxxx
x000000000000000000xxxxxxxx00000000xxxx
x000000000000000000xxxxxxxx00000000xxxx
0000000000000000000xxxxxxxx00000000xxxx
x000000000000000000xxxxxxxx00000000xxxx
x00x000000000000000xxxxxxxx00000000xxxx
x00x000000000000000xxxxxxxx00000000xxxx
x00xxxxxxxxxxxxxxxxxxxxxxxx00000000xxxx
x00xxxxxxxxxxxxxxxxxxxxxxxx00000000xxxx
x00x0000000000000000000000000000000xxxx
x00x0000000000000000000000000000000xxxx
x0000000000000000000000000000000000xxxx
x0000000000000000000000000000000000xxxx
x0000000000000000000000000000000000xxxx
x0000000000000000000000000000000000xxxx
x00x0000000000000000000000000000000xxxx
x00x0000000000000000000000000000000xxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_6',
                'public_items' => '',
            ),
            56 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 17,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxx
x222222xx00000000xxxxxxxx
x222222xx00000000xxxxxxxx
x2222221000000000xxxxxxxx
x2222221000000000xxxxxxxx
x222222xx00000000xxxxxxxx
x222222xx00000000xxxxxxxx
x222222xxxxxxxxxxxxxxxxxx
x222222xkkkkkkxxiiiiiiiix
x222222xkkkkkkxxiiiiiiiix
x222222xkkkkkkjiiiiiiiiix
x222222xkkkkkkjiiiiiiiiix
x222222xkkkkkkxxiiiiiiiix
xxx11xxxkkkkkkxxiiiiiiiix
xxx00xxxkkkkkkxxxxxxxxxxx
x000000xkkkkkkxxxxxxxxxxx
x000000xkkkkkkxxxxxxxxxxx
0000000xkkkkkkxxxxxxxxxxx
x000000xkkkkkkxxxxxxxxxxx
x000000xkkkkkkxxxxxxxxxxx
x000000xxxjjxxxxxxxxxxxxx
x000000xxxiixxxxxxxxxxxxx
x000000xiiiiiixxxxxxxxxxx
xxxxxxxxiiiiiixxxxxxxxxxx
xxxxxxxxiiiiiixxxxxxxxxxx
xxxxxxxxiiiiiixxxxxxxxxxx
xxxxxxxxiiiiiixxxxxxxxxxx
xxxxxxxxiiiiiixxxxxxxxxxx
xxxxxxxxiiiiiixxxxxxxxxxx
xxxxxxxxiiiiiixxxxxxxxxxx',
                'name' => 'model_7',
                'public_items' => '',
            ),
            57 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 15,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
x5555555555555555555555555xxxxxxxxx
x5555555555555555555555555xxxxxxxxx
x5555555555555555555555555xxxxxxxxx
x5555555555555555555555555xxxxxxxxx
x5555555555555555555555555xxxxxxxxx
x5555555555555555555555555xxxxxxxxx
x5555555555xxxxxxxxxxxxxxxxxxxxxxxx
x55555555554321000000000000000000xx
x55555555554321000000000000000000xx
x5555555555xxxxx00000000000000000xx
x555555x44x0000000000000000000000xx
x555555x33x0000000000000000000000xx
x555555x22x0000000000000000000000xx
x555555x11x0000000000000000000000xx
5555555x00x0000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
x555555x0000000000000000000000000xx
xxxxxxxx0000000000000000000000000xx
xxxxxxxx0000000000000000000000000xx
xxxxxxxx0000000000000000000000000xx
xxxxxxxx0000000000000000000000000xx
xxxxxxxx0000000000000000000000000xx
xxxxxxxx0000000000000000000000000xx
xxxxxxxx0000000000000000000000000xx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_8',
                'public_items' => '',
            ),
            58 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 0,
                'door_y' => 17,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxxxxxxx
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
00000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
x0000000000000000000000x
xxxxxxxxxxxxxxxxxxxxxxxx',
                'name' => 'model_9',
                'public_items' => '',
            ),
            59 => 
            array (
                'club_only' => '0',
                'door_dir' => 2,
                'door_x' => 16,
                'door_y' => 11,
                'heightmap' => 'xxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxx0xxxxx
xxxxxxxxxxxxxxxxxxx
xx00000000000000000
xx00000000000000000
xx00000000000000000
xx00000000000000000
xx00000000000000000
xx00000000000000000
xx00000000000000000
xx00000000000000000
xxxxxxxxxxxxxxxx0xx',
                'name' => 'infobus_bus',
                'public_items' => ' ',
            ),
        ));
        
        
    }
}