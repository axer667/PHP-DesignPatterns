<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\template_method\AndroidBuilder;
use templates\behavioral\template_method\IosBuilder;

$androidBuilder = new AndroidBuilder();
$androidBuilder->build();

// Output:
// Выполнение Android-тестов
// Линтинг Android-кода
// Создание Android-сборки
// Развёртывание Android-сборки на сервере

$iosBuilder = new IosBuilder();
$iosBuilder->build();

// Output:
// Выполнение iOS-тестов
// Линтинг iOS-кода
// Создание iOS-сборки
// Развёртывание iOS-сборки на сервере