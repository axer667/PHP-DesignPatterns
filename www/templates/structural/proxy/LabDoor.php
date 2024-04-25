<?php
namespace tempaltes\structural\proxy;

class LabDoor implements Door
{
    public function open()
    {
        echo "Opening lab door <br/>";
    }

    public function close()
    {
        echo "Closing the lab door <br/>";
    }
}