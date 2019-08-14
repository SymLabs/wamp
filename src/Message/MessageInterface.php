<?php
namespace Symlabs\WAMP\Message;

/**
 * Interface MessageInterface
 */
interface MessageInterface
{
    /**
     * @return array
     */
    public function serialize();

    /**
     * @param array $serialized
     * @return MessageInterface
     */
    public function deserialize(array $serialized);
}
