<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsHighscoreDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items_highscore_data')->delete();
        
        
        
    }
}