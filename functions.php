<?php
// calculates simple interest
function simpleInterest($principal, $time) {
    $rate = 3.5;
    $q = $principal* $rate *$time;
    $simple_interest = $q/100;
    return  $simple_interest;
}
$result = simpleInterest(2,5);
echo $result. "<br>";
// prints the product of two variables
function calculate($x,  $y){
    $z = $x * $y;
    return $z;
} 
 $total = calculate(5,3);
 echo $total. "<br>";
function sayHi()
{
   echo "hello all <br>";
}
sayHi();
function howAreYou($name, $country){ 
    echo "how are you $name? of $country <br>";
}
howAreYou("Taiye", "Nigeria");
howAreYou("Tope", "Ghana");
?>