<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 10:44
 */
abstract class CompositeUnit extends Unit
{
    //该组合对象中的子对象存储在units集合当中
    private $units = [];

    function getComposite() : CompositeUnit
    {
        //返回组合对象的实例
        return $this;
    }

    protected function units() : array
    {
        return $this->units;
    }

    //从组合对象中移除成员对象
    function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function($a, $b){
            return $a === $b ? 0: 1;
        });
    }

    //增加成员对象到组合对象当中
    function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)){
            return;
        }
        $this->units[] = $unit;
    }
}