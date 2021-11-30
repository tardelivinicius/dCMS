<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SanctionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sanctions')->delete();
        
        
        
    }
}