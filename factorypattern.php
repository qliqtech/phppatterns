<?php

interface Shape{

    public function draw();

}

class Rectangle implements Shape{

    public $x;
    public $y;
    public $w;
    public $h;


    public function draw(){

        echo "Drawing a rectangle";
    }

}
class ShapeFactory{


    public function createshape($shape){

        if($shape == "rectangle"){

            return new Rectangle();

        }




        }


}



$rect = new Rectangle();

$rect->draw();
