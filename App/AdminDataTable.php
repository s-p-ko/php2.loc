<?php

namespace App;

/**
 * Class AdminDataTable
 * @package App
 */
class AdminDataTable
{

    protected $models;
    protected $functions;

    /**
     * AdminDataTable constructor.
     * @param object $models
     * @param array $functions
     */
    public function __construct($models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    /**
     * @return array
     */
    public function render()
    {
        $table = [];
        foreach ($this->models as $model) {
            $row = [];
            foreach ($this->functions as $function) {
                $row[] = $function($model);
            }
            $table[] = $row;
        }
        return $table;
    }
}
