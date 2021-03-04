<?php

namespace app\models;

class Product extends Model
{
    protected int $id;
    protected string $title;
    protected string $description;
    protected int $price;
    protected int $categoryId;

    public function getByCategoryId(int $id)
    {

    }

    public function getTableName(): string
    {
        return 'products';
    }
}