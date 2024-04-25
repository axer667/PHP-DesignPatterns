<?php
namespace templates\behavioral\chain_of_responsibility;

class Bitcoin extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}