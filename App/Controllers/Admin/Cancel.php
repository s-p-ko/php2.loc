<?php

namespace App\Controllers\Admin;

use App\Controller;

/**
 * Class Cancel
 * @package App\Controllers\Admin
 */
class Cancel extends Controller
{
    /**
     * @return void
     */
    protected function handle()
    {
        static::redirect('/admin');
    }
}
