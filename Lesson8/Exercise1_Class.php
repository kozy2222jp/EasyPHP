<?php
class Vehicle{
    private $number = 0;
    private $gusQuantity = 0.0;
    
    public function __construct($num,$gus){
        $this->number = $num;
        $this->gusQuantity = $gus;
    }
    
    public function getNumber(){return $this->number; }
    public function getGusQuantity(){return $this->gusQuantity;}
}
class Vehicle2{
    private $number = 0;
    private $gusQuantity = 0.0;
    
    public function __construct($num,$gus){
        $this->number = $num;
        if($gus >= 0){
            $this->gusQuantity = $gus;
        } else {
            $this->gusQuantity = -1;
        }
    }
    
    public function getNumber(){return $this->number; }
    public function getGusQuantity(){return $this->gusQuantity;}
}