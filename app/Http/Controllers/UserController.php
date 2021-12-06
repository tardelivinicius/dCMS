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
            $user = DB::table('users as U')
                        ->join('ranks as R', 'R.id', '=', 'U.rank')
                        ->leftJoin('users_subscriptions as US', 'US.user_id', '=', 'U.id')
                        ->leftJoin('users_currency as UC', function($leftJoin)
                            {
                                $leftJoin->on('UC.user_id', '=', 'U.id')
                                    ->where('UC.type', '=', 5); # Diamantes
                            })
                        ->leftJoin('users_currency as UC2', function($leftJoin)
                            {
                                $leftJoin->on('UC2.user_id', '=', 'U.id')
                                    ->where('UC2.type', '=', 0); # Duckets
                            })
                        ->select('U.*', 'R.name as rank_name', 'US.duration', 'UC.amount as diamonds', 'UC2.amount as duckets')
                        ->where('U.id', $request->route('id'))
                        ->first();
            return view('admin/user', ['user' => $user]);
        } else {
            return redirect('admin/users');
        }
    }
}
