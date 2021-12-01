<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsMailController extends SystemConfigController
{   
    public function show()
    {   
        return view('settings/settings_mail', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->getUsersOnline()]);
    }
}
