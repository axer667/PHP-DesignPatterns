<?php
namespace templates\behavioral\chain_of_responsibility;

class Bank extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}