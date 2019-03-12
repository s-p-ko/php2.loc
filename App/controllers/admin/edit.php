<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;


if (false !== $_GET['id'] && is_numeric($_GET['id'])) {
    $data = Article::findById($_GET['id']);
}
include __DIR__ . '/../../../templates/admin/edit.php';