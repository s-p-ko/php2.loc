<?php
namespace App\Controllers;

use App\Controller;
use App\Models\Article as ArticleModel;

class Article extends Controller
{
    public function handle()
    {
        $this->view->article = ArticleModel::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}