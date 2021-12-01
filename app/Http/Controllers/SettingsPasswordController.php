<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsPasswordController extends SystemConfigController
{   
    public function show(Request $request)
    {   
        return view('settings/settings_password', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->getUsersOnline()]);
    }
}