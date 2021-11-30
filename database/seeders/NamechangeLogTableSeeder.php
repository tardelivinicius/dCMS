<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NamechangeLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('namechange_log')->delete();
        
        
        
    }
}