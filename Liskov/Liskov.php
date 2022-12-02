<?php

class Shape_O{
    protected $area=[];
    public function insert(Shape $shape,$hole): bool{
        
        return $shape->area()<=$this->areas[$hole];
        
        
    }
}

abstract class Shape{
    abstract public function area(String $param):float;
}

class Circle{
    public function area(String $param):float{
        return M_PI*5^2;
    }

}

class Square{
    public function area(){
        return 5*5;
    }

}
