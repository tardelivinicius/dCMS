<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function me(){
        return view('me');
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
