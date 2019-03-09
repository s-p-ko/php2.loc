<?php
require_once __DIR__ . '/../../../autoload.php';

use App\Models\Article;

$data = Article::findAll();

include __DIR__ . '/../../../templates/admin/index.php';