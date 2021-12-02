<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsGeneralController extends HotelController
{   
    public function show()
    {   
        $userGeneralConfigs = DB::table('users_settings')
                        ->select('block_following', 'block_friendrequests', 'block_roominvites')
                        ->where('user_id', $this->userId)
                        ->first();
        return view('settings/settings_general', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->getUsersOnline(), 'userGeneralConfigs' => $userGeneralConfigs]);
    }

    public function save_general_settings(Request $request)
    {   
        DB::table('users_settings')
            ->where('user_id', $this->userId)
            ->update(['block_following' => $request->block_following, 'block_friendrequests' => $request->block_friendrequests, 'block_roominvites' =>$request->block_roominvites ]);
        return redirect('/general-settings');
    }
}
