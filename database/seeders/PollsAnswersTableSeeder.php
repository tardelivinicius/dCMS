<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PollsAnswersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('polls_answers')->delete();
        
        
        
    }
}