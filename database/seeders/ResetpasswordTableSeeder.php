<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ResetpasswordTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('resetpassword')->delete();
        
        
        
    }
}