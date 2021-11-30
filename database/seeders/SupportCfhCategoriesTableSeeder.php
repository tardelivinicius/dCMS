<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupportCfhCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('support_cfh_categories')->delete();
        
        \DB::table('support_cfh_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_external' => 'Cyber sex',
                'name_internal' => 'cyber',
            ),
            1 => 
            array (
                'id' => 2,
                'name_external' => 'Scamming',
                'name_internal' => 'scamming',
            ),
            2 => 
            array (
                'id' => 3,
                'name_external' => 'Inappropriate words',
                'name_internal' => 'badwords',
            ),
            3 => 
            array (
                'id' => 4,
                'name_external' => 'Bad behavior',
                'name_internal' => 'badbehavior',
            ),
            4 => 
            array (
                'id' => 5,
                'name_external' => 'Account Issues',
                'name_internal' => 'account',
            ),
            5 => 
            array (
                'id' => 6,
                'name_external' => 'Hacking',
                'name_internal' => 'hacking',
            ),
        ));
        
        
    }
}