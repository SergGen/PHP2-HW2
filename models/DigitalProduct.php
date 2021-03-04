<?php


namespace app\models;


class DigitalProduct extends Product
{
    protected int $finalPrice;
    protected int $quantityLic;

    public function costCalc (int $finalPrice){
        $this->finalPrice = $finalPrice;
    }
}