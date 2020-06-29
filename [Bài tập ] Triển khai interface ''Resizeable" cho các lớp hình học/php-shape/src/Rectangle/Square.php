<?php
namespace App\Square;

use App\Rectangle\Rectangle;


class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function resize($percent)
    {

        return $this->name." Before: ".$this->calculateArea()."--After: ".$this->calculateArea()*((100+$percent)/100);
    }
}