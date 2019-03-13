<?php
require __DIR__ . '/../../autoload.php';

use App\Models\Article;
use App\View;

$view = new View();
$view->article = Article::findById($_GET['id']);

if (false == $view->article) {
    header('Location: /');
    exit();
}
$view->display(__DIR__ . '/../../templates/article.php');