<?php

/**
 * leetcode problem: divide-two-integers
 *
 * url: https://leetcode.com/problems/divide-two-integers/
 *
 * @param Integer $dividend
 * @param Integer $divisor
 * @return Integer
 */
function divide(int $dividend, int $divisor): int
{
    $ans = $dividend / $divisor;
    if ($ans <= -2147483648)
        return -2147483648;
    else if ($ans >= 2147483647)
        return 2147483647;
    else
        return intval($ans);

}

var_dump(
    divide(10, 3)
);