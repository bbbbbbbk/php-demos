<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-11-23
 * Time: 14:38
 */
require_once __DIR__ . '/vendor/autoload.php';

use Root\MarkdownGenerator;

$generator = new MarkdownGenerator('crawler2');
$generator->setUrl('https://www.cnblogs.com/jackiebao/p/9999218.html');
$generator->setTags(['爬虫','php']);
$generator->setCategories(['学习笔记']);
$generator->generate();