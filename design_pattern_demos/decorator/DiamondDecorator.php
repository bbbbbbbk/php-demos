<?php

/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 16:17
 */
class DiamondDecorator extends TileDecorator
{
    function getWealthFactor() : int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}