<?php

/**
 * leetcode problem: power-of-two
 *
 * url: https://leetcode.com/problems/power-of-two/
 *
 * @param Integer $n
 * @return Boolean
 */
function isPowerOfTwo(int $n): bool
{
    if ($n == 1) return true;
    if ($n == 0) return false;
    $sqrt = $n / 2;

    if ((int)$sqrt != $sqrt)
        return false;
    elseif ($sqrt == 2)
        return true;
    else
        return isPowerOfTwo($sqrt);
}

var_dump(
    isPowerOfTwo(92)
);
