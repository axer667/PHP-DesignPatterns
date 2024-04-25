<?php
namespace templates\behavioral\visitor;

class Lion implements Animal
{
    public function roar()
    {
        echo 'Roaaar! <br/>';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}