<?php
class SecurityMonitor implements Observer
{
    function update(Observable $observable)
    {
        $status = $observable->getStatus();
        if($status[0] == Login::LOGIN_WRONG_PASS){
            //发送邮件给系统管理员
        }
    }
}
