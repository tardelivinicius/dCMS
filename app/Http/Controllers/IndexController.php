<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SystemConfigController;

class IndexController extends SystemConfigController
{
    public function main(){
        # TODO - VERIFICAR COMO TRABALHAR COM CONTROLE DE SESSAO E REDIRECIONAMENTO
        if(session()->exists('id')) {
            return redirect('/me');
        } 
        return view('index', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }
}
