<?php
require __DIR__ . '/../../autoload.php';

use App\Models\Article;

$data = Article::findById($_GET['id']);

if (false == $data ) {
    header('Location: /');
    exit();
} else {
    include __DIR__ . '/../../templates/article.php';
}