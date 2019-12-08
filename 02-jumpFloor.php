<?php

function jumpFloor($number)
{
    $list = [0, 1, 2];
    if ($number <= 2) {
        return $list[$number];
    }

    $a = 1;
    $b = 2;
    $ret = $a + $b;

    for ($i = 3; $i <= $number; $i++) {
        $ret = $a + $b;

        $a = $b;
        $b = $ret;
    }

    return $ret;
}


echo jumpFloor(5);
