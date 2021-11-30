<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoucherHistoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('voucher_history')->delete();
        
        
        
    }
}