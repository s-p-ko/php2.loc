<?php
require __DIR__ . '/../autoload.php';

$parts = explode('/', $_SERVER['REQUEST_URI']);
$name = (!empty($parts[2])) ? ucfirst($parts[2]) : 'Index';
$classController = '\App\Controllers\Admin\\' . $name;
$controller = new $classController;
$controller->data = (!empty($parts[3])) ? $parts[3] : null;
$controller();
