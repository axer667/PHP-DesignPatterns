<?php
require_once '../../../vendor/autoload.php';
use tempaltes\structural\facade\Computer;
use tempaltes\structural\facade\ComputerFacade;

$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
echo "<br/>";
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz