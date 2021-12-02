<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HotelController;

class IndexController extends HotelController
{
    public function main(){
        # TODO - VERIFICAR COMO TRABALHAR COM CONTROLE DE SESSAO E REDIRECIONAMENTO
        if(session()->exists('id')) {
            return redirect('/me');
        } 
        return view('index', ['hotel_name' => $this->getHotelName(), 'users_online' => $this->users_online]);
    }
}
