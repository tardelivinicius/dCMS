<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SystemConfigController extends Controller
{
    protected object $hotel_name;
    protected int $users_online;

    public function __construct()
    {
        $this->hotel_name = DB::table('cms_settings')->select('hotel_name')->first();
        $this->users_online = DB::table('users')->select('online')->where('online', '=', '1')->count();
    }

    public function getHotelName(): string
    {   
        return $this->hotel_name->hotel_name;
    }

    public function getUsersOnline(): int
    {
        return $this->users_online;
    }
}
