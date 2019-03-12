<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

if (false !== $_GET['id'] && is_numeric($_GET['id'])) {
    $article = Article::findById($_GET['id']);
    $article->delete();
}
header('Location: /App/controllers/admin/');
exit();