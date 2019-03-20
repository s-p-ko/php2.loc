<?php
require __DIR__ . '/autoload.php';

$ctrlName = isset($_GET['ctrl']) ? preg_replace('#/#', '\\', $_GET['ctrl']) : 'Index';
$ctrlName = ucwords($ctrlName, '\\');
$ctrlClass = '\App\Controllers\\' . $ctrlName;
$ctrl = new $ctrlClass;
$ctrl->action();