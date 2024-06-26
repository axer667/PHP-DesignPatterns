<?php
require_once '../../../vendor/autoload.php';
use tempaltes\structural\flyweight\TeaMaker;
use tempaltes\structural\flyweight\TeaShop;

$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);

$shop->serve();
// Serving tea to table# 1
// Serving tea to table# 2
// Serving tea to table# 5