<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SystemConfigController;

class IndexController extends SystemConfigController
{
    public function main(){
        return view('index', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }
}
