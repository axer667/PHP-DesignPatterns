<?php
namespace templates\creational\abstract_factory;

// Фабрика деревянных дверей возвращает плотника и деревянную дверь
class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}