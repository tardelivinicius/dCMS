<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSController extends HotelController
{       
    public function index()
    {
        return view('admin/cms', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }

    public function users()
    {
        return view('admin/users', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }
}
