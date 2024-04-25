<?php
require_once '../../../vendor/autoload.php';
use tempaltes\structural\decorator\MilkCoffee;
use tempaltes\structural\decorator\SimpleCoffee;
use tempaltes\structural\decorator\VanillaCoffee;
use tempaltes\structural\decorator\WhipCoffee;

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost(); // 10
echo $someCoffee->getDescription(); // Simple Coffee
echo "<br/>";
$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost(); // 12
echo $someCoffee->getDescription(); // Simple Coffee, milk
echo "<br/>";
$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost(); // 17
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip
echo "<br/>";
$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost(); // 20
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip, vanilla