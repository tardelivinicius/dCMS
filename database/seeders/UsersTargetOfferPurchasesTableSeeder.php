<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTargetOfferPurchasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_target_offer_purchases')->delete();
        
        \DB::table('users_target_offer_purchases')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'offer_id' => 1,
                'state' => 0,
                'amount' => 0,
                'last_purchase' => 0,
            ),
        ));
        
        
    }
}