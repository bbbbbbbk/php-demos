<?php
/**
 * Created by PhpStorm.
 * User: bbbbbbbk
 * Date: 2018/3/27
 * Time: 22:51
 */

class BloggsCommsManager extends CommsManager
{
    function getHeaderText()
    {
        return "Blog header";
    }

    function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    function getFooterText()
    {
        return "Blog footer";
    }
}