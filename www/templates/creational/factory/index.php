<?php
require_once '../../../vendor/autoload.php';
use templates\creational\factory\DoorFactory;

$door = DoorFactory::makeDoor(100, 200);
echo "Door #1 <br/>";
echo 'Width: ' . $door->getWidth() . '<br/>';
echo 'Height: ' . $door->getHeight() . '<br/>';

echo '<br/>';

$door2 = DoorFactory::makeDoor(150, 250);
echo "Door #2 <br/>";
echo 'Width: ' . $door2->getWidth() . '<br/>';
echo 'Height: ' . $door2->getHeight() . '<br/>';