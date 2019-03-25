<?php
namespace App\Controllers\Admin;

use App\Controller;
use App\Models\Article;

class Add extends Controller
{
    protected function handle()
    {
        if (isset($_POST['title'], $_POST['content'])) {
            $article = new Article();
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->save();
            static::redirect('/admin');
        }
    }
}
