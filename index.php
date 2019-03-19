<?php
require __DIR__ . '/autoload.php';

$ctrlName = isset($_GET['cntrl']) ? ucfirst($_GET['cntrl']) : 'Index';
$ctrlClass = '\App\Controllers\\' . $ctrlName;
$ctrl = new $ctrlClass;
$ctrl->action();