<?php

namespace app\models;

class Category extends Model
{
    public int $id;
    public string $name;

    public function getTableName(): string
    {
        return 'categories';
    }
}