<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function listUsers()
    {   
        $users = DB::table('users')
                    ->join('ranks', 'ranks.id', '=', 'users.rank')
                    ->select('users.id', 'look', 'username', 'mail', 'ranks.name as rank_name')
                    ->get();
        return view('admin/users', ['users' => $users]);
    }

    public function retrieveUser(Request $request)
    {
        if($request->route('id') > 0) {
            $user = DB::table('users')
                        ->where('id', $request->route('id'))
                        ->first();
            return view('admin/user', ['user' => $user]);
        } else {
            return redirect('admin/users');
        }
    }
}
