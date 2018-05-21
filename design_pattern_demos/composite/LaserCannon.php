<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 11:12
 */
class LaserCannon extends Unit
{
    //镭射炮的攻击力为2
    function bombardStrength() : int
    {
        return 2;
    }
}