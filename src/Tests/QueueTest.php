<?php

namespace PhpFlo\Component\Tests;

use PhpFlo\Component\Test\TestCase;
use PhpFlo\Core\Network;

class QueueTest extends TestCase
{
    public function testNoMessageIsForwardedWhileQueueSizeIsNotReached()
    {
        $this->markTestIncomplete();
    }

    public function testAllMessagesAreForwardedWhenQueueSizeIsReached()
    {
        $this->markTestIncomplete();
    }

    public function testQueueResize()
    {
        $this->markTestIncomplete();
    }

    public function testErrorIsSendWhenIncorrectResizeMessageIsReceived()
    {
        $this->markTestIncomplete();
    }

    public function testMessagesAreForwardeWhenQueueIsResizedBelowCurrentMessageCount()
    {
        $this->markTestIncomplete();
    }

    public function testMessagesAreForwaredWhenIncomingStreamIsDetached()
    {
        $this->markTestIncomplete();
    }
}
