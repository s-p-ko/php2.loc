<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

if (isset($_POST['id'])) {
    $article = Article::findById($_POST['id']);
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}

header('Location: /App/controllers/admin/');
exit();