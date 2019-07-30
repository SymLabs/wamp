<?php

namespace SymLabs\WAMP\Transport\WebSocket;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Exception\TransportException;
use Symfony\Component\Messenger\Transport\SetupableTransportInterface;
use Symfony\Component\Messenger\Transport\TransportInterface;

class WebSocketTransport implements TransportInterface, SetupableTransportInterface
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

    /**
     * @inheritdoc
     */
    public function send(Envelope $envelope): Envelope
    {
        // TODO: Implement send() method.
    }

    /**
     * @inheritdoc
     */
    public function setup(): void
    {
        // TODO: Implement setup() method.
    }
}
