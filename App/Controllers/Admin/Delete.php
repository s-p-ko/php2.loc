<?php
namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Delete extends Controller
{
    protected function handle()
    {
        $article = Article::findById($_GET['id']);
        $article->delete();
        static::redirect('/?ctrl=admin/index');
    }
}