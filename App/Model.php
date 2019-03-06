<?php

namespace App;

abstract class Model
{
    protected const TABLE = '';
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
        return $db->query($sql, [], static::class);
    }

    /**
     * Find one object or return false
     * @param $id
     * @return mixed
     * @throws Exceptions\DbException
     */
    public static function findById($id)
    {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id LIMIT 1';
        $params = [':id' => $id];
        $res = $db->query($sql, $params, static::class);
        return $res ? $res[0] : false;
    }

    /**
     * Find all last objects, return array or false
     * @param int $limit
     * @return mixed
     * @throws Exceptions\DbException
     */
    public static function findAllLast(int $limit = 3)
    {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $limit;
        $res = $db->query($sql, [], static::class);
        return $res ? : false;
    }
}