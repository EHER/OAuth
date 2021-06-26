<?php

namespace Eher\OAuth;

class ConsumerTest extends \PHPUnit\Framework\TestCase
{
    public function testConsumer()
    {
        $consumer = null;

        $consumer = new Consumer("ConsumerKey", "ConsumerSecret");

        $this->assertEquals(
            'Consumer[key=ConsumerKey,secret=ConsumerSecret]',
            (string) $consumer
        );
    }
}
