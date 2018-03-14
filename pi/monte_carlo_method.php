<?php
//使用蒙特卡洛算法计算圆周率,$times参数越大,pi值越准确,缺点是收敛速度非常慢并且算出值精度很低
function randFloat()
{
    return mt_rand(-100000,100000)/100000;
}
$times = 1000000;
$n = 0;
for($i = 0; $i < $times; $i++){
    $x = randFloat();
    $y = randFloat();
    if(sqrt(pow($x, 2) + pow($y, 2)) <= 1){
        $n++;
    }
}
echo round($n / $times * 4,2);