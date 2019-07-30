<?php

namespace SymLabs\WAMP\Transport\WebSocket;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Transport\Sender\SenderInterface;

class WebSocketSender implements SenderInterface
{

    /**
     * @inheritdoc
     */
    public function send(Envelope $envelope): Envelope
    {
        // TODO: Implement send() method.
    }
}
