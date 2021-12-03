<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function main(){
        // # TODO - VERIFICAR COMO TRABALHAR COM CONTROLE DE SESSAO E REDIRECIONAMENTO
        // if(session()->exists('id')) {
        //     return redirect('/me');
        // } 
        return view('index');
    }
}
