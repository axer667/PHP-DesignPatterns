<?php
namespace templates\behavioral\visitor;

// Место посещения
interface Animal
{
    public function accept(AnimalOperation $operation);
}