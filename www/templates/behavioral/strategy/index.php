<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\strategy\BubbleSortStrategy;
use templates\behavioral\strategy\QuickSortStrategy;
use templates\behavioral\strategy\Sorter;

$dataset = [1, 5, 4, 3, 2, 8];

$sorter = new Sorter(new BubbleSortStrategy());
$sorter->sort($dataset); // Output : Пузырьковая сортировка

$sorter = new Sorter(new QuickSortStrategy());
$sorter->sort($dataset); // Output : Быстрая сортировка