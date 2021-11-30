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
                'name_internal' => 'cyber',
                'name_external' => 'Cyber sex',
            ),
            1 => 
            array (
                'id' => 2,
                'name_internal' => 'scamming',
                'name_external' => 'Scamming',
            ),
            2 => 
            array (
                'id' => 3,
                'name_internal' => 'badwords',
                'name_external' => 'Inappropriate words',
            ),
            3 => 
            array (
                'id' => 4,
                'name_internal' => 'badbehavior',
                'name_external' => 'Bad behavior',
            ),
            4 => 
            array (
                'id' => 5,
                'name_internal' => 'account',
                'name_external' => 'Account Issues',
            ),
            5 => 
            array (
                'id' => 6,
                'name_internal' => 'hacking',
                'name_external' => 'Hacking',
            ),
        ));
        
        
    }
}