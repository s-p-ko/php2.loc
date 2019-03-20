<?php
namespace App\Controllers\Admin;

use App\Controller;

class Canceledit extends Controller
{
    protected function handle()
    {
        static::redirect('/?ctrl=admin/index');
    }
}