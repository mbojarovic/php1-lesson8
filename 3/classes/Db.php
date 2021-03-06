<?php

class Db
{
    protected $dbh;

    public function __construct()
    {
        include __DIR__ . '/../config.php';
        $dsn = DB_DSN;
        $this->dbh = new PDO($dsn, DB_USER, DB_PASS);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();

    }

    public function query(string $sql, array $data=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }
}