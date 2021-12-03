<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserDataController extends Controller
{   
    protected object $user;
    protected int $id;
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

    public function __construct(int $idUser)
    {   
        if ($idUser == null) {
            // todo - erro na validacao
        } else {
            $this->user = DB::table('users')->where('id', $idUser)->first();
        }
        $this->setUserId();
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

    # ID
    public function setUserId()
    {
        $this->id = $this->user->id;
    }

    public function getUserId(): int
    {
        return $this->id;
    }

    # Username
    public function setUserName()
    {
        $this->username = $this->user->username;
    }

    public function getUserName(): string
    {
        return $this->username;
    }

    # E-mail
    public function setEmail()
    {
        $this->mail = $this->user->mail;
    }
    
    public function getEmail(): string
    {
        return $this->mail;
    }
    # Account Created
    public function setAccountCreated()
    {
        $this->accountCreated = date('d/m/Y', $this->user->account_created);
    }
    
    public function getAccountCreated(): string
    {
        return $this->accountCreated;
    }

    # Motto
    public function setMotto()
    {
        $this->motto = $this->user->motto;
    }
    public function getMotto(): string
    {
        return $this->motto;
    }

    # Look
    public function setLook()
    {
        $this->look = $this->user->look;
    }
    public function getLook(): string
    {
        return $this->look;
    }

    # Gender
    public function setGender()
    {
        $this->gender = $this->user->gender;
    }
    public function getGender(): string
    {
        return $this->gender;
    }

    # Rank
    public function setRank()
    {
        $this->rank = $this->user->rank;
    }
    public function getRank(): string
    {
        return $this->rank;
    }

    # Credits
    public function setCredits()
    {
        $this->credits = $this->user->credits;
    }
    public function getCredits(): int
    {
        return $this->credits;
    }

    # Pixels
    public function setPixels()
    {
        $this->pixels = $this->user->pixels;
    }
    public function getPixels(): int
    {
        return $this->pixels;
    }

    # Points
    public function setPoints()
    {
        $this->points = $this->user->points;
    }
    public function getPoints(): int
    {
        return $this->points;
    }

    # Online
    public function setOnline()
    {
        $this->online = $this->user->online;
    }
    public function getOnline(): string
    {
        return $this->online;
    }
}
