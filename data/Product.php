<?php

class Product{
    protected string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name; // ini bisa karena masih dalam kelas yang ssama
        $this->price = $price;
    }
}
class ProductDummy extends Product
{
    public function info()
    {
        echo "Name $this->name";
    }
}