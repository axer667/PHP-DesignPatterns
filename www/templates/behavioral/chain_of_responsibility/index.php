<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\chain_of_responsibility\Bank;
use templates\behavioral\chain_of_responsibility\Bitcoin;
use templates\behavioral\chain_of_responsibility\Paypal;

// Сделаем такую цепочку
//      $bank->$paypal->$bitcoin
//
// Приоритет у банка
//      Если банк не может оплатить, переходим к Paypal
//      Если Paypal не может, переходим к Bitcoin

$bank = new Bank(100);          // У банка баланс 100
$paypal = new Paypal(200);      // У Paypal баланс 200
$bitcoin = new Bitcoin(300);    // У Bitcoin баланс 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Начнём с банка
try {
    $bank->pay(259);
} catch (Exception $e) {
    echo $e->getMessage();
}

// Выходной вид
// ==============
// Нельзя оплатить с помощью банка. Обрабатываю...
// Нельзя оплатить с помощью Paypal. Обрабатываю...
// Оплачено 259 с помощью Bitcoin!