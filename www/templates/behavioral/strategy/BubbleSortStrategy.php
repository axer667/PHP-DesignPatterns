<?php
namespace templates\behavioral\strategy;

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using bubble sort <br/>";

        // Do sorting
        return $dataset;
    }
}