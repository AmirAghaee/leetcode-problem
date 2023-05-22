<?php

/**
 * leetcode problem: valid-parentheses
 *
 * url: https://leetcode.com/problems/valid-parentheses/
 *
 * @param String $s
 * @return Boolean
 */
function isValid(string $s): bool
{
    $array = str_split($s);
    $openSymbol = [
        '{',
        '(',
        '[',
    ];

    $stackArray = [];
    foreach ($array as $item) {
        if (in_array($item, $openSymbol)) {
            if ($item == '{')
                $stackArray[] = '}';
            elseif ($item == '(')
                $stackArray[] = ')';
            elseif ($item == '[')
                $stackArray[] = ']';
        } else {
            if (end($stackArray) == $item) {
                array_pop($stackArray);
            } else {
                return false;
            }
        }
    }

    if (!empty($stackArray))
        return false;
    return true;
}

var_dump(
    isValid("([)]")
);
