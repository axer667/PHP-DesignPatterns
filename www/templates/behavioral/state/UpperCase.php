<?php
namespace templates\behavioral\state;

class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words) . "<br/>";
    }
}