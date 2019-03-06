<?php
namespace App;

class Db
{
    protected $dbh;

    /**
     * Db constructor.
     */
    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'],
            $config['password']
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
}