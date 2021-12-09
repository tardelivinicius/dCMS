<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RCONCommandsController extends SocketApiController
{
    public function giveCredits(int $userId, int $credits)
    {
        $this->execute('givecredits', ['user_id' => $userId, 'credits' => $credits]);
        return response('', 202);
    }

    public function alertUser(int $userId, string $message)
    {
        $this->execute('alertuser', ['user_id' => $userId, 'message' => $message]);
        return response('', 202);
    }

    public function givePoints(int $userId, int $type, int $points)
    {
        $this->execute('givepoints', ['user_id' => $userId, 'type' => $type, 'points' => $points]);
        return response('', 202);
    }

    public function hotelAlert(string $message, string $url)
    {
        $this->execute('hotelalert', ['message' => $message, 'url' => $url]);
        return response('', 202);
    }

    public function executeCommand(int $userId, string $command)
    {
        $this->execute('hotelalert', ['userId' => $userId, 'command' => $command]);
        return response('', 202);
    }

}
