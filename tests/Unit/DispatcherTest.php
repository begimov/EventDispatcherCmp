<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Core\Dispatcher;
use App\Tests\Stubs\ListenerStub;

class DispatcherTest extends TestCase
{
    /** @test */
    public function keeps_listeners_as_an_array()
    {
        $dispatcher = new Dispatcher();
        $this->assertEmpty($dispatcher->getListeners());
        $this->assertInternalType('array', $dispatcher->getListeners());
    }

    /** @test */
    public function can_add_listener()
    {
        $dispatcher = new Dispatcher();
        $listener = new ListenerStub;
        $dispatcher->addListener('PromotionCreated', $listener);
    }

}
