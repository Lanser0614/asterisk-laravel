<?php

namespace App\Services\AsteriskClinet;

use App\Services\Asterisk\MyAsteriskWebsocket;
use OpiyOrg\AriClient\Client\WebSocket\Settings as AriWebSocketClientSettings;
use OpiyOrg\AriClient\Client\WebSocket\Factory as AriWebSocketClientFactory;

class AsteriskClient
{

    private AriWebSocketClientFactory $ariWebSocketClient;

    public function __construct()
    {
        $this->ariWebSocketClient = AriWebSocketClientFactory::create(
            new AriWebSocketClientSettings('asterisk', 'asterisk', '192.168.100.127', 8088),
            new MyAsteriskWebsocket()
        );
    }

    // https://wikival.bmstu.ru/dokuwiki/doku.php?id=%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81_asterisk#%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80_%D1%81_%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%D0%BC_asterisk_ari
    public function listenWebsocket(){
        return $this->ariWebSocketClient->start();
    }

}
