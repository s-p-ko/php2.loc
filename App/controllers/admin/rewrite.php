<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$article = Article::findById($_POST['id']);

if (false !== $article ) {
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}
header('Location: /App/controllers/admin/');
exit();