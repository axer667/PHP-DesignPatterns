<?php
require_once '../../../vendor/autoload.php';
use templates\creational\factory_method\DevelopmentManager;
use templates\creational\factory_method\MarketingManager;

$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Спрашивает о шаблонах проектирования.

echo "<br/>";

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Спрашивает о создании сообщества.
