<?php
// calculates simple interest
function simpleInterest($principal, $time) {
    $rate = 3.5;
    $q = $principal* $rate *$time;
$simple_interest = $q/100;
    return  $simple_interest;
}
// prints the product of two variables
function calculate($x,  $y){
$z = $x * $y;
return $z;
} 
?>