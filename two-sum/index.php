<?php

/**
 * leetcode problem: two-sum
 *
 * url: https://leetcode.com/problems/two-sum/
 *
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum(array $nums, int $target): array
{
    foreach ($nums as $keyMain => $numMain) {
        foreach ($nums as $key => $num) {
            if ($keyMain == $key)
                continue;

            if ($target == ($numMain + $num))
                return [$keyMain, $key];

        }
    }
    return [];
}

var_dump(
    twoSum([3, 2, 4], 6)
);