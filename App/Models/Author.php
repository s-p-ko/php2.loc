<?php

namespace App\Models;

use App\Model;

/**
 * Class Author
 * @package App\Models
 */
class Author extends Model
{
    public const TABLE = 'authors';
    public $name;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
