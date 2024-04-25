<?php
namespace templates\behavioral\strategy;

interface SortStrategy
{
    public function sort(array $dataset): array;
}