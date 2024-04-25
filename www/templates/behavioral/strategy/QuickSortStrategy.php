<?php
namespace templates\behavioral\strategy;

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using quick sort <br/>";

        // Do sorting
        return $dataset;
    }
}