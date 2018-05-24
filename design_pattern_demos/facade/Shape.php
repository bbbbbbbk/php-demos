<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-24
 * Time: 14:15
 */

abstract class Shape
{
    protected $name;

    public function desc()
    {
        return "This is a " . $this->name . PHP_EOL;
    }
}