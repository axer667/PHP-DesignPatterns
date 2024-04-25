<?php
namespace templates\behavioral\chain_of_responsibility;

use Exception;

abstract class Account
{
    protected $successor;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    /**
     * @throws Exception
     */
    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, get_called_class()) . "<br/>";
        } elseif ($this->successor) {
            echo sprintf('Cannot pay using %s. Proceeding ...' . PHP_EOL, get_called_class()) . "<br/>";
            $this->successor->pay($amountToPay);
        } else {
            throw new Exception('None of the accounts have enough balance');
        }
    }

    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }
}