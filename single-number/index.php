<?php

/**
 * leetcode problem: single-number
 *
 * url: https://leetcode.com/problems/single-number/
 *
 * @param Integer[] $nums
 * @return Integer
 */
function singleNumber(array $nums): int
{
    $arrayCountValues = array_count_values($nums);
    return array_search(1, $arrayCountValues);
}

var_dump(
    singleNumber([4, 1, 2, 1, 2])
);