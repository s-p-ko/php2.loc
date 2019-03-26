<?php
namespace App;

/**
 * Trait CountableTrait
 * @package App
 */
trait CountableTrait
{

    protected $data;

    /**
     * Count elements of an object
     * @return int The custom count as an integer.
     */
    public function count()
    {
        return count($this->data);
    }
}
