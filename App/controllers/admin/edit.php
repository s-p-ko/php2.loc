<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$data = Article::findById($_GET['id']);

if (false !== $data) {
    include __DIR__ . '/../../../templates/admin/edit.php';
}