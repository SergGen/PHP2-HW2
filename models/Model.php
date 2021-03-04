<?php

namespace app\models;

use app\interfaces\ModelInterface;
use app\services\Db;

abstract class Model implements ModelInterface
{
    protected object $db;
    protected string $tableName;

    public function __construct()
    {
        $this->db = new Db();
        $this->tableName = $this->getTableName();
    }

    public function getAll(): object
    {
        $sql = "SELECT * FROM {$this->tableName}";
        return $this->db->queryAll($sql);
    }

    public function getById(int $id): object
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function delete(int $id): object
    {
        $sql = "DELETE FROM {$this->tableName} WHERE id = {$id}";
        return $this->db->execute($sql);
    }
}