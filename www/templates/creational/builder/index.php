<?php
require_once '../../../vendor/autoload.php';
use templates\creational\builder\BurgerBuilder;

$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();

echo "<pre>";
print_r($burger);
echo "</pre>";