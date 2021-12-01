<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityNewsController extends SystemConfigController
{
    public function show()
    {
        return view('community/news', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->getUsersOnline()]);
    }
}
