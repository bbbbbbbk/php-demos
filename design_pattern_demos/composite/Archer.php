<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 11:14
 */
class Archer extends Unit
{
    //弓箭手攻击力为1
    function bombardStrength() : int
    {
        return 1;
    }
}