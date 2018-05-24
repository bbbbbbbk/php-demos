
<?php

/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018-05-24
 * Time: 14:19
 */
class ShapeMaker
{
    public static function makeCircle()
    {
        return new Circle();
    }

    public static function makeRectangle()
    {
        return new Rectangle();
    }

    public static function makeSquare()
    {
        return new Square();
    }
}