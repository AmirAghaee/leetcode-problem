<?php

/**
 * leetcode problem: delete-columns-to-make-sorted
 *
 * url: https://leetcode.com/problems/delete-columns-to-make-sorted/
 *
 * @param String[] $strs
 * @return Integer
 */
function minDeletionSize(array $strs): int
{
    $deletedColumnCount = 0;
    $arrayLine = [];
    foreach ($strs as $str) {
        $arrayLine[] = str_split($str);
    }

    for ($x = 0; $x < strlen($strs[0]); $x++) {
        $arrayColumn = array_column($arrayLine, $x);
        sort($arrayColumn);

        if (array_column($arrayLine, $x) !== $arrayColumn)
            $deletedColumnCount++;

        unset($z);
    }

    return $deletedColumnCount;
}

var_dump(
    minDeletionSize(["rrjk", "furt", "guzm"])
);
