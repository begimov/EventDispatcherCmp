<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Core\Dispatcher;

class DispatcherTest extends TestCase
{
    /** @test */
    public function keeps_listeners_as_an_array()
    {
        $dispatcher = new Dispatcher();
        $this->assertEmpty($dispatcher->getListeners());
        $this->assertInternalType('array', $dispatcher->getListeners());
    }

}
