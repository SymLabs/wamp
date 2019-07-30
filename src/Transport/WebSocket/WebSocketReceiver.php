<?php

namespace SymLabs\WAMP\Transport\WebSocket;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Exception\TransportException;
use Symfony\Component\Messenger\Transport\Receiver\ReceiverInterface;

class WebSocketReceiver implements ReceiverInterface
{

    /**
     * @inheritdoc
     */
    public function get(): iterable
    {
        // TODO: Implement get() method.
    }

    /**
     * @inheritdoc
     */
    public function ack(Envelope $envelope): void
    {
        // TODO: Implement ack() method.
    }

    /**
     * @inheritdoc
     */
    public function reject(Envelope $envelope): void
    {
        // TODO: Implement reject() method.
    }
}
