<?php

namespace SymLabs\WAMP\Serialization;

use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;

class MessagePackSerializer implements SerializerInterface
{

    /**
     * @inheritdoc
     */
    public function decode(array $encodedEnvelope): Envelope
    {
        // TODO: Implement decode() method.
    }

    /**
     * @inheritdoc
     */
    public function encode(Envelope $envelope): array
    {
        // TODO: Implement encode() method.
    }
}
