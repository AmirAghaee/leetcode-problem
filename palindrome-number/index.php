<?php

/**
 * leetcode problem: palindrome-number
 *
 * url: https://leetcode.com/problems/palindrome-number/
 *
 * @param Integer $x
 * @return bool
 */
function isPalindrome(int $x): bool
{
    if ($x < 0) return false;

    $splitArray = str_split((string)$x);

    for ($i = 0; $i < (count($splitArray) / 2); $i++) {
        if ($splitArray[$i] != $splitArray[count($splitArray) - 1 - $i])
            return false;
    }
    return true;
}

var_dump(
    isPalindrome("15451")
);