<?php
namespace templates\creational\abstract_factory;

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'I am a wooden door';
    }
}