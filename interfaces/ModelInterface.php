<?php

namespace app\interfaces;

interface ModelInterface
{
    public function getAll(): object;

    public function getById(int $id): object;

    public function delete(int $id): object;

    public function getTableName(): string;
}