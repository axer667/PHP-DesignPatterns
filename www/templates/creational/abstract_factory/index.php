<?php
require_once '../../../vendor/autoload.php';

use templates\creational\abstract_factory\IronDoorFactory;
use templates\creational\abstract_factory\WoodenDoorFactory;

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();  // Output: Я деревянная дверь
echo "<br/>";
$expert->getDescription(); // Output: Я могу устанавливать только деревянные двери

echo "<br/>";

// Same for Iron Factory
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();
echo "<br/>";
$door->getDescription();  // Output: Я стальная дверь
echo "<br/>";
$expert->getDescription(); // Output: Я могу устанавливать только стальные двери
