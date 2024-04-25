<?php
require_once '../../../vendor/autoload.php';
use tempaltes\structural\composite\Designer;
use tempaltes\structural\composite\Developer;
use tempaltes\structural\composite\Organization;

$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

// Включение их в штат
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 27000
