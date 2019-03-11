<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$article = new Article();

$postid = $_POST['id'] ?? false;
$title = $_POST['title'] ?? false;
$content = $_POST['content'] ?? false;

if (false != $postid && '' != $title && '' != $content) {
    $article->id = $postid;
    $article->title = $title;
    $article->content = $content;
    $article->save();
}
include __DIR__ . '/index.php';