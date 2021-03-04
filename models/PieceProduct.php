<?php


namespace app\models;


class PieceProduct extends Product
{
    protected int $finalPrice;
    protected int $quantity;

    public function costCalc (int $finalPrice){
        $this->finalPrice = $finalPrice / 2;
    }
}