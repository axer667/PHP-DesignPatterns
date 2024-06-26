<?php
require_once '../../../vendor/autoload.php';
use templates\creational\prototype\Sheep;

$original = new Sheep('Jolly');
echo $original->getName(); // Джолли
echo $original->getCategory(); // Горная овечка

echo "<br/>";

// Клонируйте и модифицируйте, что нужно
$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName(); // Долли
echo $cloned->getCategory(); // Горная овечка