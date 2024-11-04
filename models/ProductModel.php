<?php

namespace app\models;

class ProductModel
{
    public string $name;
    public string $description;
    public int $price;

    public function tableName()
    {
        return "products";
    }
}