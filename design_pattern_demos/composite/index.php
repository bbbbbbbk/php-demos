<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 11:16
 */
$main_army = new Army();
$main_army->addUnit(new Archer());
$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannon());

//现在$main_army 是一个成员对象为两个弓箭手和一个镭射炮的组合对象

echo $main_army->bombardStrength();
//输出 4
