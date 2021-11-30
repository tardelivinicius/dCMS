<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SystemConfigController;

class HomeController extends SystemConfigController
{
    public function me(){
        return view('me', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }
}
