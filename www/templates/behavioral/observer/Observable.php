<?php
namespace templates\behavioral\observer;

interface Observable {
    public function attach(Observer $instance);
    public function notify(JobPost $jobPost);
}