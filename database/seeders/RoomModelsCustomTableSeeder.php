<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomModelsCustomTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_models_custom')->delete();
        
        \DB::table('room_models_custom')->insert(array (
            0 => 
            array (
                'door_dir' => 2,
                'door_x' => 4,
                'door_y' => 6,
                'heightmap' => 'xxxxxxxxxxxxxxxxx11111111xxxxx11111111xxxxx11111111xxxxx11111111xxxxx11111111xxxxx11111111xxxxxx000000xxxxx0000000000xxx0000000000xxx0000000000xxx0000000000xxx0000000000xxx0000000000xxx0000000000xxx0000000000xxxxxxxxxxxxx',
                'id' => 50,
                'name' => 'custom_50',
            ),
            1 => 
            array (
                'door_dir' => 6,
                'door_x' => 13,
                'door_y' => 5,
                'heightmap' => 'xxxxxxxxxxxxxxx1111111111111x1111111111111x1111111111111x1111111111111x1111111111111x1111111111111xx111111111111xxxxxx111111xxxxxxxx111111xxxxxxxx111111xxxxxxxx111111xxxxxxxx111111xxxxxxxx111111xxxxxxxx111111xxxxxxxx111111xxxxxxxxxxxxxxxx',
                'id' => 51,
                'name' => 'custom_51',
            ),
            2 => 
            array (
                'door_dir' => 6,
                'door_x' => 9,
                'door_y' => 4,
                'heightmap' => 'xxxxxxxxxxxxx0000000xxx0000000xxx0000000xxx0000000xxx0000000xxx0000000xxx0000000xxxxxxxxxx',
                'id' => 52,
                'name' => 'custom_52',
            ),
            3 => 
            array (
                'door_dir' => 4,
                'door_x' => 9,
                'door_y' => 2,
                'heightmap' => 'xxxxxxxxxxxxx0000000xxx0000000xxx000000xxxx000000xxxx0000xxxxxx0000xxxxxxxxxxxxx',
                'id' => 53,
                'name' => 'custom_53',
            ),
            4 => 
            array (
                'door_dir' => 3,
                'door_x' => 6,
                'door_y' => 2,
                'heightmap' => 'xxxxxxxxxxxxx0000xxxxxx0000xxxxxx0000xxxxxx0000xxxxxx00000xxxxx00000xxxxx00000xxxxx00000xxxxx00000xxxxxxx000xxxxxxxxxxxx',
                'id' => 54,
                'name' => 'custom_54',
            ),
            5 => 
            array (
                'door_dir' => 2,
                'door_x' => 6,
                'door_y' => 1,
                'heightmap' => 'xxxxxxxxxxxxxx00000xxxxx00000xxxxx00000xxxxx00000xxxxx00000xxxxx00000xxxxxxxxxxx',
                'id' => 55,
                'name' => 'custom_55',
            ),
            6 => 
            array (
                'door_dir' => 6,
                'door_x' => 10,
                'door_y' => 3,
                'heightmap' => 'xxxxxxxxxxxxxxx00000000xxxx00000000xxxx00000000xxxx00000000xxxxxxxxxxxxx',
                'id' => 56,
                'name' => 'custom_56',
            ),
        ));
        
        
    }
}