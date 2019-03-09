<?php
require __DIR__ . '/../../autoload.php';

use App\Models\Article;

$id = $_GET['id'] ?? false;
$data = Article::findById($id);

if (false == $id || false == $data ) {
    header('Location: /');
    exit();
} else {
    include __DIR__ . '/../../templates/article.php';
}