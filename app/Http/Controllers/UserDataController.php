<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class UserDataController extends Controller
{   
    protected object $user;
    protected string $username;
    protected string $mail;
    protected string $accountCreated;
    protected string $motto;
    protected string $look;
    protected string $gender;
    protected string $rank;
    protected int $credits;
    protected int $pixels;
    protected int $points;
    protected string $online;

    public function __construct(string $username)
    {
        $this->user = DB::table('users')->where('username', $username)->first();
        $this->setUserName();
        $this->setEmail();
        $this->setAccountCreated();
        $this->setMotto();
        $this->setLook();
        $this->setGender();
        $this->setRank();
        $this->setCredits();
        $this->setPixels();
        $this->setPoints();
        $this->setOnline();
    }

    # Username
    protected function setUserName()
    {
        $this->username = $this->user->username;
    }

    protected function getUserName(): string
    {
        return $this->username;
    }

    # E-mail
    protected function setEmail()
    {
        $this->mail = $this->user->mail;
    }
    
    protected function getEmail(): string
    {
        return $this->mail;
    }
    # Account Created
    protected function setAccountCreated()
    {
        $this->accountCreated = date('d/m/Y', $this->user->account_created);
    }
    
    protected function getAccountCreated(): string
    {
        return $this->accountCreated;
    }

    # Motto
    protected function setMotto()
    {
        $this->motto = $this->user->motto;
    }
    protected function getMotto(): string
    {
        return $this->motto;
    }

    # Look
    protected function setLook()
    {
        $this->look = $this->user->look;
    }
    protected function getLook(): string
    {
        return $this->look;
    }

    # Gender
    protected function setGender()
    {
        $this->gender = $this->user->gender;
    }
    protected function getGender(): string
    {
        return $this->gender;
    }

    # Rank
    protected function setRank()
    {
        $this->rank = $this->user->gender;
    }
    protected function getRank(): string
    {
        return $this->rank;
    }

    # Credits
    protected function setCredits()
    {
        $this->credits = $this->user->credits;
    }
    protected function getCredits(): int
    {
        return $this->credits;
    }

    # Pixels
    protected function setPixels()
    {
        $this->pixels = $this->user->pixels;
    }
    protected function getPixels(): int
    {
        return $this->pixels;
    }

    # Points
    protected function setPoints()
    {
        $this->points = $this->user->points;
    }
    protected function getPoints(): int
    {
        return $this->points;
    }

    # Online
    protected function setOnline()
    {
        $this->online = $this->user->online;
    }
    protected function getOnline(): string
    {
        return $this->online;
    }

    # Create session
    public function setUserDataSession(){
        session([
            'username' => $this->getUserName(), 
            'email' => $this->getEmail(),
            'motto' => $this->getMotto(),
            'rank' => $this->getRank(),
            'look' => $this->getLook(),
            'credits' => $this->getCredits(),
            'pixels' => $this->getPixels()
        ]);
    }
}
