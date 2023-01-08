<?php

/**
 * leetcode problem: longest-common-prefix
 *
 * url: https://leetcode.com/problems/longest-common-prefix/
 *
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix(array $strs): string
{
    $repeatedChar = [];
    $signal = false;
    $minLen = min(array_map('strlen', $strs));

    for ($i = 0; $i < $minLen; $i++) {
        $selectedChar = $strs[0][$i];

        foreach ($strs as $key => $str) {
            if ($str[$i] == $selectedChar) {
                if (count($strs) - 1 === $key)
                    $repeatedChar[] = $str[$i];
            } else {
                $signal = true;
                break;
            }
        }
        if ($signal) break;
    }

    if ($repeatedChar == [])
        return "";
    else
        return implode("", $repeatedChar);
}

var_dump(
    longestCommonPrefix(["flower", "flower", "flower", "flower"])
);
