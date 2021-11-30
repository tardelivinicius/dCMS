<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SystemConfigController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends SystemConfigController
{
    public function me(){
        # TODO - VERIFICAR COMO TRABALHAR COM CONTROLE DE SESSAO E REDIRECIONAMENTO
        if(!session()->exists('id')) {
            return redirect('/');
        } 
        return view('me', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }

    public function changeMotto(Request $request)
    {   
        $user = DB::table('users')
        ->where('id', session()->get('id'))
        ->update(['motto' => $request->motto]);
        # Update session
        $userData = new UserDataController(session()->get('id'));
        $userData->setUserDataSession();
        return response('', 202);
    }
}
