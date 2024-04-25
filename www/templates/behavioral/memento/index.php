<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\memento\Editor;

$editor = new Editor();

// Пишем что-нибудь
$editor->type('This is the first sentence.');
$editor->type('This is second.');

// Сохранение состояния в: This is the first sentence. This is second.
$saved = $editor->save();

// Пишем ещё
$editor->type('And this is third.');

// Output: Содержимое до сохранения
echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

// Восстанавливаем последнее сохранённое состояние
$editor->restore($saved);

$editor->getContent(); // This is the first sentence. This is second.
