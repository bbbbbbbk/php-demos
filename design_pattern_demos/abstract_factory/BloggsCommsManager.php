<?php
class BloggsCommsManager extends CommsManager
{
    function getHeaderText()
    {
        return "BloggsCal header\n";
    }

    function make($flag_int)
    {
        switch ($flag_int){
            case self::APPT:
                return new BloggsApptEncoder();
                break;
            case self::CONTACT:
                return new BloggsContactEncoder();
                break;
            case self::TTD:
                return new BloggsTtdEncoder();
                break;
            default:
                return false;
        }
    }

    function getFooterText()
    {
        return "BloggsCal footer\n";
    }
}
