<?php
$str = "文本文本hastag#hastag##测试tag#测试文本测试文本，#非常，厉害#，#厉害了，我的国#";
//匹配所有
$tags1 = "/#[^#]+#/";
//只匹配中文数字和字符
$tags2 = "/#[^#][\x{4e00}-\x{9fa5}A-Za-z0-9]+#/u";
preg_match_all($tags1, $str, $res1);
print_r($res1);
preg_match_all($tags2, $str, $res2);
print_r($res2);

/**
Array
(
    [0] => Array
        (
            [0] => #hastag#
            [1] => #测试tag#
            [2] => #非常，厉害#
            [3] => #厉害了，我的国#
        )

)
Array
(
    [0] => Array
        (
            [0] => #hastag#
            [1] => #测试tag#
        )

)
*/