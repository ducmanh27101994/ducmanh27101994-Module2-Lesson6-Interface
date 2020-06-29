<?php
namespace App\Circle;

use App\Shape\Shape;


class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.

        return $this->name." Before: ".$this->calculateArea()."--After: ".$this->calculateArea()*((100+$percent)/100);
    }


}