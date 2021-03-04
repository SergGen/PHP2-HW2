<?php


namespace app\models;


class User extends Model
{
    protected string $name;
    protected string $email;

    public function getByLogin(string $login): array
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE login = {$login}";
        return $this->db->queryOne($sql);
    }

    public function getTableName(): string
    {
       return 'users';
    }


}
