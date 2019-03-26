<?php
namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class Index extends Controller
{
    protected function handle()
    {
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }
}
