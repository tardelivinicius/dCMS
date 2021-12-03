<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsGeneralController extends Controller
{   
    public function show()
    {   
        $userGeneralConfigs = DB::table('users_settings')
                        ->select('block_following', 'block_friendrequests', 'block_roominvites')
                        ->where('user_id', session()->get('id'))
                        ->first();
        return view('settings/settings_general', ['userGeneralConfigs' => $userGeneralConfigs]);
    }

    public function save_general_settings(Request $request)
    {   
        DB::table('users_settings')
            ->where('user_id', session()->get('id'))
            ->update(['block_following' => $request->block_following, 'block_friendrequests' => $request->block_friendrequests, 'block_roominvites' =>$request->block_roominvites ]);
        return redirect('/general-settings');
    }
}
