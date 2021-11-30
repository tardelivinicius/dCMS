<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserDataController;

class LoginController extends Controller
{
    public function login(Request $request)
    {      
        # Get data from login view
        if ($request->username === null){
            return response('Preencher o campo de usuário ou endereço de e-mail', 404);
        }
        if ($request->password === null){
            return response('Preencher o campo senha', 404);
        }
        # Check auth with email or username
        $user = DB::table('users')->select('username', 'password')
            ->where('mail', $request->username)
            ->orWhere('username', $request->username)
            ->first();
        
        # Check password HASH
        if (Hash::check($request->password, $user->password)) {
            $userData = new UserDataController($user->username);
            $userData->setUserDataSession();
            return redirect('/me');
        } else {
            return response('Usuário ou senha inválidos', 404);
        }
    }
}
