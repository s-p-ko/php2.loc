<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$title = $_POST['title'] ?? false;
$content = $_POST['content'] ?? false;

//if ((isset($_POST['create']) && 'create' === $_POST['create']) && ('' !=
//        $title && '' != $content)) {

    if ('' != $title && '' != $content) {
    $article = new Article();
    $article->title = $title;
    $article->content = $content;
    $article->save();
}
include __DIR__ . '/index.php';