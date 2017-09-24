<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;

class EventTest extends TestCase
{
    /** @test */
    public function can_get_event_name()
    {
        $event = new EventStub();

        $this->assertEquals('EventStub', $event->getName());
    }

    /** @test */
    public function defaults_to_event_class_name()
    {
        $event = new EventStubNoName();

        $this->assertEquals('EventStubNoName', $event->getName());
    }
}
