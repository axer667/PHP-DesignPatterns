<?php
require_once '../../../vendor/autoload.php';
use tempaltes\structural\proxy\LabDoor;
use tempaltes\structural\proxy\Security;

$door = new Security(new LabDoor());
$door->open('invalid'); // Big no! It ain't possible.

$door->open('$ecr@t'); // Opening lab door
$door->close(); // Closing lab door