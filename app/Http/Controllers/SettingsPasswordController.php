<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingsPasswordController extends Controller
{   
    public function show()
    {   
        return view('settings/settings_password');
    }

    public function change_password(Request $request)
    {      
        # TODO - ESTUDAR RESPONSE PARA O BLADE E CAPTAR O ERRO E MOSTRAR NA TELA
        # Check user
        $checkUser = DB::table('users')
                        ->select('mail', 'password')
                        ->where('id', session()->get('id'))
                        ->where('mail', $request->email)
                        ->first();
        if ($checkUser) {
            # Password Validation
            if (!Hash::check($request->old_password, $checkUser->password)) {
                # Senha inválida
                return response('Senha inválida', 404);
            }
            $new_password = Hash::make($request->password);
            DB::table('users')
                ->where('id', session()->get('id'))
                ->where('mail', $request->email)
                ->update(['password' => $new_password]);
                return redirect('/password-settings');
        } else {
            return response('Usuário inválido', 404);
        }
    }  
}