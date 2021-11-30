<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CmsNewsLikeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_news_like')->delete();
        
        
        
    }
}