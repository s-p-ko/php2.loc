<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$article = new Article();

$id = $_GET['id'] ?? false;
$postid = $_POST['id'] ?? false;
$title = $_POST['title'] ?? false;
$content = $_POST['content'] ?? false;

if (isset($id) && is_numeric($id)) {
    if ($data = Article::findById($id)) {
        $article->id = $data->id;
        $article->title = $data->title;
        $article->content = $data->content;
    }
    include __DIR__ . '/../../../templates/admin/edit.php';
}

//Rewrites article
if ((isset($_POST['editor']) && 'rewrite' === $_POST['editor'])) {
    if (false != $postid && '' != $title && '' != $content) {
        $article->id = $postid;
        $article->title = $title;
        $article->content = $content;
        $article->save();
    }
    include __DIR__ . '/index.php';
}

//Saves article as the new one
if ((isset($_POST['editor']) && 'save' === $_POST['editor'])) {
    if ('' != $title && '' != $content) {
        $article->title = $title;
        $article->content = $content;
        $article->save();
    }
    include __DIR__ . '/index.php';
}

//Cancels action and redirects to the admin panel
if ((isset($_POST['editor']) && 'cancel' === $_POST['editor'])) {
    include __DIR__ . '/index.php';
}