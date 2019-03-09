<?php
namespace App;

use App\Config;

class Db
{
    protected $dbh;

    /**
     * Db constructor.
     */
    public function __construct()
    {
        $config = \app\Config::instance();
        $this->dbh = new \PDO(
            'mysql:host=' . $config->data['db']['host'] . ';dbname=' .
            $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']
        );
    }

    /**
     * Executes queries and return data
     * @param string $sql
     * @param array $params
     * @param string $class
     * @return array
     */
    public function query(string $sql, array $params = [], string $class =
    null) : array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        if (null === $class) {
            return $sth->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     * Execution request from models
     * @param string $sql
     * @param array $params
     * @return bool
     */
    public function execute(string $sql, array $params = []) : bool
    {
        return $this->dbh->prepare($sql)->execute($params);
    }

    /**
     * Gets last inserted id
     * @return string
     */
    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}