<?php

/**
 * leetcode problem: max-points-on-a-line
 *
 * url: https://leetcode.com/problems/max-points-on-a-line/
 *
 * @param Integer[][] $points
 * @return Integer
 */
function maxPoints(array $points): int
{
    if (count($points) < 3)
        return count($points);

    $lines = [1];
    for ($i = 0; $i < count($points) - 1; $i++) {
        $lines = ['prev' => max($lines)];

        for ($j = $i + 1; $j < count($points); $j++) {
            $direction = $points[$i][0] == $points[$j][0] ? 'vertical' : floor(10000 * ($points[$j][1] - $points[$i][1]) / ($points[$j][0] - $points[$i][0]));
            $lines[$direction] = isset($lines[$direction]) ? $lines[$direction] + 1 : 2;
        }
        if (max($lines) > (count($points) >> 1) + 1)
            return max($lines);

    }
    return max($lines);
}

var_dump(
    maxPoints([[1, 1], [2, 2], [3, 3]])
);
