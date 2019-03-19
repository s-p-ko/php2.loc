<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;
use App\View;

$view = new View();
$view->data = Article::findAll();

$view->display(__DIR__ . '/../../../templates/admin/index.php');