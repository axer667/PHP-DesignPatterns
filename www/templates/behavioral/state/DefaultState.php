<?php
namespace templates\behavioral\state;

class DefaultState implements WritingState
{
    public function write(string $words)
    {
        echo $words . '<br/>';
    }
}