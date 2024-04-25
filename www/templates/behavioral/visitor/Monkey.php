<?php
namespace templates\behavioral\visitor;

class Monkey implements Animal
{
    public function shout()
    {
        echo 'Ooh oo aa aa! <br/>';
    }

    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}