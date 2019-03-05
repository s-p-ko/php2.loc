<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;

$data = Article::findAllLast();

include __DIR__ . '/templates/index.php';