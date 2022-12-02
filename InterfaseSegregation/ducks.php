<?php

interface CanPlay{
    public function play();
}

interface CanFloat{
    public function float();
    
}

interface CanQuack{
    public function quack();
}

class Duck implements CanFloat,CanQuack,CanPlay{
 public function float(){
    echo "The duck is floating\n";
 }

 public function quack(){
    echo "The duck is quaking\n";
 }
 public function play(){
    $this->float();
    $this->quack();
 }

}

class WoonDuck implements CanFloat,CanPlay{
    public function float()
    {
        echo "The wooden duck is floating\n";
    }

    public function play()
    {
        $this->float();
    }
    

}


class Pond{
    public function sendToPlay(CanPlay $duck){
        $duck->play();
    }
}

$pond=new Pond();
$pond->sendToPlay(new Duck());
$pond->sendToPlay(new WoonDuck());