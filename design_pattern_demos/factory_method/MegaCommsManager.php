<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018/3/27
 * Time: 22:59
 */

class MegaCommsManager extends CommsManager
{
    function getHeaderText()
    {
        return "Mega header";
    }

    function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    function getFooterText()
    {
        return "Mega footer";
    }
}