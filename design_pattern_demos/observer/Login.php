<?php
class Login implements Observable
{
    const LOGIN_USER_UNKOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;

    private $status = [];

    private $observers;

    function __construct()
    {
        $this->observers = [];
    }

    function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    function detach(Observer $observer)
    {
        $newObservers = [];
        foreach($this->observers as $ob){
            if($observer !== $ob ){
                $newObservers[] = $ob;
            }
        }
        $this->observers = $newObservers;
    }

    function login()
    {
        //登录
    }

    function notify(){
        foreach($this->observers as $ob){
            $ob->update($this);
        }
    }

    private function setStatus($status, $user, $ip)
    {
        $this->status = [$status, $user, $ip];
    }

    function getStatus()
    {
        return $this->status;
    }
}
