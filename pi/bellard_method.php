<?php
//贝拉算法
function getNum($n)
{
    return (pow(-1, $n) / pow(2,10 * $n)) * (
            - (pow(2,5) / (4 * $n + 1))
            - ( 1 / (4 * $n + 3))
            + (pow(2,8) / (10 * $n + 1))
            - (pow(2,6) / (10 * $n + 3))
            - (pow(2,2) / (10 * $n + 5))
            - (pow(2,2) / (10 * $n + 7))
            + (1 / (10 * $n + 9))
        );
}

function sum($times)
{
    $sum = 0;
    for($i = 0; $i < $times; $i++){
        $sum += getNum($i);
    }
    $res = (1 / pow(2,6)) * $sum;
    return $res;
}

print sum(1000);

/**
3.1415926535898
**/
