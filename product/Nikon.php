<?php 
include_once __DIR__.'/Product.php';

class Nikon extends Product{
    
    public $resolution;
    public $sensor;

    public function __construct($name, $type, $price, $resolution, $sensor)
    {
        parent::__construct($name, $type, $price);
        $this->resolution=$resolution;
        $this->sensor=$sensor;

    }



}

?>