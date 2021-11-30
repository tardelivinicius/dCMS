<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupportIssueCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('support_issue_categories')->delete();
        
        \DB::table('support_issue_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PII',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Whatever',
            ),
        ));
        
        
    }
}