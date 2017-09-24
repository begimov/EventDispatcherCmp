<?php

namespace App\Core;

use App\Core\Listeners\Listener;

class Dispatcher
{
    protected $listeners = [];

    public function getListeners()
    {
        return $this->listeners;
    }

    public function addListener($eventName, Listener $listener)
    {
        $this->listeners[$eventName][] = $listener;
    }

    public function getListenersByEventName($eventName)
    {
        return $this->listeners[$eventName];
    }
}
