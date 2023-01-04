<?php

/**
 * leetcode problem: detect-capital
 *
 * url: https://leetcode.com/problems/detect-capital/
 *
 * @param String $word
 * @return Boolean
 */
function detectCapitalUse(string $word): bool
{
    return
        ctype_upper($word) ||
        ctype_lower($word) ||
        (
            ctype_upper($word[0]) && ctype_lower(substr($word, 1))
        );
}

var_dump(detectCapitalUse("Leetcode"));