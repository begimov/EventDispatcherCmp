<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Tests\Stubs\ListenerStub;
use App\Tests\Stubs\EventStub;

class ListenerTest extends TestCase
{
    /** @test */
    public function handle_accepts_type_hinted_event()
    {
        $listener = new ListenerStub();
        $listener->handle(new EventStub());

        $this->addToAssertionCount(1);
    }

    /** @test */
    // public function handle_throws_error_when_invalid_event_is_passed_in()
    // {
    //     $this->expectException(\TypeError::class);
    //
    //     $listener = new ListenerStub();
    //     $listener->handle(new EventStub());
    // }

}
