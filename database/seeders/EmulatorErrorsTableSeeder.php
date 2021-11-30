<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmulatorErrorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('emulator_errors')->delete();
        
        
        
    }
}