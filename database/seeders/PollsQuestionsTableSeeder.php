<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PollsQuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('polls_questions')->delete();
        
        
        
    }
}