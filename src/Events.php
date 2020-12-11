<?php

namespace LaravelSchema\Events;

class Events
{
    public function holamundo(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}