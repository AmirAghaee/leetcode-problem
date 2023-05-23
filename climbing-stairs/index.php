<?php

/**
 * leetcode problem: climbing-stairs
 *
 * url: https://leetcode.com/problems/climbing-stairs/
 *
 * @param Integer $n
 * @return Integer
 */
function climbStairs(int $n): int
{
    return round(pow((sqrt(5) + 1) / 2, $n + 1) / sqrt(5));
}


var_dump(
    climbStairs(4)
);
