<?php

namespace App\Tests\Stubs;

use App\Core\Listeners\Listener;
use App\Core\Events\Event;

class ListenerStub extends Listener
{
    public function handle(Event $event)
    {
        //
    }
}
