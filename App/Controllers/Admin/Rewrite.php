<?php
namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Rewrite extends Controller
{
    protected function handle()
    {
        if (isset($_POST['id'], $_POST['title'], $_POST['content'])) {
            $article = Article::findById($_POST['id']);
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
        }
        static::redirect('/?ctrl=admin/index');
    }
}