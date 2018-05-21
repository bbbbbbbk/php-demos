<?php
declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 16:12
 */
class Plains extends Tile
{
    private $wealthFactor = 2;

    /**
     * @return int
     */
    public function getWealthFactor(): int
    {
        return $this->wealthFactor;
    }
}