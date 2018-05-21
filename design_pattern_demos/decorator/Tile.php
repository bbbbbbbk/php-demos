<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 16:11
 */
abstract class Tile
{
    abstract function getWealthFactor() : int;
}