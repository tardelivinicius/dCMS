<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecialEnablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('special_enables')->delete();
        
        \DB::table('special_enables')->insert(array (
            0 => 
            array (
                'effect_id' => 102,
                'min_rank' => 5,
            ),
            1 => 
            array (
                'effect_id' => 178,
                'min_rank' => 5,
            ),
            2 => 
            array (
                'effect_id' => 136,
                'min_rank' => 5,
            ),
        ));
        
        
    }
}