<?php

/**
 * leetcode problem: plus-one
 *
 * url: https://leetcode.com/problems/plus-one/
 *
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne(array $digits): array
{
    if (end($digits) != 9) {
        $digits[count($digits) - 1] = $digits[count($digits) - 1] + 1;
    } else {
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            if ($i == 0 && $digits[0] == 9) {
                $digits[0] = 0;
                $digits = [1, ...$digits];
            } elseif ($digits[$i] == 9) {
                $digits[$i] = 0;
            } else {
                $digits[$i] = $digits[$i] + 1;
                break;
            }
        }
    }
    return $digits;
}

var_dump(
    plusOne([7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 9])
);