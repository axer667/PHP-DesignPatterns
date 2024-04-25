<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\mediator\ChatRoom;
use templates\behavioral\mediator\User;

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');

// Выходной вид
// Feb 14, 10:58 [John]: Hi there!
// Feb 14, 10:58 [Jane]: Hey!