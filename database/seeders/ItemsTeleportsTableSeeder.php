<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTeleportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items_teleports')->delete();
        
        \DB::table('items_teleports')->insert(array (
            0 => 
            array (
                'teleport_one_id' => 414,
                'teleport_two_id' => 415,
            ),
            1 => 
            array (
                'teleport_one_id' => 416,
                'teleport_two_id' => 417,
            ),
            2 => 
            array (
                'teleport_one_id' => 567,
                'teleport_two_id' => 568,
            ),
        ));
        
        
    }
}