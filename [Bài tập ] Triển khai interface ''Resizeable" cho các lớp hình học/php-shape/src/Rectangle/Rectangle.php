<?php
namespace App\Rectangle;
use App\Shape\Shape;

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }

    public function resize($percent)
    {
        // TODO: Implement resize() method.
        return $this->name." Before: ".$this->calculateArea()."--After: ".$this->calculateArea()*((100+$percent)/100);
    }
}