<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RCONCommandsController extends SocketApiController
{
    private function giveCredits(int $userId, int $credits)
    {
        $this->execute('givecredits', ['user_id' => $userId, 'credits' => $credits]);
        return response('', 202);
    }

    private function alertUser(int $userId, string $message)
    {
        $this->execute('alertuser', ['user_id' => $userId, 'message' => $message]);
        return response('', 202);
    }

    private function givePoints(int $userId, int $type, int $points)
    {
        $this->execute('givepoints', ['user_id' => $userId, 'type' => $type, 'points' => $points]);
        return response('', 202);
    }

    private function hotelAlert(string $message, string $url)
    {
        $this->execute('hotelalert', ['message' => $message, 'url' => $url]);
        return response('', 202);
    }

    private function executeCommand(int $userId, string $command)
    {
        $this->execute('executecommand', ['userId' => $userId, 'command' => $command]);
        return response('', 202);
    }

    private function muteUser(int $userId, int $duration)
    {
        $this->execute('muteuser', ['userId' => $userId, 'duration' => $duration]);
        return response('', 202);
    }

    public function handle(string $command, $userId=null, $credits=null, $message=null, $type=null, $url=null, $duration=null, $points=null, $exec=null)
    {
        switch ($command) {
            case 'givecredits':
                $this->giveCredits($userId, $credits);
                break;
            case 'alertuser':
                $this->alertUser($userId, $message);
                break;
            case 'givepoints':
                $this->givePoints($userId, $type, $points);
                break;
            case 'hotelalert':
                $this->hotelAlert($message, $url);
                break;
            case 'executecommand':
                $this->executeCommand($userId, $exec);
                break;
            case 'muteuser':
                $this->muteUser($userId, $duration);
                break;
        }
    }

}
