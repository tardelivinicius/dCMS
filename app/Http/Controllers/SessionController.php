<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{   
    # Create session
    public function setUserDataSession($id){
        $userData = new UserDataController($id);
        # Destroy session
        session()->flush();
        # Generate new session
        session([
            'id' => $userData->getUserId(),
            'username' => $userData->getUserName(), 
            'email' => $userData->getEmail(),
            'motto' => $userData->getMotto(),
            'rank' => $userData->getRank(),
            'look' => $userData->getLook(),
            'credits' => $userData->getCredits(),
            'pixels' => $userData->getPixels()
        ]);
    }
}
