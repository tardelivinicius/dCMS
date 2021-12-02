<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HotelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends HotelController
{
    public function me(){
        return view('me', ['hotel_name' => $this->hotel_name, 'users_online' => $this->users_online]);
    }

    public function changeMotto(Request $request)
    {   
        DB::table('users')
        ->where('id', session()->get('id'))
        ->update(['motto' => $request->motto]);
        # Update session
        $userData = new UserDataController(session()->get('id'));
        $userData->setUserDataSession();
        return response('', 202);
    }
}
