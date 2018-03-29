<?php
abstract class CommsManager{
    const APPT = 1;
    const TTD = 2;
    const CONTACT = 3;

    abstract function getHeaderText();
    abstract function make($flag_int);
    abstract function getFooterText();
}