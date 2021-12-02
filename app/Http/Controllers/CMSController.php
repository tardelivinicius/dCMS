<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSController extends SystemConfigController
{   
    protected int $qtdUserRegister;
    
    public function index()
    {
        return view('admin/cms', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }

    public function users()
    {
        return view('admin/users', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }
    
    public function setQtdUserRegister()
    {
        $this->qtdUserRegister = DB::table('users')->count();
    }

    public function getQtdUserRegister()
    {
       return $this->qtdUserRegister;
    }
}
