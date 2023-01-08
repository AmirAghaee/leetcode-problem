<?php

/**
 * leetcode problem: gas-station
 *
 * url: https://leetcode.com/problems/gas-station/
 *
 * @param Integer[] $gas
 * @param Integer[] $cost
 * @return Integer
 */
function canCompleteCircuit(array $gas, array $cost): int
{
    $sGas = 0;
    $sCost = 0;
    $result = 0;
    $total = 0;
    for ($i = 0; $i < count($gas); $i++) {
        $sGas += $gas[$i];
        $sCost += $cost[$i];
    }
    if ($sGas < $sCost) return -1;
    for ($i = 0; $i < count($gas); $i++) {
        $total += $gas[$i] - $cost[$i];
        if ($total < 0) {
            $total = 0;
            $result = $i + 1;
        }
    }
    return $result;
}

var_dump(
    canCompleteCircuit([2, 3, 4], [3, 4, 3])
);