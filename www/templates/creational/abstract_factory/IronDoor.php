<?php
namespace templates\creational\abstract_factory;

class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'I am an iron door';
    }
}