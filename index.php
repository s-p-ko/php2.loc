<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;
use App\View;

$view = new View();
$view->news = Article::findAll();

$view->display(__DIR__ . '/templates/index.php');