<?php
namespace templates\behavioral\command;

interface Command
{
    public function execute();
    public function undo();
    public function redo();
}