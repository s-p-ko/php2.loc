<?php
require __DIR__ . '/../../autoload.php';

use App\Models\Article;
use App\View;

$view = new View();
$view->article = Article::findById($_GET['id']);

//Block for the future answer 'Error 404'
//if (false == $view->article) {
//    header('Location: /');
//    exit();
//}
$view->display(__DIR__ . '/../../templates/article.php');