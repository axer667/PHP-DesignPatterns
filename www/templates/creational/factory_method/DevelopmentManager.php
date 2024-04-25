<?php
namespace templates\creational\factory_method;
class DevelopmentManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}