<?php
namespace templates\behavioral\command;

// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}