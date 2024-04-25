<?php
require_once '../../../vendor/autoload.php';
use tempaltes\structural\bridge\About;
use tempaltes\structural\bridge\Careers;
use tempaltes\structural\bridge\DarkTheme;

$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent(); // "About page in Dark Black";
echo "<br/>";
echo $careers->getContent(); // "Careers page in Dark Black";