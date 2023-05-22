<?php

/**
 * leetcode problem: contains-duplicate
 *
 * url: https://leetcode.com/problems/contains-duplicate/
 *
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate(array $nums): bool
{
    $arrayCountValues = array_count_values($nums);
    $arrayCountValues = array_count_values($arrayCountValues);

    return !(array_key_exists('1', $arrayCountValues) && count($arrayCountValues) == 1);
}

var_dump(
    containsDuplicate([4, 2, 3, 4])
);
