<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bans')->delete();
        
        
        
    }
}