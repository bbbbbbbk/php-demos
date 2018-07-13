<?php
$login = new Login();
$login->attach(new SecurityMonitor());
$login->login();
$login->notify();
