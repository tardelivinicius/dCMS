<?php

namespace App\Http\Controllers;

use Origin\Socket\Socket;

class SocketApiController extends Controller
{
    public $result = [];
    public $socket;
    public $settings;
    public $serverPort;
    public $serverHost;
    public $timeout;
    public $protocol;
  
    public function __construct()
    {
        $this->socket = new Socket([
            'host' => '127.0.0.1',
            'protocol' => 'tcp',
            'port' => 3001,
            'timeout' => 30,
            'persistent' => false,
            'context' => [
                'ssl' => [
                    'verify_peer' => false
                ]
            ]
        ]);
    }

    public static function flatten($array, $prefix = '')
    {
        $result = array();
        foreach($array as $key=>$value) {
            if(is_array($value)) {
                $result = $result + self::flatten($value);
            }
            else {
                $result[$prefix . $key] = $value;
            }
        }
        return $result;
    }

  
    public function send($command)
    {
        try {
            if ($this->socket->connect()) {
                $this->socket->write($command);
                return json_decode($this->socket->read());
            }
        } catch (\Exception $e) {  
            response()->json(["status" => "error", "message" => 'error']);
        }
    
        $this->socket->disconnect();
    }
  
    public static function execute($param, $data = null, $merge = false)
    {
        $command = json_encode(['key' => $param, 'data' => ($merge == true) ? self::flatten($data) : $data]);
        return (new self)->send($command);
    }

}
