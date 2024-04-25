<?php
namespace templates\behavioral\visitor;

class Dolphin implements Animal
{
    public function speak()
    {
        echo 'Tuut tuttu tuutt! <br/>';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}