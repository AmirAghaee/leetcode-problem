<?php

/**
 * leetcode problem: 3sum
 *
 * url: https://leetcode.com/problems/3sum/
 *
 * @param Integer[] $nums
 * @return Integer[][]
 */
function threeSum(array $nums): array
{
    $result = [];
    sort($nums);

    foreach ($nums as $i => $num) {
        if ($i > 0 && $num == $nums[$i - 1]) continue;

        $l = $i + 1;
        $r = count($nums) - 1;

        while ($l < $r) {
            $sum = $num + $nums[$l] + $nums[$r];

            if ($sum < 0) {
                $l += 1;
                continue;
            }

            if ($sum > 0) {
                $r -= 1;
                continue;
            }

            $result[] = [$num, $nums[$l], $nums[$r]];

            $l += 1;
            while (isset($nums[$l]) && $nums[$l] == $nums[$l - 1]) {
                $l += 1;
            }
        }
    }

    return $result;
}

var_dump(
    threeSum([-1, 0, 1, 2, -1, -4])
);
