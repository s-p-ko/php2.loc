<?php
namespace App;

abstract class Controller
{
    protected $view;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view  = new View();
    }

    /**
     * @return bool
     */
    protected function access() : bool
    {
        return true;
    }


    /**
     * @return mixed
     */
    public function __invoke()
    {
        if ($this->access()) {
            return $this->handle();
        }
        die('Access closed');
    }

    /**
     * @param string $path
     */
    protected static function redirect(string $path)
    {
        header('Location: ' . $path);
        exit;
    }

    /**
     * @return mixed
     */
    abstract protected function handle();
}