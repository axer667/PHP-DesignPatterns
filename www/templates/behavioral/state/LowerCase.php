<?php
namespace templates\behavioral\state;

class LowerCase implements WritingState
{
    public function write(string $words)
    {
        echo strtolower($words) . "<br/>";
    }
}