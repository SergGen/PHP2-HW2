<?php


namespace app\models;


class WeightProduct extends Product
{
    protected int $finalPrice;
    protected int $weight;

    public function costCalc (int $finalPrice){
        $this->finalPrice = $finalPrice;
    }

    public function getWeight(int $weight){
        $this->$weight = $weight;
    }
}