<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {   
        # Destroy session
        session()->flush();
        return redirect('/');
    }
}
