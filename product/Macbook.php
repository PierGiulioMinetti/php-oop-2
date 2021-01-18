<?php
include_once __DIR__ .'/Product.php';

class Macbook extends Product{

    public $display;

    public function __construct($name, $type, $price, $display)
    {
        parent::__construct($name, $type, $price);
        $this->display=$display;
    }
};

?>