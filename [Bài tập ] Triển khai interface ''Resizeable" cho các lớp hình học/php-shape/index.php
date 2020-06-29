<?php

require __DIR__ . '/vendor/autoload.php';

$circle = new \App\Circle\Circle("Circle",rand(1,20));
echo $circle->resize(rand(1,100));
echo "<br>";
echo $circle->calculateArea();
echo "<br>";
$rectangle = new \App\Rectangle\Rectangle('Rectangle',10,5);
echo $rectangle->resize(rand(1,100));
echo "<br>";
echo $rectangle->calculateArea();
echo "<br>";
$square = new \App\Square\Square('Square',10);
echo $square->resize(rand(1,100));
echo "<br>";
echo $square->calculateArea();

$array = [];
array_push($array,$circle->resize(10));
//$array[1] = $rectangle;
//$array[2] = $square;
var_dump($array);
//echo '<pre>';
//print_r($array);
//echo '</pre>';