<?php
function calculateArea($width,$length){
    $areaOfRectangle = $length * $width;
    return $areaOfRectangle;
}
$width = 4;
$length = 2;

$area = calculateArea($width, $length);
echo ("The area of a rectangle with a width of $width and $length is $area");
?>