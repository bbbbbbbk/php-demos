<?php
/*
从2018年的1月1日开始,每天存一笔钱，存钱的数量为当天月份 + 日期 + 星期（2018-01-01 星期1 存钱总数为 1 + 1 + 1 = 3）。
计算到2019年一共能够存多少钱，并且打印出日期 星期 当天存钱数和存钱总数
*/
$date = new  \DateTime('2018-01-01');
$interval = new \DateInterval('P1D');
$sum = 0;
while ($date->format('Y') < 2019) {
    $w = $date->format('w') ?: 7;
    $add = intval($date->format('m')) + intval($date->format('d')) + $w;
    $sum += $add;
    $date_str = $date->format('Y-m-d');
    echo "Date: $date_str Week: $w Add: $add Sum: $sum \n";
    $date->add($interval);
}
echo $sum;
