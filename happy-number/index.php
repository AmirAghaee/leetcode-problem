<?php

/**
 * leetcode problem: happy-number
 *
 * url: https://leetcode.com/problems/happy-number/
 *
 * @param Integer $n
 * @return Boolean
 */
function isHappy(int $n): bool
{
    for ($i = 0; $i < 100; $i++) {
        $sum = 0;
        foreach (str_split($n) as $digit) {
            $sum = $sum + pow($digit, 2);
        }
        $n = $sum;
    }

    return array_sum(str_split($sum)) == 1;
}

var_dump(
    isHappy(5)
);