<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferrerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('referrer')->delete();
        
        
        
    }
}