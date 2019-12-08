<?php

/**
 * 
 * 大家都知道斐波那契数列，现在要求输入一个整数n，请你输出斐波那契数列的第n项（从0开始，第0项为0）。n<=39
 * 
 * 
 * 
 */

/**
 * 递归解法
 * 时间复杂度 O(2^n)
 */
// function Fibonacci($n)
// {
//     if ($n == 0) return 0;
//     if ($n == 1) return 1;

//     return Fibonacci($n - 1) + Fibonacci($n - 2);
// }






function Fibonacci($n)
{
    $res = [0, 1];
    if ($n < 2) {
        return $res[$n];
    }

    $a = 1;
    $b = 0;
    $ret = 0;

    for ($i = 2; $i <= $n; $i++) {
        $ret = $a + $b;

        $b = $a;
        $a = $ret;
    }

    return $ret;
}


echo Fibonacci(5);
