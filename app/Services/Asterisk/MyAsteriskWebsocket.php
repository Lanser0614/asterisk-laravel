<?php

namespace App\Services\Asterisk;

use OpiyOrg\AriClient\StasisApplicationInterface;
use OpiyOrg\AriClient\Model\Message\Event\StasisStart;

class MyAsteriskWebsocket implements StasisApplicationInterface
{
    public function onAriEventStasisStart(StasisStart $stasisStart): void
    {
        printf(
            $stasisStart->getChannel()->getId()
        );
    }
}
