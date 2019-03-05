<?php

namespace App;

abstract class Model
{
    public const TABLE = '';
    public $id;

    /**
     * Get arrays of objects of a given class
     * @return array
     * @throws Exceptions\DbException
     */
    public static function findAll() : array
    {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class); //надо ли оставить []
    }

    public static function findById($id)
    {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id LIMIT 1';
        $params = [':id' => $id];
        $res = $db->query($sql, static::class, $params);
        return $res ? $res[0] : false;
    }
}