<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Adams\Rcon\Rcon;

class UserController extends Controller
{
    
    public function listUsers()
    {   
        $users = DB::table('users')
                    ->join('ranks', 'ranks.id', '=', 'users.rank')
                    ->select('users.id', 'look', 'username', 'mail', 'motto', 'credits', 'ranks.name as rank_name')
                    ->get();
        return view('housekeeping/users', ['users' => $users]);
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
                        ->select('U.*', 'R.id as rank_id', 'R.name as rank_name', 'US.duration', 'UC.amount as diamonds', 'UC2.amount as duckets')
                        ->where('U.id', $request->route('id'))
                        ->first();
            $ranks = DB::table('ranks')
                            ->where('id', '<=', session()->get('rank'))
                            ->orderBy('id')
                        ->get();
            return view('housekeeping/user', ['user' => $user, 'ranks' => $ranks]);
        } else {
            return redirect('housekeeping/users');
        }
    }

    public function saveUser(Request $request)
    {
        if($request->route('id') > 0 && $request->route('id') == $request->id) {

            # ID validation
            if($request->id == null){
                return response('É necessário preencher o ID', 404);
            }
            if($request->username == null){
                return response('É necessário preencher o nome de usuário', 404);
            }
            # E-mail validation
            if($request->email == null){
                return response('É necessário preencher o endereço de e-mail', 404);
            } 
            # E-mail validation
            if($request->rank_id == null){
                return response('É necessário preencher o rank', 404);
            } 
            
            DB::table('users')
                ->where('id', $request->id)
                ->update([
                    'username' => $request->username,
                    'mail' => $request->email,
                    'rank' => $request->rank_id,
                ]);
            return redirect('housekeeping/users');   
        }

    }
}
