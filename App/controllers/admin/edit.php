<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;
use App\View;

$view = new View();
$view->data = Article::findById($_GET['id']);

if (false == $view->data) {
    header('Location: /App/controllers/admin/');
    exit();
}
$view->display(__DIR__ . '/../../../templates/admin/edit.php');