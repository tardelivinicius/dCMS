<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupportTicketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('support_tickets')->delete();
        
        
        
    }
}