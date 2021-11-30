<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Datetime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\SystemConfigController;

class RegisterController extends SystemConfigController
{   
    # Loading the register page and need the first informations
    public function register(){
        return view('register', ['hotel_name' => $this->getHotelName()]);
    }

    # Loading the second step from register with data of the first step
    public function register_step2(Request $request){
        # Insert in session the step1 
        session()->put('data', ['username' => $request->username, 'password' => $request->password, 'email' => $request->email, 'gender' => $request->gender]);
        return view('register2', ['hotel_name' => $this->getHotelName()]);
    }

    # Save the habbo user
    public function finish_register(Request $request){
        # Get data from first step
        if (session()->has('data')) {
            $data = session('data'); //array
            $request = array_merge($data, $request->all());
            $request = (object) $request;
        }

        # Username validation
        if($request->username == null){
            return response('É necessário preencher o nome de usuário', 404);
        }
        # Password validation
        if($request->password == null){
            return response('É necessário preencher uma senha', 404);
        } else {
            $new_password = Hash::make($request->password);
        }
        # E-mail validation
        if($request->email == null){
            return response('É necessário preencher o endereço de e-mail', 404);
        } 
        $date = new DateTime();
        DB::table('users')->insert(([
            'username' => $request->username,
            'password' => $new_password,
            'auth_ticket' => 0,
            'credits' => 50000,
            'look' => $request->avatar_code,
            'gender' => $request->gender,
            'motto' => 'Olá, eu sou um '.$this->getHotelName().'!',
            'mail' => $request->email,
            'account_created' => $date->getTimestamp(),
            'ip_register' => $_SERVER['REMOTE_ADDR'],
            'ip_current' => $_SERVER['REMOTE_ADDR']
        ]));
        # TODO - INSERIR ENVIO DE EMAIL COM A CONFIRMACAO DE CADASTRO
        return redirect('/register-success');
    }

    # Loading the last page from register
    public function register_success(){
        return view('register3', ['hotel_name' => $this->getHotelName()]);
    }
}
