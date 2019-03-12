<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

if (false != $_POST['id'] && '' != $_POST['title'] && '' != $_POST['content']) {
    $article = new Article();
    $article->id = $_POST['id'];
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();
}
header('Location: /App/controllers/admin/');
exit();