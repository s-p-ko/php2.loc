<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$id = $_GET['id'] ?? false;

if (false !== $id && is_numeric($id)) {
    $article = new Article();
    $article->id = $id;
    $article->delete();
}
header('Location: /App/controllers/admin/');
exit();