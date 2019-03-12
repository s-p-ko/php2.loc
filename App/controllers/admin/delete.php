<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

if (is_numeric($_GET['id'])) {
    $article = Article::findById($_GET['id']);
    if (false !== $article) {
        $article->delete();
    }
}
header('Location: /App/controllers/admin/');
exit();