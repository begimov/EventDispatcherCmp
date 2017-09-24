<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Tests\Stubs\ListenerStub;

class ListenerTest extends TestCase
{
    /** @test */
    public function handle_throws_error_when_invalid_event_is_passed_in()
    {
        $this->expectException(InvalidArgumentException::class);

        $listener = new ListenerStub();
        $listener->handle('pseudo_event');
    }

}
