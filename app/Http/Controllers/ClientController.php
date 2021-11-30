<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{   
    public function loading()
    {   
        $authTicket = 'dCMS-1.0.0-'.uniqid().'';
        DB::table('users')
        ->where('username', session()->get('username'))
        ->update(['auth_ticket' => $authTicket]);
        return view('client', ['authTicket' => $authTicket]);
    }
}
