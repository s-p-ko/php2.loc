<?php
namespace App;

class Config
{
    public $data;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $configPath = __DIR__ . '/../config.php';
        $this->data = include($configPath);
    }
}