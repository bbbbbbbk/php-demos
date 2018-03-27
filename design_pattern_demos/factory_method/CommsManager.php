<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018/3/27
 * Time: 22:50
 */

abstract class CommsManager
{
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}