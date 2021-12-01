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
        $this->hotel_name = DB::table('cms_settings')->select('hotel_name')->first();
        $this->users_online = DB::table('users')->select('online')->where('online', '=', '1')->count();
        $this->middleware(function ($request, $next) {
            if(!session()->exists('id'))
            {   
                if (Route::current()->uri != '/'){
                    return redirect('/');
                }
                return $next($request);
            }else{
                $this->userId = $request->session()->get('id');
                return $next($request);
            }
        });
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
