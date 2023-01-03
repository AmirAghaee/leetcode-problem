<?php

/**
 * leetcode problem: word-pattern.
 *
 * url: https://leetcode.com/problems/word-pattern/
 *
 * @param String $pattern
 * @param String $s
 * @return Boolean
 */
function wordPattern(string $pattern, string $s): bool
{
    $patternArray = str_split($pattern);

    $array = [];

    if (count(str_split($pattern)) != count(explode(" ", $s))) return false;


    foreach (explode(" ", $s) as $key => $word) {

        if (array_key_exists($patternArray[$key], $array)) {

            if ($array[$patternArray[$key]] != $word) {
                return false;
            }

        } elseif (in_array($word, $array)) {

            return false;

        } else {

            $array[$patternArray[$key]] = $word;

        }

    }

    return true;
}

var_dump(
    wordPattern('abba', 'dog cat cat dog')
);
