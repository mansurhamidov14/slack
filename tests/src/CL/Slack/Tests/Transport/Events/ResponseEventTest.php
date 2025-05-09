<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Tests\Transport\Events;

use CL\Slack\Transport\Events\ResponseEvent;
use PHPUnit\Framework\TestCase;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class ResponseEventTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_return_a_raw_payload_response()
    {
        $expectedPayloadResponse = [];
        $event = new ResponseEvent($expectedPayloadResponse);
        $actualPayloadResponse = $event->getRawPayloadResponse();

        $this->assertEquals($expectedPayloadResponse, $actualPayloadResponse);
    }

    protected function tearDown(): void
    {
        \Mockery::close();
    }
}
