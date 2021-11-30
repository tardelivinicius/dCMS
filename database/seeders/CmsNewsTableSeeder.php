<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_news')->delete();
        
        
        
    }
}