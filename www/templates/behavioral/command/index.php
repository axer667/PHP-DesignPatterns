<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\command\Bulb;
use templates\behavioral\command\RemoteControl;
use templates\behavioral\command\TurnOff;
use templates\behavioral\command\TurnOn;

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Лампочка зажглась!
$remote->submit($turnOff); // Темнота!