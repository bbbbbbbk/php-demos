<?php

/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 16:14
 */
abstract class TileDecorator extends Tile
{
    protected $tile;
    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}