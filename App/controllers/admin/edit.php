<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$id = $_GET['id'] ?? false;

if (false !== $id && is_numeric($id)) {
    if ($data = Article::findById($id)) {
        $article = new Article();
        $article->id = $data->id;
        $article->title = $data->title;
        $article->content = $data->content;
    }
}
include __DIR__ . '/../../../templates/admin/edit.php';