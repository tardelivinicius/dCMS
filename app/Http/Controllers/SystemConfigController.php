<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class SystemConfigController extends Controller
{
    protected int $userId;
    protected object $hotel_name;
    protected int $users_online;

    public function __construct()
    {      
        $this->setHotelName();
        $this->setUsersOnline();
    }

    public function setHotelName()
    {   
        $this->hotel_name = DB::table('cms_settings')->select('hotel_name')->first();
    }

    public function getHotelName(): string
    {   
        return $this->hotel_name->hotel_name;
    }

    public function setUsersOnline()
    {
        $this->users_online = DB::table('users')->select('online')->where('online', '=', '1')->count();
    }
    
    public function getUsersOnline(): int
    {
        return $this->users_online;
    }
}
