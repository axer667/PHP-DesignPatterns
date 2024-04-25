<?php
require_once '../../../vendor/autoload.php';
use tempaltes\structural\adapter\Hunter;
use tempaltes\structural\adapter\WildDog;
use tempaltes\structural\adapter\WildDogAdapter;

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);