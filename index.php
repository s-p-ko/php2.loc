<?php
use App\Models\Article;
use App\Models\User;

require __DIR__ . '/autoload.php';

$art = Article::findAll();
var_dump($art);
echo '<br><br>';
$us = User::findAll();
var_dump($us);
