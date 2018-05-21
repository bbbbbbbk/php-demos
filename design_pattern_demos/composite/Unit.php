<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 10:42
 */
abstract class Unit
{
    function getComposite()
    {
        return null;
    }

    //获取战斗力的抽象方法
    abstract function bombardStrength() : int;
}