<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-11-23
 * Time: 11:32
 */
//匹配a标签
$a = '#<a\b[^>]+\bhref=\"([^\"]*)\"[^>]*>([\s\S]*?)<\/a>#';
//匹配图片标签
$img = '#<img\b[^>]+\bsrc="([^"]*)"[^>]+\balt="([^"]*)"[^>]*>#';