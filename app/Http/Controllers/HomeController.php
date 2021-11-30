<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SystemConfigController;
use App\Http\Controllers\SessionController;

class HomeController extends SystemConfigController
{
    public function me(){
        if(!session()->exists('id')) {
            return redirect('/');
        } 
        return view('me', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }
}
