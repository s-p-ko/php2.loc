<?php
namespace App\Controllers;

use App\Controller;
use App\Models\Article as ArticleModel;

class Article extends Controller
{
    public function handle()
    {
        $id = $this->data['data'];
        $this->view->article = ArticleModel::findById($id);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
