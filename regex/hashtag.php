<?php
$str = "文本文本hastag#hastag##测试tag#测试文本测试文本，#非常厉害#";
$regex = "/#[^#]+#/";
preg_match_all($regex, $str, $res);
print_r($res);
