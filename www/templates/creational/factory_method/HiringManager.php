<?php
namespace templates\creational\factory_method;
abstract class HiringManager
{
    // Фабричный метод
    abstract public function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}