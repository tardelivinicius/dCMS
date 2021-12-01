<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingsMailController extends SystemConfigController
{   
    public function show()
    {   
        return view('settings/settings_mail', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->getUsersOnline()]);
    }

    public function change_email_address(Request $request)
    {      
        # TODO - ESTUDAR RESPONSE PARA O BLADE E CAPTAR O ERRO E MOSTRAR NA TELA
        # Check user
        $checkUser = DB::table('users')
                        ->select('mail', 'password')
                        ->where('id', $this->userId, 'mail', $request->old_email)
                        ->first();
        if ($checkUser) {
            # Check if new email is available
            $checkNewEmail = DB::table('users')
                                ->select('mail')
                                ->where('mail', $request->email)
                                ->first();
            if (!$checkNewEmail) {
                # Password Validation
                if (!Hash::check($request->password, $checkUser->password)) {
                    # Senha inválida
                    return response('Senha inválida', 404);
                }
                DB::table('users')
                    ->where('id', $this->userId)
                    ->where('mail', $request->old_email)
                    ->update(['mail' => $request->email]);
                # Update session
                $userData = new UserDataController(session()->get('id'));
                $userData->setUserDataSession();
                return redirect('/email-settings');
            } else {
                # E-mail já utilizado
                return response('E-mail já utilizado', 404);
            }
        } else {
            # Não foi encontrado usuário da sessão
            return response('Não foi encontrado usuário da sessão', 404);
        }
    }
}
