<?php
namespace App;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view  = new View();
    }

    protected function access() : bool
    {
        return true;
    }


    public function action()
    {
        if ($this->access()) {
            return $this->handle();
        }
        die('Access closed');
    }

    protected static function redirect(string $path)
    {
        header('Location: ' . $path);
        exit;
    }


    abstract protected function handle();
}