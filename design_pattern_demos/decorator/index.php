
<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-21
 * Time: 16:18
 */

$tile = new Plains();

print $tile->getWealthFactor(); //2

print (new DiamondDecorator($tile))->getWealthFactor(); //4

print (new PollutionDecorator($tile))->getWealthFactor(); //0