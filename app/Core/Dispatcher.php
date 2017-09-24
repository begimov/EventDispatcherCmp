<?php

namespace App\Core;

class Dispatcher
{
    protected $listeners = [];
    
    public function getListeners()
    {
        return $this->listeners;
    }
}
