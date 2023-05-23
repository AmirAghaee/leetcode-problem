<?php

/**
 * leetcode problem: find-the-index-of-the-first-occurrence-in-a-string
 *
 * url: https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/
 *
 * @param String $haystack
 * @param String $needle
 * @return Integer
 */
function strString(string $haystack, string $needle): int
{
    $result = strpos($haystack, $needle);
    if (!is_int($result))
        return -1;
    return $result;
}

var_dump(
    strString("sadbutsad", "but")
);