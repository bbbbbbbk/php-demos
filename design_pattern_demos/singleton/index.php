<?php
require_once "Singleton.php";

$singleton = Singleton::getInstance();
$singleton->setProperty('name', 'foo');
unset($singleton);

$singleton2 = Singleton::getInstance();
print $singleton2->getProperty('name');
