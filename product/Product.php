<?php

class Product {
    public $name;
    public $type;
    public $price;

    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function printName(){

        return  $this->type . ' - ' . $this->name;
    }

}

