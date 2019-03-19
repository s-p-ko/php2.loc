<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$article = Article::findById($_GET['id']);
$article->delete();

header('Location: /App/controllers/admin/');
exit();