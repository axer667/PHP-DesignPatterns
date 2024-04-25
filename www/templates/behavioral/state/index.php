<?php
require_once '../../../vendor/autoload.php';
use templates\behavioral\state\DefaultState;
use templates\behavioral\state\LowerCase;
use templates\behavioral\state\TextEditor;
use templates\behavioral\state\UpperCase;

$editor = new TextEditor(new DefaultState());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');

// Output:
// First line
// SECOND LINE
// THIRD LINE
// fourth line
// fifth line