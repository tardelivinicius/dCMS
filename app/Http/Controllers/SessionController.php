<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{   

    protected object $userData;

    public function __construct(int $id)
    {
        $this->userData = new UserDataController($id);
    }
    # Create session
    public function setUserDataSession(){
        # Destroy session
        session()->flush();
        # Generate new session
        session([
            'id' => $this->userData->getUserId(),
            'username' => $this->userData->getUserName(), 
            'email' => $this->userData->getEmail(),
            'motto' => $this->userData->getMotto(),
            'rank' => $this->userData->getRank(),
            'look' => $this->userData->getLook(),
            'credits' => $$this->userData->getCredits(),
            'pixels' => $$this->userData->getPixels()
        ]);
    }
}
