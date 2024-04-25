<?php
namespace templates\behavioral\command;

// Receiver
class Bulb
{
    public function turnOn()
    {
        echo "Bulb has been lit <br/>";
    }

    public function turnOff()
    {
        echo "Darkness! <br/>";
    }
}