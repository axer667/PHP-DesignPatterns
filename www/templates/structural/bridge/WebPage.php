<?php
namespace tempaltes\structural\bridge;

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}