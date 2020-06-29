<?php

include "index.php";

$circleOne = new ComparableCircle(8, 'circleOne');
$circleTwo = new ComparableCircle(8, 'circleTwo');

var_dump($circleOne->compareTo($circleTwo));