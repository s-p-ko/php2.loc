<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;
if (is_numeric($_POST['id'])) {
    $article = Article::findById($_POST['id']);
}
if (false !== $article &&
    (!empty($_POST['title']) && !empty($_POST['content']))) {
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}
header('Location: /App/controllers/admin/');
exit();