<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{   
    public function loading()
    {   
        $authTicket = 'Habbo-'.uniqid().'';
        DB::table('users')
        ->where('username', session()->get('username'))
        ->update(['auth_ticket' => $authTicket]);
        return view('client', ['authTicket' => $authTicket]);
    }

    public function updateHotelViewNews(){
        print_r(session()->get('rank'));
        if (session()->get('rank') < 7){
            return redirect('/me');
        }
        # TODO - ADICIONAR SEGURANÇA

        # Adicionar notícias
        $hotelViewNews = DB::table('hotelview_news')->get();
        $i = 1;
        # Open archive and read data
        $externalTexts = file_get_contents('gamedata/json/ExternalTexts.json');
        $externalTexts = json_decode($externalTexts, true);
        foreach($hotelViewNews as $hotelViewNew){
            $externalTexts['hotel.view.header.'.$i.''] = $hotelViewNew->title;
            $externalTexts['hotel.view.description.'.$i.''] = $hotelViewNew->text;
            $externalTexts['hotel.view.button.'.$i.''] = $hotelViewNew->button_text;
            $externalTexts['hotel.view.link.'.$i.''] = $hotelViewNew->button_link;
            $i++;
        }
        $json = json_encode($externalTexts);
        if (file_put_contents("gamedata/json/ExternalTexts.json", $json))
            # Adicionar as imagens das notícias
            $i = 1;
            # Open archive and read data
            $configuration = file_get_contents('gamedata/json/configuration.json');
            $configuration = json_decode($configuration, true);
            foreach($hotelViewNews as $hotelViewNew){
                $configuration['hotelview.images']['promo'.$i.''] = $hotelViewNew->image;
                $i++;
            }
            $json = json_encode($configuration);
            if (file_put_contents("gamedata/json/configuration.json", $json)){
                return response('Notícias atualizadas com sucesso', 202);
            }
        else 
            echo "Oops! Error creating json file...";
            return response('', 404);
    }
}