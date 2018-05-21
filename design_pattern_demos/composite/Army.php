<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 11:07
 */
class Army extends CompositeUnit
{
    //作为一个组合对象 战斗力为成员对象战斗力之合
    function bombardStrength() : int
    {
        $result = 0;
        foreach ($this->units() as $unit){
            /* @var $unit Unit */
            $result += $unit->bombardStrength();
        }
        return $result;
    }
}