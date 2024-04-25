<?php
namespace templates\creational\factory_method;
class MarketingManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}