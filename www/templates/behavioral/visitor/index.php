<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\visitor\Dolphin;
use templates\behavioral\visitor\Jump;
use templates\behavioral\visitor\Lion;
use templates\behavioral\visitor\Monkey;
use templates\behavioral\visitor\Speak;

$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();

$speak = new Speak();

$monkey->accept($speak);    // Уа-уа-уааааа!
$lion->accept($speak);      // Ррррррррр!
$dolphin->accept($speak);   // Туут тутт туутт!

$jump = new Jump();

$monkey->accept($speak);   // Ooh oo aa aa!
$monkey->accept($jump);    // Jumped 20 feet high! on to the tree!

$lion->accept($speak);     // Roaaar!
$lion->accept($jump);      // Jumped 7 feet! Back on the ground!

$dolphin->accept($speak);  // Tuut tutt tuutt!
$dolphin->accept($jump);   // Walked on water a little and disappeared
