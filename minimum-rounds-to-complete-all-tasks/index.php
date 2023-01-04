<?php

/**
 * leetcode problem: word-pattern
 *
 * url: https://leetcode.com/problems/minimum-rounds-to-complete-all-tasks/
 *
 * @param Integer[] $tasks
 * @return Integer
 */
function minimumRounds(array $tasks): int
{
    $uniqueDifficultyTaskList = array_count_values($tasks);
    $levelCount = 0;
    foreach ($uniqueDifficultyTaskList as $count) {

        if ($count < 2) return -1;

        $levelCount = $levelCount + ceil($count / 3);

    }
    return $levelCount;
}

var_dump(
    minimumRounds([66, 66, 63, 61, 63, 63, 64, 66, 66, 65, 66, 65, 61, 67, 68, 66, 62, 67, 61, 64, 66, 60,
        69, 66, 65, 68, 63, 60, 67, 62, 68, 60, 66, 64, 60, 60, 60, 62, 66, 64, 63, 65, 60, 69, 63, 68, 68, 69, 68, 61])
);