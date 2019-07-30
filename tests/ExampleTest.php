<?php

declare(strict_types=1);

namespace SymLabs\WAMP;

use Organization\WAMP\Message\MyMessage;
use Organization\WAMP\Message\MyMessageHandler;
use Symfony\Component\Messenger\Handler\HandlersLocator;
use Symfony\Component\Messenger\MessageBus;
use Symfony\Component\Messenger\Middleware\HandleMessageMiddleware;

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {
        $bus = new MessageBus([
            new HandleMessageMiddleware(new HandlersLocator([
                MyMessage::class => ['dummy' => MyMessageHandler::class],
            ])),
        ]);

        $bus->dispatch(new MyMessage(/* ... */));

        $this->assertTrue(true);
    }
}
